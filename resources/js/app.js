require('./bootstrap');
window.Vue = require('vue').default;
import { createApp } from 'vue';

let app=createApp({})
app.component('display-component', require('./components/DisplayBoardComponent.vue').default);
app.mount("#app");