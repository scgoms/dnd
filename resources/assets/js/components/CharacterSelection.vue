<template>
    <transition name="right-tray">
        <div v-if="creating" key="create" class="game-tray-container">
            <character-creator @tray-closed="$emit('tray-closed')" @back="creating = false"></character-creator>
        </div>
        <div v-else key="select" class="game-tray-container">
            <character-selector @open-character-creator="creating = true" @tray-closed="$emit('tray-closed')"></character-selector>
        </div>
    </transition>
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
