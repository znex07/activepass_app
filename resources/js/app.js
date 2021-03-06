/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
Vue.component('chat-messages', require('./components/ChatMessages.vue').default);
Vue.component('chat-form', require('./components/ChatForm.vue').default);

const app = new Vue({
    el: '#app_message',

    data: {
        messages: [],
    },

    created() {
        this.fetchMessages();

        Echo.private('chat').listen('MessageSent', (e) => {
          this.messages.push({
            message: e.message.message,
            user: e.user
          });
        });
    },
    updated() {
        // whenever data changes and the component re-renders, this is called.
        // this.$el.scrollTop = this.$el.lastElementChild.offsetTop;
        this.scroll();
    },
    methods: {
        fetchMessages() {
            axios.get('/messages').then(response => {
                this.messages = response.data;
            });
        },
        addMessage(message) {
            this.messages.push(message);

            axios.post('/messages', message).then(response => {
              console.log(response.data);

            });
        },
        scroll() {
            document.getElementById('cont').scrollTop = document.getElementById('cont').scrollHeight;
          }
    }
});
