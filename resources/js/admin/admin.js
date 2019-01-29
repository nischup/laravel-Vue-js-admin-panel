require('./../vue-assets');

Vue.component('admin-list', require('./List.vue'));

const admin = new Vue({
    el: '#admin'
});
