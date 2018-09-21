<template>
    <div>
        <game-tray :open="tray.show" @tray-closed="tray.show = false">
            <character-selection @tray-closed="tray.show = false"></character-selection>
        </game-tray>
        <div class="absolute flex flex-col pin-b w-full pb-14">
            <div class="flex flex-col">
                <div class="navbar-border -mb-2" style="z-index:8900"></div>
                <div class="footer-body">
                    <button class="btn btn-blue" @click.prevent="tray.show = !tray.show">+</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import GameTray from './GameTray';
    import CharacterSelection from './CharacterSelection'
    export default{
        components:{
            GameTray,
            CharacterSelection
        },
        data(){
            return {
                tray: {
                    show: true
                }
            }
        }
    }
</script>
