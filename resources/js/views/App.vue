<template>
<div>
  <nav class="navbar navbar-dark navbar-expand-lg bg-info shadow-sm p-0 py-2 mb-3">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fab fa-lg fa-expeditedssl"></i>  VueFocus
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><router-link :to="{ name: 'home' }" class="nav-link mr-3">Home</router-link></li>
          <li class="nav-item"><router-link :to="{ name: 'hello' }" class="nav-link mr-3">Hello World</router-link></li>
          <li class="nav-item"><router-link :to="{ name: 'users.index' }" class="nav-link mr-3">Users</router-link></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <router-view></router-view>
  </div>
</div>
</template>
<script>
export default {}
</script>