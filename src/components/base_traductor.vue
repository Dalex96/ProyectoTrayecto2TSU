<template>
  <div class="hello">

<center><div id="contenedor1">
  <center>
    <h1 class="encabezado">Materias</h1>
  </center>

  <a href="http://localhost:8080/#/inicio/">
    <div class="btn_componentes">
      
    </div>  
  </a>
  <a href="http://localhost:8080/#/traductor/">
    <div class="btn_componentes">
      
    </div> 
  </a>
  <a href="http://localhost:8080/#/documentos/">
    <div class="btn_componentes">
      
    </div> 
  </a>
  <a href="http://localhost:8080/#/info/">
    <div class="btn_componentes">
      
    </div>
  </a>  
  <a href="http://localhost:8080/#/info/">
    <div class="btn_componentes">
      
    </div>
  </a>  
  <a href="http://localhost:8080/#/info/">
    <div class="btn_componentes">
      
    </div>
  </a>
</div></center>
  <br>
<!-- <center><div id="area_encuesta" class="container">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" @click="f_inicio">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" @click="f_traductor">Traductor</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" @click="f_videos">Videos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" @click="f_imagenes">Imagenes</a>
  </li>  
  <li class="nav-item">
    <a class="nav-link" @click="f_documentos">Documentos</a>
  </li>  
  <li class="nav-item">
    <a class="nav-link" @click="f_info">Info</a>
  </li>  
</ul>
</div></center> -->


  </div>
</template>

<script>
import inicio from './inicio.vue'
import traductor from './traductor.vue'
import videos from './videos.vue'
import imagenes from './imagenes.vue'
import documentos from './documentos.vue'
import info from './info.vue'

export default {
  name: 'materias',
  components: {
    inicio,
    traductor,
    videos,
    imagenes,
    documentos,
    info
  },
  data () {
    return {
      materias: ''
    }
  },
  mounted () {
    // this.materias = $route.params.mate
  },
  methods: {

  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style type="text/javascript" scope>
@import url('https://fonts.googleapis.com/css?family=Pangolin');
@import url('https://fonts.googleapis.com/css?family=Pangolin|Permanent+Marker');
#area_encuesta{
  position: relative;
  bottom: auto;
  background: #0557D1;
  border-radius: 30px;
  padding: 20px;
  margin-top: 25px;
}
.btn_componentes{
  width: 150px;
  height: 150px;
  background: #07A431;
  text-align: center;
  border-radius: 80px;
  float: left;
  margin: 40px;
  margin-left:55px;

}
.encabezado{
  font-size: 70px;
  color: white;
  font-family: 'Permanent Marker', cursive;
/*  font-family: 'Pangolin', cursive;*/
}
#contenedor1{
  width: 800px;
  height: 550px;
  position: relative;
}

</style>
