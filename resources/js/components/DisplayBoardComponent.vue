<template>
    <div class="display-container">
        <svg class="board-svg" width="800" height="468" viewBox="0 0 800 468" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="display-board">
                <rect id="border" x="33.5366" y="34.9104" width="733.271" height="400.08" fill="#0F1D1E" stroke="#00FC92" stroke-width="3" stroke-dasharray="6 6"/>
                <g id="top-right-corner">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M799.657 82.4388V0L798.97 0L786.604 0L716.531 0V13.0528L786.604 13.0528V82.4388H799.657Z" fill="#00FC92"/>
                </g>
                <g id="bottom-right-corner">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M717.561 467.84L800 467.84V467.153V454.787V384.714H786.947V454.787L717.561 454.787V467.84Z" fill="#00FC92"/>
                </g>
                <g id="top-left-corner">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M82.4388 0L0 0L0 0.686963L0 13.0528L0 83.1258H13.0528L13.0528 13.0528L82.4388 13.0528V0Z" fill="#00FC92"/>
                </g>
                <g id="bottom-left-corner">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.343262 385.401L0.343262 467.84H1.03032V467.84H83.4691V454.787H13.3961L13.3961 385.401H0.343262Z" fill="#00FC92"/>
                </g>
            </g>
        </svg>
        <a :href="currentUrl" target="_blank" class="displayboard-img">
            <img :src="currentUrl" alt="Project Pictures">
        </a>
        <div class="controls d-flex justify-content-between mt-5">
            <div class="previous-button-container" @click="previous">
                <svg width="112" viewBox="0 0 168 87" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="previous-button">
                        <path id="text" d="M57.75 38C61.75 38 63.75 39.5 63.75 42.5C63.75 45.5 61.75 47 57.75 47H54.75L57.75 44C59.75 44 60.75 43.5 60.75 42.5C60.75 41.5 59.75 41 57.75 41H51.75V53L48.75 56V38H57.75ZM71.25 47L74.25 44C76.25 44 77.25 43.5 77.25 42.5C77.25 41.5 76.25 41 74.25 41H68.25V53H65.25V38H74.25C78.25 38 80.25 39.5 80.25 42.5C80.25 44.6875 79.1875 46.0781 77.0625 46.6719C79.1875 48.4531 80.25 50.5625 80.25 53H77.25C77.25 51.0312 76.5156 49.5391 75.0469 48.5234C73.5938 47.5078 72.3281 47 71.25 47ZM87.75 41C85.75 41 84.75 42 84.75 44V47C84.75 49 85.75 50 87.75 50H96.75V53H87.75C83.75 53 81.75 51 81.75 47V44C81.75 40 83.75 38 87.75 38H96.75V41H87.75ZM96.75 47H87.75L90.75 44H96.75V47ZM113.25 38L107.25 53H104.25L98.25 38H101.625L105.75 48.5L109.875 38H113.25ZM117.75 38V53H114.75V38H117.75ZM125.25 41C123.25 41 122.25 42 122.25 44V47C122.25 49 123.25 50 125.25 50H128.25C130.25 50 131.25 49 131.25 47V44C131.25 42 130.25 41 128.25 41H125.25ZM128.25 38C132.25 38 134.25 40 134.25 44V47C134.25 51 132.25 53 128.25 53H125.25C121.25 53 119.25 51 119.25 47V44C119.25 40 121.25 38 125.25 38H128.25ZM147.75 38H150.75V47C150.75 51 148.75 53 144.75 53H141.75C137.75 53 135.75 51 135.75 47V38H138.75V47C138.75 49 139.75 50 141.75 50H144.75C146.75 50 147.75 49 147.75 47V38ZM152.25 53L155.25 50H161.25C163.25 50 164.25 49.5 164.25 48.5C164.25 47.5 163.25 47 161.25 47H158.25C154.25 47 152.25 45.5 152.25 42.5C152.25 39.5 154.25 38 158.25 38H167.25L164.25 41H158.25C156.25 41 155.25 41.5 155.25 42.5C155.25 43.5 156.25 44 158.25 44H161.25C165.25 44 167.25 45.5 167.25 48.5C167.25 51.5 165.25 53 161.25 53H152.25Z" fill="white"/>
                        <path id="arrow" d="M26.5 84H48L24.5 43L48 3H26.5L3 43L26.5 84Z" fill="#0F1D1D" stroke="#01FE94" stroke-width="5"/>
                    </g>
                </svg>        
            </div>
            <div class="next-button-container" @click="next">
                <svg width="76" viewBox="0 0 114 87" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="next-button">
                        <path id="text" d="M12.75 44C12.75 42 11.75 41 9.75 41H6.75C4.75 41 3.75 42 3.75 44V53H0.75V44C0.75 40 2.75 38 6.75 38H9.75C13.75 38 15.75 40 15.75 44V53H12.75V44ZM23.25 41C21.25 41 20.25 42 20.25 44V47C20.25 49 21.25 50 23.25 50H32.25V53H23.25C19.25 53 17.25 51 17.25 47V44C17.25 40 19.25 38 23.25 38H32.25V41H23.25ZM32.25 47H23.25L26.25 44H32.25V47ZM44.0859 45.5938C47.1953 47.5781 48.75 50.0469 48.75 53H45.75C45.75 51.0312 44.3047 49.125 41.4141 47.2812C41.3516 47.25 41.2969 47.2188 41.25 47.1875C38.25 49.0625 36.75 51 36.75 53H33.75C33.75 50 35.3516 47.5 38.5547 45.5C35.3516 43.5 33.75 41 33.75 38H36.75C36.75 40 38.25 41.9375 41.25 43.8125C44.25 41.9375 45.75 40 45.75 38H48.75C48.75 41 47.1484 43.5 43.9453 45.5L44.0859 45.5938ZM53.25 38H65.25V41H59.25V53H56.25V41H50.25L53.25 38Z" fill="white"/>
                        <path id="arrow" d="M87.5 3H66L89.5 44L66 84H87.5L111 44L87.5 3Z" fill="#0F1D1D" stroke="#01FE94" stroke-width="5"/>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['pics', 'prefix'],
        data() {
            return {
                index: 0,
                pictures: [],
                currentUrl: '#'
            }
        },
        methods: {
            changeImage(){
                if (this.prefix){
                    this.currentUrl = this.prefix + this.pictures[this.index]
                }else{
                    this.currentUrl = this.pictures[this.index]
                }
            },
            next(){
                this.index += 1
                this.index %= this.pictures.length
                this.changeImage()
            },
            previous(){
                this.index -= 1
                if (this.index < 0){
                    this.index = this.pictures.length-1
                }
                this.changeImage()
            },
        },
        mounted() {
            this.pictures = JSON.parse(this.pics)
            this.changeImage()
        },
    }
</script>
