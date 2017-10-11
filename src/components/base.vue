<template>
  <div class="hello">

<center><div id="contenedor">
  <center>
    <h1 class="encabezado">Bienvenidos</h1>
  </center>

  <a href="http://localhost:8080/#/traductor/">
    <div class="btn_componentes">
      
    </div>  
  </a>
  <a href="http://localhost:8080/#/materias/">
    <div class="btn_componentes">
      
    </div> 
  </a>
  <a href="http://localhost:8080/#/documentos/">
    <div class="btn_componentes posicion_btn2">
      
    </div> 
  </a>
  <a href="http://localhost:8080/#/info/">
    <div class="btn_componentes posicion_btn2">
      
    </div>
  </a>
</div></center>
<!-- 
Modal de entrada -->
<div class="modal-mask" v-if="showModal_intro">
  <div class="modal-wrapper">
    <div class="modal-container">


      <div class="modal-body">
        <slot name="body">
          <img :src="img_static + name_img" id="img_id">
        </slot>
      </div>


    </div>
  </div>
</div>



  </div>
</template>

<script>

export default {
  name: 'base',
  components: {
  },
  data () {
    return {
      showModal_intro: true,
      img_static: './static/img/',
      name_img: 'logo.png'
    }
  },
  mounted () {
    setTimeout(() => { this.showModal_intro = true }, 10000)
  },
  methods: {

  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<!-- <link rel="stylesheet" type="text/css" href="../style.css"> -->
<style type="text/javascript" scope>
/*@import url('https://fonts.googleapis.com/css?family=Pangolin');
@import url('https://fonts.googleapis.com/css?family=Pangolin|Permanent+Marker');*/
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
  background: #2E64FE;
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
#contenedor{
  width: 500px;
  height: 550px;
  position: relative;
}
/*.posicion_btn2{
  position: relative;
  top: 150px;
}*/

.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 300px;
  height: 300px;
  margin: 0px auto;
  padding: 20px 30px;
/*  background-color: #fff;*/
/*  box-shadow: 0 2px 8px rgba(0, 0, 0, .33);*/
  transition: all .3s ease;
  font-family: Helvetica, Arial, sans-serif;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
}

.modal-default-button {
  float: right;
}

/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

#img_id{
  height: 200px;
  width: 200px;
}
</style>
