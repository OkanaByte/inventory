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
               productsColumns: ['serial', 'quantity', 'category', 'description', 'location', 'manufacture', 'model'],
               products: []
           }
       },
       created(){
           this.fetchproducts();
       },
       methods:{
           fetchproducts(){
               axios.get('api/products')
                   .then(response => this.products = _.map(response.data.products,
                   function(num){
                       var pick = _.pick(num, 'quantity','serial','manufacture.name', 'description.name', 'location.name', 'category.name', 'brand.name', 'status');
                       var objectProduct = {
                           quantity:pick.quantity,
                           serial:pick.serial,
                           manufacture:pick.manufacture.name,
                           description:pick.description.name,
                           location:pick.location.name,
                           category:pick.category.name,
                           model:pick.brand.name,
                           status:status
                      }
                return objectProduct
             }))
           }
       }
   }
</script>