<template>
  <div class="hello">
  <br>
<center><div id="area_encuesta_inicio" class="container">


<div id="p_encusta">
  <h1>BIEVENIDOS A AIDA</h1>
</div>

</div></center>
  </div>
</template>

<script>
export default {
  name: 'encuesta',
  data () {
    return {
      a: true,
      d: false,
      pregunta: '',
      respuestas: {
        a: '',
        b: '',
        c: '',
        d: ''
      },
      links: {},
      img_static: './static/img/',
      name_img: 'logo.png'
    }
  },
  mounted () {
    this.preg_respuestas()
  },
  methods: {
    url () {
      return this.img
    },
    preg_respuestas () {
      this.pregunta = 's'
      this.respuestas.a = 'a'
      this.respuestas.b = 'b'
      this.respuestas.c = 'c'
      this.respuestas.d = 'd'
    },
    p_siguiente () {

    },
    p_imagen () {
      this.a = false
      this.d = true
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style type="text/javascript" scope>
#area_encuesta_inicio{
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

</style>
