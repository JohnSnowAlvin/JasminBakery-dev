
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


importScripts('datatables.net-buttons-dt/css/buttons.dataTables.css')
importScripts('datatables.net-buttons-dt/css/buttons.dataTables.css/buttons.dataTables.min.css')


importScripts( 'datatables.net-buttons/js/buttons.colVis.js') ;
importScripts ('datatables.net-buttons/js/buttons.html5.js') ;
importScripts ('datatables.net-buttons/js/buttons.flash.js') ;
importScripts ('datatables.net-buttons/js/buttons.print.js') ;
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
