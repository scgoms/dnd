<template>
    <div class="flex flex-1">
        <l-map
            class="overflow-hidden"
            ref="map"
            :minZoom="minZoom" :crs="crs"
        >
            <l-image-overlay :url="url" :bounds="bounds"></l-image-overlay>
        </l-map>
    </div>
</template>
<script>
import { LMap, LImageOverlay } from 'vue2-leaflet';

export default {
    components: {
        LMap,
        LImageOverlay,
    },
    data () {
        return {
            url:'',
            defaultBounds: [[0,0], [500,500]],
            minZoom: -2,
            crs: L.CRS.Simple,
            width: 500,
            height: 500
        }
    },
    computed:{
        widthCenter(){
            return this.width / 2;
        },
        heightCenter(){
            return this.height / 2;
        },
        bounds(){
            return [
                [0,0],
                [this.width, this.height]
            ];
        }
    },
    watch: {
        // whenever question changes, this function will run
        url: function (oldUrl, newUrl) {
            this.setCenter(this.widthCenter, this.heightCenter);
        }
    },
    methods:{
        setCenter(width, height){
            this.$refs.map.mapObject.setView([width, height], 1);
        },
    },
    mounted() {
        this.setCenter(500, 500);
        Echo.channel('background-image')
            .listen('BackgroundImageReceived', (e) => {
                var img = new Image();
                img.src = e.image.path;
                img.onload = () => {
                this.width = img.width;
                this.height = img.height;
                this.url = e.image.path;
            }
        });
    }
}
</script>
<style>
    @import "../../../../node_modules/leaflet/dist/leaflet.css";
    .leaflet-container{
        background-color:white;
    }
</style>
