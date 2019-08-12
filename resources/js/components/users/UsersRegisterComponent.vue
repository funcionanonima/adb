<template>
    <div class="card" >
        <div class="card-header">Crear Usuario</div>

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
                    </div>
                </div>
            </form>
        </div>
    </div>  
</template>

<script>
export default {
    data(){
        return{
            users: [],
            user:{name:'', password:'', email:'', password_confirmation:''},
            activeEdit:false,
        }
    },
    methods:{
        statuse(item){
            if(item.statuse_id!=1){
                return 'Activo';
            }
            return 'Inactivo';
        },
        store(){
            const params = {
                // role_id:                this.user.role_id, 
                name:                   this.user.name, 
                password:               this.user.password, 
                email:                  this.user.email, 
                password_confirmation:  this.user.password_confirmation,
                };
                console.log(params)
            axios.post('/users', params)
                .then(res=>{
                    console.log('success')
                    console.log(res)
                    this.users.push(res.data)
                })
                .catch(err => {
                    console.log('error')
                    console.log(err)
                })
        },
        // deleteUser(item, index){
        //     console.log(item.name)
        //     axios.delete(`/users/${item.id}`)
        //     .then(()=>{
        //         this.users.splice(index, 1)
        //     })
        // },
        // editUserForm(item){
        //     this.activeEdit=true;
        //     this.user.name = item.name;
        //     this.user.email = item.email; 
        //     this.user.role_id = item.role_id;
        //     this.user.statuse_id = item.statuse_id;
        //     this.user.id = item.id;
        // },
        // editUser(item){
        //     const params = {
        //         name: item.name,
        //         email: item.email,
        //         role_id: item.role_id,
        //         statuse_id: item.statuse_id,
        //     }
        //     axios.put(`users/${item.id}`, params)
        //     .then(res=>{
        //         this.activeEdit = false;
        //         this.user = {role_id:'', statuse_id:'', name:'', password:'', email:'', password_confirmation:''};
        //         axios.get('/users')
        //         .then(res=>{
        //             this.users = res.data
        //         });
        //     })
        // },
        // cancel(){
        //     this.activeEdit = false;
        //     this.companie = {role_id:'', statuse_id:'', name:'', password:'', email:'', password_confirmation:''};
        // },
    }
}
</script>