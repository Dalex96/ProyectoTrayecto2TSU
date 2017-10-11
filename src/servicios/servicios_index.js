import http from '../cliente-http'

const querystring = require('querystring');

export default {

  insertarTransferencia(id, params){
    return http.cliente.post(`vef/TF/cobrar/?token=${id}`,querystring.stringify(params), {header: {'Content-type': 'multipart/form-data, boundary=AaB03x'}})
    .then(response => response)
  },  

  insertar(id,params) {
    return http.cliente.post(`vef/TDC/cobrar/directo?token=${id}`,querystring.stringify(params))
    .then(response => response)
  },   
}


