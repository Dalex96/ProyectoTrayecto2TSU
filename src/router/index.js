import Vue from 'vue'
import Router from 'vue-router'
import base from '@/components/base'
import inicio from '@/components/inicio'
import traductor from '@/components/traductor'
import videos from '@/components/videos'
import imagenes from '@/components/imagenes'
import documentos from '@/components/documentos'
import basetraductor from '@/components/base_traductor'
import info from '@/components/info'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'base',
      component: base
    },
    {
      path: '/inicio',
      name: 'inicio',
      component: inicio
    },
    {
      path: '/traductor',
      name: 'traductor',
      component: traductor
    },
    {
      path: '/videos',
      name: 'videos',
      component: videos
    },
    {
      path: '/imagenes',
      name: 'imagenes',
      component: imagenes
    },
    {
      path: '/documentos',
      name: 'documentos',
      component: documentos
    },
    {
      path: '/info',
      name: 'info',
      component: info
    },
    {
      path: '/materias',
      name: 'materias',
      component: basetraductor
    },
    {
      path: '/materias/videos',
      name: 'videosMaterias',
      component: videos
    }
  ]
})
