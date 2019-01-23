
require('./../vue-assets');

Vue.component('quote', require('./add.vue'));

const quote_message = new Vue({
    el: '#quote_message'
});
