/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('users-register-form', require('./components/users/UsersRegisterComponent.vue').default);
// Vue.component('users-table', require('./components/users/UsersTableComponent.vue').default);
Vue.component('users-component', require('./components/users/UsersComponent.vue').default);
Vue.component('companies-component', require('./components/companies/CompaniesComponent.vue').default);
Vue.component('companies-front-component', require('./components/companies/CompaniesFrontComponent.vue').default);
Vue.component('companies-list-component', require('./components/companies/CompaniesListComponent.vue').default);
Vue.component('areas-component', require('./components/areas/AreasComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
