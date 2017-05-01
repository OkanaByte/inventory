<template>
    <div>
        <form id="search">
            <input type="text" class="form-control" placeholder="Search...." name="query" v-model="searchQuery" aria-describedby="basic-addon1">
        </form>
        <div v-if="brands">
            <demo-grid :data="brands"
                       :columns="brandsColumns"
                       :filter-key="searchQuery">

            </demo-grid>
        </div>
        <div v-else>
            Loading......!
        </div>
    </div>
</template>
<style>

</style>
<script>
   import DemoGrid from './../Filtering/Filter.vue';
   export default{
       components:{
           DemoGrid
       },
       data(){
           return{
               searchQuery: '',
               brandsColumns: ['name'],
               brands: []
           }
       },
       created(){
           this.fetchbrands();
       },
       methods:{
           fetchbrands(){
               axios.get('api/brands')
                   .then(response => this.brands = response.data.brands)
           }
       }
   }
</script>