<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-dark"  v-if="activeEdit">
                <div class="card-header bg-dark text-white">Editar Área</div>

                <div class="card-body">
                    <form @submit.prevent="editArea(area)" aria-label="Editar Compañia">

                        <!-- <h3 class="px-4 bg-danger">Esta editando la empresa: {{companie.name}}</h3> -->
                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input v-model="area.name" id="name" type="text" class="form-control" name="name" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">Direccion Correo</label>

                            <div class="col-md-6">
                                <input v-model="area.body" id="body" type="body" class="form-control" name="body" required>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">Empresa</label>

                            <div class="col-md-6">
                                    <select v-model="area.companie_id" name="role_id" id="role_id" class="col-form-label" >                                            
                                        <option v-for="comp in companies" :key="comp.name" :value="comp.id">{{comp.name}}</option>                                                  
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




            <div class="card border-dark" v-if="activeNew" >
                <div class="card-header bg-dark text-white">Crear Area para empresa</div>

                <div class="card-body">
                    <form @submit.prevent="store" aria-label="Crear Área">
                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input v-model="area.name" id="name" type="text" class="form-control" name="name" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Descripcion</label>

                            <div class="col-md-6">
                                <input v-model="area.body" id="body" type="body" class="form-control" name="body" required>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">Empresa</label>

                            <div class="col-md-6">
                                    <select v-model="area.companie_id" name="companie_id" id="companie_id" class="col-form-label" >                                            
                                        <option v-for="comp in companies" :key="comp.name" :value="comp.id">{{comp.name}}</option>                                                  
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
            <button class="btn btn-dark mt-4" @click="newArea" v-else>Nuevo</button>         
        </div>
    </div>  
    <br>

            <div class="px-4">
                <h2>Listado De Areas</h2>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Empresa</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>                                
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item, index) in areas" :key="index">
                            <td>{{item.id}}</td>
                            <td>{{item.companie_id}}</td>
                            <td>{{item.name}}</td>
                            <td>{{item.body}}</td>
                            <td class="content-justify-rigth">
                            <!-- <td><button class="btn btn-sm btn-success">Ver</button> -->
                            <button @click="editAreasForm(item)" class="btn btn-sm btn-warning">Editar</button>
                            <button @click="deleteArea(item, index)" class="btn btn-sm btn-danger">Borrar</button></td>
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
            companies: [],
            areas: [],
            area:{name:'', body:'', companie_id:''},
            activeEdit:false,
            activeNew:false,
        }
    },
    created(){
        axios.get('companies')
        .then(res=>{
            this.companies = res.data
        });
        axios.get('areas')
        .then(res=>{
            this.areas = res.data
        });
    },
    methods:{
        store(){
            const params = {
                name:                   this.area.name, 
                body:                   this.area.body, 
                companie_id:            this.area.companie_id, 
                };
            axios.post('/areas', params)
                .then(res=>{
                    this.area = {name:'', body:'', companie_id:''};
                    this.areas.push(res.data)
                })
                .catch(err => {
                    console.log(err)
                })
        },
        deleteArea(item, index){
            console.log(item.name)
            axios.delete(`/areas/${item.id}`)
            .then(()=>{
                this.area = {name:'', body:'', companie_id:''};
                this.areas.splice(index, 1)
            });
        },
        editAreasForm(item){
            this.activeEdit=        true;
            this.activeNew=         false;
            this.area.name =        item.name;
            this.area.body =        item.body; 
            this.area.companie_id = item.companie_id;
            this.area.id =          item.id;
        },
        editArea(item){
            const params = {
                name:           item.name,
                body:           item.body,
                companie_id:    item.companie_id,
            }
            axios.put(`areas/${item.id}`, params)            
            .then(res=>{
                this.activeEdit = false;
                this.area = {name:'', body:'', companie_id:''};
                axios.get('/areas')
                .then(res=>{
                    this.areas = res.data
                });
            })
        },
        cancel(){
            this.activeEdit =   false;
            this.activeNew = false;
            this.area =     {name:'', body:'', companie_id:''};
        },
        newArea(){
            this.activeEdit = false;
            this.activeNew = true;
        },
    }
}
</script>


