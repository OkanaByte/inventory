<template>
    <div>
        <form id="search">
            <input type="text" class="form-control" placeholder="Search...." name="query" v-model="searchQuery" aria-describedby="basic-addon1">
        </form>
        <div v-if="descriptions">
            <demo-grid :data="descriptions"
                       :columns="descriptionsColumns"
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
               descriptionsColumns: ['name'],
               descriptions: []
           }
       },
       created(){
           this.fetchdescriptions();
       },
       methods:{
           fetchdescriptions(){
               axios.get('api/descriptions')
                   .then(response => this.descriptions = response.data.descriptions)
           }
       }
   }
</script>