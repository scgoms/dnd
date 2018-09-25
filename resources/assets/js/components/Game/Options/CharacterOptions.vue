<template>
    <div>
        <h1 class="text-2xl">Character</h1>
        <div v-if="hasActiveCharacter">
            You're currently playing as;
        </div>
        <div v-else>
            <div v-if="availableCharacters.length">
                You can select either an existing character, or create an entirely new one.
            </div>
            <div v-else>
                You haven't created any characters yet. You'll need to do that before you can start playing.
            </div>
            <button class="btn btn-red" @click.prevent="showCharacterCreator">
                Create a Character
            </button>
        </div>
    </div>
</template>
<script>
    export default {
        props:{
            myCharacters:{
                type: Array,
                default: () => []
            }
        },
        data(){
            return {
                availableCharacters: this.myCharacters,
                activeCharacter: {},
                creating: false
            }
        },
        computed:{
            hasActiveCharacter(){
                return Object.keys(this.activeCharacter).length && this.activeCharacter.constructor === Object;
            }
        },
        methods:{
            showCharacterCreator(){
                Event.$emit('open-character-creator');
            }
        }
    }
</script>
