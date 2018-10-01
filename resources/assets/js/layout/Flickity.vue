<template>
    <div :class="classes">
        <slot></slot>
    </div>
</template>
<script>
    import Flickity from 'flickity';
    import 'flickity/dist/flickity.min.css';
    export default{
        props: {
            wrapAround: {default: true},
            autoPlay: {default: false},
            cellAlign: {default: 'left'},
            contain: {default: 'true'},
            freeScroll: {default: false},
            initialIndex: {default: 0},
            prevNext: {default: true},
            pageDots: {default: false},
            classes: {default:''}
        },
        data(){
            return{
                flickity: {}
            }
        },
        mounted(){
            this.flickity = new Flickity(this.$el, {
                wrapAround: this.wrapAround,
                autoPlay: this.autoPlay,
                cellAlign: this.cellAlign,
                contain: this.contain,
                freeScroll: this.freeScroll,
                initialIndex: this.initialIndex,
                prevNextButtons: this.prevNext,
                pageDots: this.pageDots
            });
        }
    }
</script>
<style>
    .is-selected{
        z-index: 9900;
        transform: scale(1);
    }
</style>
