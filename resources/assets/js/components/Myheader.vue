<template>

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">



            <a class="navbar-item" href="http://127.0.0.1:8000/">
                <img src="" alt="CodeBin" width="112" height="48">
            </a>

            <div class="navbar-menu is-active">
                <router-link to="/home" class="navbar-item">Home</router-link>
            </div>

            <div class="navbar-menu is-active">
                <router-link to="/about" class="navbar-item">About</router-link>
            </div>





            <button class="button navbar-burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

</template>