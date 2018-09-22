<template>
    <div>
        <div class="flex justify-between">
            <h1 class="text-center text-3xl">Character Selection</h1>
            <button @click.prevent="$emit('tray-closed')" class="burger-close">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>
        </div>
        <div class="text-justify">
            <div v-if="hasActiveCharacter">
                You're currently playing as
                <h1>{{ activeCharacter.name }}</h1>, the level {{ activeCharacter.level}} {{ activeCharacter.class }}
            </div>
            <div v-else>
                <div v-if="availableCharacters.length">
                    You can select either an existing character, or create an entirely new one.
                </div>
                <div v-else>
                    You haven't created any characters yet. You'll need to do that before  you can start playing.
                </div>
                <button class="btn btn-red my-2" @click.prevent="$emit('open-character-creator')">New Character</button>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props:{
            myCharacters: {
                type: Array,
                default: () => []
            }
        },
        computed:{
            hasActiveCharacter(){
                return Object.keys(this.activeCharacter).length && this.activeCharacter.constructor === Object;
            }
        },
        data(){
            return{
                availableCharacters: [],
                activeCharacter: {},
            }
        },
        mounted(){
            this.availableCharacters = this.myCharacters;
        }
    }
</script>
