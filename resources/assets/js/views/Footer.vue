<template>
<nav class="flex flex-col">
    <div class="navbar-border -mb-2" style="z-index:9900"></div>
    <div class="navbar-body" style="z-index: 10000">
        <portal-target name="footer-items" multiple></portal-target>
    </div>
</nav>
</template>
<script>
    export default {
        props:{
            channel: {required: true}
        },
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
