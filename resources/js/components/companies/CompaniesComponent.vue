<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-dark"  v-if="activeEdit">
                <div class="card-header bg-dark text-white">Editar Usuario</div>

                <div class="card-body">
                    <form @submit.prevent="editCompanie(companie)" aria-label="Editar Compañia">

                        <!-- <h3 class="px-4 bg-danger">Esta editando la empresa: {{companie.name}}</h3> -->
                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input v-model="companie.name" id="name" type="text" class="form-control" name="name" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">Direccion Correo</label>

                            <div class="col-md-6">
                                <input v-model="companie.body" id="body" type="body" class="form-control" name="body" required>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">Usuario</label>

                            <div class="col-md-6">
                                    <select v-model="companie.user_id" name="role_id" id="role_id" class="col-form-label" >                                            
                                        <option v-for="user in users" :key="user.name" :value="user.id">{{user.name}}</option>                                                  
                                    </select>
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




            <div class="card" v-if="activeNew" >
                <div class="card-header">Crear Empresa</div>

                <div class="card-body">
                    <form @submit.prevent="store" aria-label="Crear Empresa">
                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input v-model="companie.name" id="name" type="text" class="form-control" name="name" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Descripcion</label>

                            <div class="col-md-6">
                                <input v-model="companie.body" id="body" type="body" class="form-control" name="body" required>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">Usuario</label>

                            <div class="col-md-6">
                                    <select v-model="companie.user_id" name="role_id" id="role_id" class="col-form-label" >                                            
                                        <option v-for="user in users" :key="user.name" :value="user.id">{{user.name}}</option>                                                  
                                    </select>
                            </div>
                        </div> 

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                                <button @click="cancel()" class="btn btn-danger">
                                    Cancelar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>    
            <button class="btn btn-dark mt-4" @click="newCompanie" v-else>Nuevo</button>         
        </div>
    </div>  
    <br>

            <div class="px-4">
                <h2>Listado De Empresas</h2>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>                                
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item, index) in companies" :key="index">
                            <td>{{item.id}}</td>
                            <td>{{item.user_id}}</td>
                            <td>{{item.name}}</td>
                            <td>{{item.body}}</td>
                            <td class="content-justify-rigth">
                            <!-- <td><button class="btn btn-sm btn-success">Ver</button> -->
                            <button @click="editCompaniesForm(item)" class="btn btn-sm btn-warning">Editar</button>
                            <button @click="deleteCompanie(item, index)" class="btn btn-sm btn-danger">Borrar</button></td>
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
            companies: [],
            companie:{name:'', body:'', user_id:''},
            activeEdit:false,
            activeNew:false,
        }
    },
    created(){
        axios.get('companies')
        .then(res=>{
            this.companies = res.data
        });
        axios.get('users')
        .then(res=>{
            this.users = res.data
        });
    },
    methods:{
        store(){
            const params = {
                name:                   this.companie.name, 
                body:                   this.companie.body, 
                user_id:                this.companie.user_id, 
                };
            axios.post('/companies', params)
                .then(res=>{
                    this.companie = {name:'', body:'', user_id:''};
                    this.companies.push(res.data)
                })
                .catch(err => {
                    console.log(err)
                })
        },
        deleteCompanie(item, index){
            console.log(item.name)
            axios.delete(`/companies/${item.id}`)
            .then(()=>{
                this.companie = {name:'', body:'', user_id:''};
                this.companies.splice(index, 1)
            })
        },
        editCompaniesForm(item){
            this.activeEdit=    true;
            this.activeNew= false;
            this.companie.name =        item.name;
            this.companie.body =        item.body; 
            this.companie.user_id =     item.user_id;
            this.companie.id =          item.id;
        },
        editCompanie(item){
            const params = {
                name:       item.name,
                body:       item.body,
                user_id:    item.user_id,
            }
            axios.put(`companies/${item.id}`, params)            
            .then(res=>{
                this.activeEdit = false;
                this.companie = {name:'', body:'', user_id:''};
                axios.get('/companies')
                .then(res=>{
                    this.companies = res.data
                });
            })
        },
        cancel(){
            this.activeEdit =   false;
            this.activeNew = false;
            this.companie =     {name:'', body:'', user_id:''};
        },
        newCompanie(){
            this.activeEdit = false;
            this.activeNew = true;
        },
    }
}
</script>


