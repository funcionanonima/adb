<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-dark"  v-if="activeEdit">
                <div class="card-header bg-dark text-white">Editar Usuario</div>

                <div class="card-body">
                    <form @submit.prevent="editUser(user)" aria-label="Editar Usuario">

                        <h3 class="px-4 bg-danger">Esta editando al usuario: {{user.name}}</h3>
                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input v-model="user.name" id="name" type="text" class="form-control" name="name" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Direccion Correo</label>

                            <div class="col-md-6">
                                <input v-model="user.email" id="email" type="email" class="form-control" name="email" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>   
                                <button @click="cancel()" class="btn btn-danger">
                                    Cancelar
                                </button>                             
                            </div>
                        </div>
                    </form>                    
                </div>
            </div>

            <div class="card border-dark"  v-if="activeNew">
                <div class="card-header bg-dark text-light">Crear Usuario</div>

                <div class="card-body">
                    <form @submit.prevent="store" aria-label="Crear Usuario">
                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input v-model="user.name" id="name" type="text" class="form-control" name="name" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Direccion Correo</label>

                            <div class="col-md-6">
                                <input v-model="user.email" id="email" type="email" class="form-control" name="email" required>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input v-model="user.password" id="password" type="password" class="form-control" name="password" required>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input v-model="user.password_confirmation" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>    
                                <button @click="cancel()" class="btn btn-danger">
                                    Cancel
                                </button>                            
                            </div>
                        </div>
                    </form>                    
                </div>
            </div>    
            <button class="btn btn-dark mt-4" @click="newUser" v-else>Nuevo</button>        
        </div>
    </div>  
    <br>
    

            <div class="px-4">
                <h2>Listado De Usuarios</h2>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Emaill</th>
                            <th>Acciones</th>                                
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item, index) in users" :key="index">
                            <td>{{item.id}}</td>
                            <td>{{item.name}}</td>
                            <td>{{item.email}}</td>
                            <td class="content-justify-rigth">
                            <!-- <td><button class="btn btn-sm btn-success">Ver</button> -->
                            <button @click="editUserForm(item)" class="btn btn-sm btn-warning">Editar</button>
                            <button @click="deleteUser(item, index)" class="btn btn-sm btn-danger">Borrar</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>  
</div>
</template>

<style>

</style>

<script>
export default {
    data(){
        return{
            users: [],
            user:{name:'', password:'', email:'', password_confirmation:''},
            activeEdit:false,
            activeNew:false,
        }
    },
    created(){
        axios.get('users')
        .then(res=>{
            this.users = res.data
        })
    },
    methods:{
        store(){
            const params = {
                name:                   this.user.name, 
                password:               this.user.password, 
                email:                  this.user.email, 
                password_confirmation:  this.user.password_confirmation,
                };
                console.log(params)
            axios.post('users', params)
                .then(res=>{
                    console.log('success')
                    console.log(res)
                    this.user = {name:'', password:'', email:'', password_confirmation:''};
                    this.users.push(res.data)
                })
                .catch(err => {
                    console.log('error')
                    console.log(err)
                })
        },
        deleteUser(item, index){
            console.log(item.name)
            axios.delete(`users/${item.id}`)
            .then(()=>{
                this.user = {name:'', password:'', email:'', password_confirmation:''};
                this.users.splice(index, 1)
            })
        },
        editUserForm(item){
            this.activeEdit=    true;
            this.activeNew =    false;
            this.user.name =    item.name;
            this.user.email =   item.email; 
            this.user.id =      item.id;
        },
        editUser(item){
            const params = {
                name:       item.name,
                email:      item.email,
            }
            axios.put(`users/${item.id}`, params)
            .then(res=>{
                this.activeEdit = false;
                this.user = {name:'', email:''};
                axios.get('/users')
                .then(res=>{
                    this.users = res.data
                });
            })
        },
        cancel(){
            this.activeEdit =   false;
            this.activeNew =   false;
            this.companie =     {name:'', password:'', email:'', password_confirmation:''};
        },
        newUser(){
            this.activeEdit = false;
            this.activeNew = true;
        },
    }
}
</script>


