require('./bootstrap');
window.Vue = require('vue').default;
import { createApp } from 'vue';
import CKEditor from '@ckeditor/ckeditor5-vue';

let app=createApp({}).use(CKEditor)
app.component('display-component', require('./components/DisplayBoardComponent.vue'));
app.component('editor-component', require('./components/EditorComponent.vue'));
app.component('dropzone-component', require('./components/DropZoneComponent.vue'));
app.component('contact-component', require('./components/ContactComponent.vue'));
app.mount("#app");