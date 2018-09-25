<template>
    <div>
        <tray
            name="game"
            :open="tray.open"
            enter-from="bottom"
            @closed="tray.open = false"
            @open="tray.open = true"
        >
            <character-options></character-options>
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
    import CharacterOptions from './Options/CharacterOptions';
    export default{
        components:{
            CharacterOptions
        },
        data(){
            return {
                tray:{
                    open: false
                }
            }
        }
    }
</script>
