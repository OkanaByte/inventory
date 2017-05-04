<template>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                        <a class="navbar-brand">
                        Inventory
                    </a>
                </div>
                 <div class="collapse navbar-collapse" id="app-navbar-collapse">
                     <ul class="nav navbar-nav navbar-left">
                        <li><a>Create CFAT</a></li>
                        <li><router-link :to="{ name: 'products'}">Tech Items</router-link></li>
                        <li><router-link :to="{ name: 'descriptions'}">Descriptions</router-link></li>
                        <li><router-link :to="{ name: 'brands'}">Model</router-link></li>
                        <li><router-link :to="{ name: 'manufactures'}">Manufactures</router-link></li>
                        <li><router-link :to="{ name: 'locations'}">Locations</router-link></li>
                        <li><router-link :to="{ name: 'categories'}">Categories</router-link></li>
                    </ul>
                 </div>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>
