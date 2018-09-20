<template>
<nav class="flex flex-col">
    <div class="flex h-12 wooden items-center justify-between px-2">
        <img src="/storage/images/topleft_bookend.png" class="hidden navbar-start" style="z-index:10000">
        <slot name="brand"></slot>
            <button @click.prevent="open = !open" :class="{'burger-close' : open}">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>
        <img src="/storage/images/topright_bookend.png" class="hidden navbar-end" style="z-index:10000">
    </div>
    <div class="navbar-border -mt-2" style="z-index:9900"></div>
    <transition name="left-tray">
        <div class="sidebar mt-12 black-transparent" style="z-index:9800" v-if="open">
            <slot></slot>
        </div>
    </transition>
</nav>
</template>
<script>
    export default {
        data(){
            return{
                open: false
            }
        },
        methods:{
            setOpen(value){
                this.open = value;
            },
        },
        mounted(){
            this.$parent.$on('show-chat', () => {
                this.setOpen(false);
                Event.$emit('show-chat');
            });
        }
    }
</script>
