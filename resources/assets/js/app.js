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

Vue.component('Game', require('./components/Game'));
Vue.component('GameMasterToolbar', require('./components/GameMasterToolbar'));
Vue.component('GameCreator', require('./components/GameCreator'));
Vue.component('dnd-modal', require('./components/DNDModal'));
Vue.component('navbar', require('./components/Navbar'));
Vue.component('carousel', require('./components/Carousels/Carousel'));
Vue.component('transition-expand', require('./components/Collapsible'));
Vue.component('game-footer', require('./components/FooterRed'));
Vue.component('tray', require('./components/Tray'));

const app = new Vue({
    el: '#app'
});
