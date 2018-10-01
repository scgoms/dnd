require('./bootstrap');

window.Vue = require('vue');
window.Event = new Vue();

import VModal from 'vue-js-modal';
Vue.use(VModal);

import PortalVue from 'portal-vue'
Vue.use(PortalVue)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('Game', require('./views/Game'));
Vue.component('GameMasterToolbar', require('./views/GameMasterToolbar'));
Vue.component('GameCreator', require('./views/GameCreator'));
Vue.component('navbar', require('./views/Navbar'));
Vue.component('game-footer', require('./views/Footer'));
Vue.component('dnd-modal', require('./layout/DNDModal'));
Vue.component('collapsible', require('./layout/Collapsible'));
Vue.component('tray', require('./layout/Tray'));
Vue.component('flickity', require('./layout/Flickity'));
Vue.component('glide', require('./layout/Glide'));

const app = new Vue({
    el: '#app'
});
