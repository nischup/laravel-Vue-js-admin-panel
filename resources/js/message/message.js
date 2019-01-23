require('./../vue-assets');

Vue.component('user-message-list', require('./List.vue'));

const user_message = new Vue({
    el: '#user_message'
});
