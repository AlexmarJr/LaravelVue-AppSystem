/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import axios from 'axios';
// import App from './components/app';
import VueRouter from 'vue-router';
import routes from './routes';

Vue.use(VueRouter);

Vue.mixin({
  
    methods:{
        get_user(){
           axios.get('api/get_user')
           .then(response => {
               console.log(response.data.name);
                return response.data.name;
           })
        }
    }
  })

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
