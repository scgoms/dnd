<template>
    <div class="flex flex-col">
        <div class="flex justify-between">
            <button @click.prevent="$emit('back')"><i class="left"></i></button>
            <h1>New Character</h1>
            <button @click.prevent="$emit('tray-closed')" class="burger-close">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>
        </div>
        <div class="relative">
            <transition name="left-tray">
                <character-details
                    v-if="step === 1"
                    :character="character"
                    @next="step++"
                    @back="$emit('back')"
                    @update="update($event)"
                ></character-details>
                <character-stats
                    v-if="step === 2"
                    :character="character"
                    @next="step++"
                    @back="step--"
                    @update="update($event)"
                ></character-stats>
                <character-skills
                    v-if="step === 3"
                    :character="character"
                    @next="step++"
                    @back="step--"
                    @update="update($event)"
                ></character-skills>
            </transition>
        </div>
    </div>
</template>
<script>
    import CharacterDetails from './CharacterDetails';
    import CharacterStats from './CharacterStats';
    import CharacterSkills from './CharacterSkills';
    export default {
        components: {
            CharacterDetails,
            CharacterStats,
            CharacterSkills
        },
        data(){
            return {
                step: 1,
                character: {
                    stats:{},
                    saving_throws: {},
                    skills: {}
                }
            }
        },
        methods:{
            update(event){
                this.character = event;
            }
        }
    }
</script>
