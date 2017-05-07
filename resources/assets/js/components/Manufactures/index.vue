<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search...." name="query" v-model="searchQuery" aria-describedby="basic-addon1">
                </div>
                <div v-if="manufactures">
                    <demo-grid :data="manufactures" :columns="manufacturesColumns" :filter-key="searchQuery">
    
                    </demo-grid>
                </div>
                <div v-else>
                    Loading......!
                </div>
            </div>
        </div>
    </div>
</template>
<style>

</style>
<script>
import DemoGrid from './../Filtering/Filter.vue';
export default {
    components: {
        DemoGrid
    },
    data() {
        return {
            searchQuery: '',
            manufacturesColumns: ['name'],
            manufactures: []
        }
    },
    created() {
        this.fetchmanufactures();
    },
    methods: {
        fetchmanufactures() {
            axios.get('api/manufactures')
                .then(response => this.manufactures = response.data.manufactures)
        }
    }
}
</script>