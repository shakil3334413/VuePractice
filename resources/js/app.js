/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import axios from 'axios';

window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter);



// Import Vue-Router

// import router from './router';

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
Vue.component('sidebar-component', require('./components/backend/pages/Sidebar.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const routes = [
    { path: '/admin', component: require('./components/backend/pages/Home.vue').default },
    { path: '/admin/subcategory', component: require('./components/backend/pages/SubCategory.vue').default },
    { path: '/admin/subcategoryup/:id', component: require('./components/backend/pages/SubCategoryUpdate.vue').default },
    { path: '/admin/category', component: require('./components/backend/pages/Category.vue').default },
    { path: '/admin/register', component: require('./components/backend/pages/AdminRegister.vue').default },
    { path: '/admin/login', component: require('./components/backend/pages/AdminLogin.vue').default }
  ]

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
  });

const app = new Vue({
    el: '#app',
    router
});

