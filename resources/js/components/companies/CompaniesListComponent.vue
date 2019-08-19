<template>
    <div>
        <ul v-for="(companie, index) in companies" :key="index" class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" :href="`areas/${companie.id}`">
                    {{companie.name}}
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data(){
        return{
            companies:[],
        }
    },
    created(){
        axios.get('empresas')
        .then(res => {
            this.companies = res.data
        })
    }
}
</script>