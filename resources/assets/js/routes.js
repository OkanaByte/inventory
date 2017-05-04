/**
 * Created by Dark on 27/04/2017.
 */
import Brands from './components/Brands/index.vue';
import Categories from './components/Categories/index.vue';
import Descriptions from './components/Descriptions/index.vue';
import Locations from './components/Locations/index.vue';
import Manufactures from './components/Manufactures/index.vue';
import Products from './components/Products/index.vue';

import createBrands from './components/Brands/create.vue';
import createCategories from './components/Categories/create.vue';
import createDescriptions from './components/Descriptions/create.vue';
import createLocations from './components/Locations/create.vue';
import createManufactures from './components/Manufactures/create.vue';
import createProducts from './components/Products/create.vue';

export default [
    {
        path: '/brands',
        component: Brands,
        name: 'brands'
    },
    {
        path: '/brands/create',
        component: createBrands,
        name: 'createBrands'
    },
    {
        path: '/categories',
        component: Categories,
        name: 'categories'
    },
    {
        path: '/categories/create',
        component: createCategories,
        name: 'createCategories'
    },
    {
        path: '/descriptions',
        component: Descriptions,
        name: 'descriptions'
    },
    {
        path: '/descriptions/create',
        component: createDescriptions,
        name: 'createDescriptions'
    },
    {
        path: '/locations',
        component: Locations,
        name: 'locations'
    },
    {
        path: '/locations/create',
        component: createLocations,
        name: 'createLocations'
    },
    {
        path: '/manufactures',
        component: Manufactures,
        name: 'manufactures'
    },
    {
        path: '/manufactures/create',
        component: createManufactures,
        name: 'createManufactures'
    },
    {
        path: '/products',
        component: Products,
        name: 'products'
    },
    {
        path: '/products/create',
        component: createProducts,
        name: 'createProducts'
    }

];