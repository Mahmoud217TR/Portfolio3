require('./bootstrap');
window.Vue = require('vue').default;
import { createApp } from 'vue';
import CKEditor from '@ckeditor/ckeditor5-vue';

let app=createApp({}).use(CKEditor)
app.component('display-component', require('./components/DisplayBoardComponent.vue').default);
app.component('editor-component', require('./components/EditorComponent.vue').default);
app.component('dropzone-component', require('./components/DropZoneComponent.vue').default);
app.mount("#app");