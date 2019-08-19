<template>
    <div>
        <div class="row">
            <div class="col-3"  v-for="(comp, index) in comps" :key="index" >
                <div class="card">
                    <div class="card-header">Empresa: {{comp.name}}</div>
                    <div class="card-body">
                        <p class="card-text">
                            {{comp.body}}
                        </p>
                        <a @click="showAreas(comp)" class="btn btn-primary">Detalle</a>
                    </div>
                </div>
            </div>
        </div>   
        <!-- <div class="row my-4" >              
            <div class="col-12">
                <div class="card ">
                    <div class="card-header">Areas</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3"  v-for="(area, index) in areas" :key="index" >
                            <div class="card">
                                <div class="card-header"> Area: {{area.name}}</div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            {{area.body}}
                                        </p>
                                        <a @click="showFiles(area)" class="btn btn-primary">Archivos</a>                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="row">
            <div class="col-3"  v-for="(fil, ind) in files" :key="ind" >
                <div class="card">
                    <div class="card-header">Documento {{fil.name}}</div>
                    <div class="card-body">
                        {{fil.route}}
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>
     
</template>

<script>
export default {
    data(){
        return{
            comps:[],
            comp:{id:'', name:'', body: ''},
            // areas:[],
            // area:{name:'', id:'', body:''},
            // fil:{name:''},
            // files:[],
            // areas2Show:false,
        }
    },
    created(){
        axios.get('empresas')
        .then(res => {
            this.comps = res.data
        });
    },
    methods:{
        // showAreas(companie){
        //     axios.get(`areas/${companie.id}`)
        //     .then(res => {
        //         this.areas = res.data
        //     });
        // },
    //     showFiles(area){
    //         axios.get(`chivos/${area.id}`)
    //         .then(res => {
    //             this.files = res.data
    //         });
    //     },
    },
}
</script>