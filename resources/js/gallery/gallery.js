require('./../vue-assets');

Vue.component('gallery-list', require('./List.vue'));

const gallery = new Vue({
    el: '#gallery'
});
