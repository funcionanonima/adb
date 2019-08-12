<template>
<div class="px-4">
    <h2>Listado De Usuarios</h2>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Emaill</th>
                <th>Status</th>
                <th>Role</th>
                <th>Acciones</th>                                
            </tr>
        </thead>
        <tbody>
            <tr v-for="(item, index) in users" :key="index">
                <td>{{item.id}}</td>
                <td>{{item.name}}</td>
                <td>{{item.email}}</td>
                <td>{{item.statuse_id}}</td>
                <td>{{item.role_id}}</td>
                <td>
                <!-- <td><button class="btn btn-sm btn-success">Ver</button> -->
                <button @click="editUserForm(item)" class="btn btn-sm btn-warning">Editar</button>
                <button @click="deleteUser(item, index)" class="btn btn-sm btn-danger">Borrar</button></td>
            </tr>
        </tbody>
    </table>
</div>
</template>
<style>

</style>
<script>
export default {
    data(){
        return{
            users: [],
            user:{role_id:'', statuse_id:'', name:'', password:'', email:'', password_confirmation:''},
        }
    },
    created(){
        axios.get('/users')
        .then(res=>{
            this.users = res.data
        })
    },
    methods:{
    }
}
</script>


