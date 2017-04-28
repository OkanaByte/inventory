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
                        <li><a>Tech Items</a></li>
                        <li><a>Descriptions</a></li>
                        <li><a>Model</a></li>
                        <li><a>Manufactures</a></li>
                        <li><a>Locations</a></li>
                        <li><a>Categories</a></li>
                    </ul>
                 </div>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>
