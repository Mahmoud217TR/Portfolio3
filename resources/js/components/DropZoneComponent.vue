<template>
    <div class="container">
        <div class="dropzone-area row justify-content-center" ref="imageUpload">
            <div class="drop-message col-12 py-2 text-center bg-dark h2">
                Drop your files Here
            </div>
        </div>
    </div>
</template>
<script>
import { Dropzone } from 'dropzone';
export default {
    props: ['url','csrfToken','method'],
    data() {
        return {
            dropzone: null,
        }
    },
    mounted() {
        this.dropzone= new Dropzone(this.$refs.imageUpload,{
            url: this.url,
            headers: {
                    "X-CSRF-TOKEN": this.csrfToken
            },
            method: this.method,
        });
    },
}
</script>