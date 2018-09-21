<template>
    <transition name="right-tray">
        <div v-if="creating" key="create" class="absolute w-full p-2 bg-blue">
            <character-creator @tray-closed="$emit('tray-closed')"></character-creator>
        </div>
        <div v-else key="select" class="absolute w-full">
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
                creating: false
            }
        }
    }
</script>
