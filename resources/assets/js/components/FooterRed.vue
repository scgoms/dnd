<template>
<nav class="flex flex-col">
    <tray
        name="game"
        :open="tray.open"
        enter-from="bottom"
        @closed="tray.open = false"
    >
        Some additional content
    </tray>
    <div class="navbar-border -mb-2" style="z-index:9900"></div>
    <div class="navbar-body" style="z-index: 10000">
    <button @click.prevent="tray.open = !tray.open" :class="{'burger-close' : tray.open}">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </button>
    </div>
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
        methods:{
            setOpen(value){
                this.open = value;
            },
        },
        mounted(){
        }
    }
</script>
