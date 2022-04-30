/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue').default;

import VueRouter from 'vue-router'

Vue.use(VueRouter)
import routes from './routes';

const router = new VueRouter({
    mode: 'history',
    routes 
  }); 

  //using vform
  import Form from 'vform';
  window.Form = Form;

  //custom event
window.Fire = new Vue();

//progressbar
import VueProgressBar from 'vue-progressbar';
Vue.use(VueProgressBar,{
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '3px'
});

//sweetalert2
import Swal from 'sweetalert2';
window.Swal = Swal;

const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

window.toast = toast;

//gates
import Gate from './Gate';
Vue.prototype.$gate = new Gate(window.user);

import moment from 'moment';
import axios from 'axios';

//filters
Vue.filter('monthDateTime',function(date){
  return moment(date).format('MMM Do YYYY')
});

Vue.filter('capitalizeFirstLetter',function(text){
  return text.charAt(0).toUpperCase() + text.slice(1)
}); 

Vue.filter('formatDate', function(date) {
  if (date) {
    return moment(String(date)).format('DD MMM hh:mm a')
  }
});

//find loggedin user id
Vue.prototype.$userId = document.querySelector("meta[name='currentuser_id']").getAttribute('content');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('vote-component', require('./components/Vote.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#vote',
    router, });
