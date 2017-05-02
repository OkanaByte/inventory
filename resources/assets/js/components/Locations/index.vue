<template>
    <div>
        <form id="search">
            <input type="text" class="form-control" placeholder="Search...." name="query" v-model="searchQuery" aria-describedby="basic-addon1">
        </form>
        <div v-if="locations">
            <demo-grid :data="locations"
                       :columns="locationsColumns"
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
               locationsColumns: ['name'],
               locations: []
           }
       },
       created(){
           this.fetchlocations();
       },
       methods:{
           fetchlocations(){
               axios.get('api/locations')
                   .then(response => this.locations = response.data.locations)
           }
       }
   }
</script>