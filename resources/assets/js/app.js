require('./bootstrap');

window.Vue = require('vue');
window.Event = new Vue();

import VModal from 'vue-js-modal';
Vue.use(VModal);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('Lobby', require('./components/Lobby'));
Vue.component('GameMasterToolbar', require('./components/GameMasterToolbar'));
Vue.component('GameCreator', require('./components/GameCreator'));
Vue.component('dnd-modal', require('./components/DNDModal'));
Vue.component('navbar', require('./components/Navbar'));
Vue.component('carousel', require('./components/Carousel'));
Vue.component('class-carousel', require('./components/ClassCarousel'));
Vue.component('transition-expand', require('./components/Collapsible'));

const app = new Vue({
    el: '#app'
});
