<template>
    <div>
        <form id="search">
            <input type="text" class="form-control" placeholder="Search...." name="query" v-model="searchQuery" aria-describedby="basic-addon1">
        </form>
        <div v-if="manufactures">
            <demo-grid :data="manufactures"
                       :columns="manufacturesColumns"
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
               manufacturesColumns: ['name'],
               manufactures: []
           }
       },
       created(){
           this.fetchmanufactures();
       },
       methods:{
           fetchmanufactures(){
               axios.get('api/manufactures')
                   .then(response => this.manufactures = response.data.manufactures)
           }
       }
   }
</script>