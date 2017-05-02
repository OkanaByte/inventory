/**
 * Created by Dark on 27/04/2017.
 */
import Brands from './components/Brands/index.vue';
import Categories from './components/Categories/index.vue';
import Descriptions from './components/Descriptions/index.vue';
import Locations from './components/Locations/index.vue';
import Manufactures from './components/Manufactures/index.vue';


export default [
    {
        path: '/brands',
        component: Brands,
        name: 'brands'
    },
    {
        path: '/categories',
        component: Categories,
        name: 'categories'
    },
    {
        path: '/descriptions',
        component: Descriptions,
        name: 'descriptions'
    },
    {
        path: '/locations',
        component: Locations,
        name: 'locations'
    },
    {
        path: '/manufactures',
        component: Manufactures,
        name: 'manufactures'
    }

];