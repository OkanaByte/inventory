<template>
    <div>
        <form id="search">
            <input type="text" class="form-control" placeholder="Search...." name="query" v-model="searchQuery" aria-describedby="basic-addon1">
        </form>
        <div v-if="categories">
            <demo-grid :data="categories"
                       :columns="categoriesColumns"
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
               categoriesColumns: ['name'],
               categories: []
           }
       },
       created(){
           this.fetchcategories();
       },
       methods:{
           fetchcategories(){
               axios.get('api/categories')
                   .then(response => this.categories = response.data.categories)
           }
       }
   }
</script>