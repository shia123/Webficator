/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import VueResource from 'vue-resource';
Vue.use(VueResource)
import routes from './routes';
import NavComponent from './components/NavComponent';
import HmodalComponent from './components/HmodalComponent';
import VueSidebarMenu from 'vue-sidebar-menu';
import 'vue-sidebar-menu/dist/vue-sidebar-menu.css'


Vue.use(VueSidebarMenu)

const router = new VueRouter({
    mode:'history',
    hash:false,
    path: '/webcontents',
    components: NavComponent,
    name: 'Nav',

    path: '/webcontent/test',
    components: HmodalComponent,
    name: 'Sec',
    
})


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('nav-component', require('./components/NavComponent.vue').default);
Vue.component('hbody-component', require('./components/HbodyComponent.vue').default);
Vue.component('footer-component', require('./components/HfooterComponent.vue').default);
Vue.component('hmodal-component', require('./components/HmodalComponent.vue').default);
Vue.component('onavbar-component', require('./components/ownerVue/OwnerNavbarComponent.vue').default);
Vue.component('osidebar-component', require('./components/ownerVue/OwnerSidebarComponent.vue').default);
Vue.component('odashboard-component', require('./components/ownerVue/OwnerDashboardComponent.vue').default);
Vue.component('ofooter-component', require('./components/ownerVue/OwnerFooterComponent.vue').default);
Vue.component('ownerdash-component', require('./components/ownerVue/OwnerDashboard').default);

new Vue({
    router,
}).$mount('#app');

