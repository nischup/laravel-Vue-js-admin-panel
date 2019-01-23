require('./../vue-assets');

Vue.component('team-member-list', require('./List.vue'));

const team_member = new Vue({
    el: '#team_member'
});
