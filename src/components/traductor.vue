<template>
  <div class="hello">
  <br>
<center><div id="area_encuesta" class="container">



<div id="p_encusta" >
  <textarea rows="7" cols="70" id="span-preview" disabled class="container"></textarea>
</div>    
<button type="button" class="btn btn-primary" id="btn_escucha" @click="startArtyom">Escuchar</button>
</div></center>





<div class="modal-mask" v-if="showModal">
  <div class="modal-wrapper">
    <div class="modal-container">


      <div class="modal-body">
        <slot name="body">
          Escuchando...
        </slot>
      </div>


    </div>
  </div>
</div>











  </div>
</template>

<script>
import Artyom from 'artyom.js'

const Jarvis = new Artyom()

var settings = {
  continuous: true, // Don't stop never because i have https connection
  onResult: function (text) {
    // Show the Recognized text in the console
    document.getElementById('span-preview').value = text
    console.log('Recognized text: ', text)
  },
  onStart: function () {
    console.log('Dictation started by the user')
  },
  onEnd: function () {
    console.log('Dictation stopped by the user')
  }
}
export default {
  name: 'encuesta',
  data () {
    return {
      texto: '',
      span: '',
      userDictation: '',
      showModal: false
    }
  },
  mounted () {
    this.UserDictation = Jarvis.newDictation(settings)
  },
  methods: {
    startArtyom () {
      this.showModal = true
      this.UserDictation.start()
      setTimeout(() => { this.stopArtyom() }, 10000)
    },

    stopArtyom () {
      this.showModal = false
      this.UserDictation.stop()
    },

    prueba () {

    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style type="text/javascript" scope>
#area_encuesta{
  position: relative;
  bottom: auto;
  background: #0557D1;
  border-radius: 30px;
  padding: 20px;
  margin-top: 25px;
}
#p_encusta{
  background-color: #ffffff;
  height: 200px;
  padding: 10px;
  border-radius: 30px;
}
#btn_escucha{
  margin: 60px;
  padding: 30px;
  border-radius: 67px;
}

#span-preview {
  border-style: none;
  background: white;
  min-height: 180px;
  max-height: 180px;
  border-image-outset: none;
  resize: none;
}

/*
STYLE MODAL*/

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
  width: 200px;
  height: 200px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 100px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
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
</style>
