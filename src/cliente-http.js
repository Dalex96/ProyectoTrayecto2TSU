import axios from 'axios';

const API_COBRO = axios.create({
    baseURL: "http://192.168.2.172:3000/v1",
});

export default {
	cliente: API_COBRO,
	install(Vue){
		Vue.prototype.$http = API_COBRO
	}
}

