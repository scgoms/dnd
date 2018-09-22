<template>
    <div class="game-tray-container">
        <transition name="left-tray">
            <character-creator
                @tray-closed="$emit('tray-closed')"
                @back="creating = false"
                v-if="creating"
            ></character-creator>
            <character-selector
                @open-character-creator="creating = true"
                @tray-closed="$emit('tray-closed')"
                v-else
            ></character-selector>
        </transition>
    </div>
</template>
<script>
    import CharacterCreator from './CharacterCreatorRed';
    import CharacterSelector from './CharacterSelector';
    export default{
        components:{
            CharacterSelector,
            CharacterCreator
        },
        data(){
            return{
                creating: true
            }
        }
    }
</script>
