<template>
    <div>
        <tray
            name="game"
            :open="tray.open"
            enter-from="bottom"
            @closed="tray.open = false"
        >
            Character Selection Stuff
        </tray>
        <portal to="footer-items">
            <button @click.prevent="tray.open = !tray.open" :class="{'burger-close' : tray.open}">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>
        </portal>
    </div>
</template>
<script>
    export default{
        data(){
            return {
                tray:{
                    open: false
                }
            }
        }
    }
</script>
