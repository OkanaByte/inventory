<template>
    <div>
        <form id="search">
            <input type="text" class="form-control" placeholder="Search...." name="query" v-model="searchQuery" aria-describedby="basic-addon1">
        </form>
        <div v-if="products">
            <demo-grid :data="products"
                       :columns="productsColumns"
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
               productsColumns: ['serial', 'quantity'],
               products: []
           }
       },
       created(){
           this.fetchproducts();
       },
       methods:{
           fetchproducts(){
               axios.get('api/products')
                   .then(response => this.products = response.data.products)
           }
       }
   }
</script>