<template>
<nav class="navbar-container">
    <div class="navbar-body">
        <img src="/storage/images/topleft_bookend.png" class="hidden navbar-start" style="z-index:10000">
        <slot name="brand"></slot>
        <button @click.prevent="tray.open = !tray.open" :class="{'burger-close' : tray.open}">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </button>
        <img src="/storage/images/topright_bookend.png" class="hidden navbar-end" style="z-index:10000">
    </div>
    <div class="navbar-border -mt-2" style="z-index:9900"></div>
    <tray
        name="nav"
        :open="tray.open"
        @closed="tray.open = false"
    >
        <slot/>
    </tray>
</nav>
</template>
<script>
    export default {
        data(){
            return{
                tray:{
                    open: false
                }
            }
        },
        mounted(){
        }
    }
</script>
