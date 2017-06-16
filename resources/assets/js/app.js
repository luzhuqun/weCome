
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

/*import Vue from 'vue';
import iView from 'iview';*/
window.Vue = require('vue')
window.iView = require('iview')

Vue.use(iView);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('affix', require('./components/affix.vue'));
Vue.component('head-bar', require('./components/head-bar.vue'));
Vue.component('menu-bar', require('./components/menu-bar.vue'));
Vue.component('foot-bar', require('./components/foot-bar.vue'));

const app = new Vue({
    el: '#app'
});
