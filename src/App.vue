<template>
  <div id="app">
    <router-view active-class="active" exact tag="li" :to="{ name: 'inicio' }">Inicio</router-view>
  </div>
</template>

<script>
export default {
  name: 'app'
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background: #58ACFA;
  min-height: 100vh;   
}
</style>
