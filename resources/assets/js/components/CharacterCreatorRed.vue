<template>
    <div class="flex flex-col">
        <div class="flex justify-between">
            <button @click.prevent="$emit('back')"><i class="left"></i></button>
            <h1 class="text-3xl">New Character</h1>
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
                <character-proficiencies
                    v-if="step === 4"
                    :character="character"
                    @next="step++"
                    @back="step--"
                    @update="update($event)"
                ></character-proficiencies>
                <character-equipment
                    v-if="step === 5"
                    :character="character"
                    @next="step++"
                    @back="step--"
                    @update="update($event)"
                ></character-equipment>
                <character-inventory
                    v-if="step === 6"
                    :character="character"
                    @next="step++"
                    @back="step--"
                    @update="update($event)"
                ></character-inventory>
                <character-ideals
                    v-if="step === 7"
                    :character="character"
                    @next="step++"
                    @back="step--"
                    @update="update($event)"
                ></character-ideals>
                <character-traits
                    v-if="step === 8"
                    :character="character"
                    @next="submit"
                    @back="step--"
                    @update="update($event)"
                ></character-traits>
            </transition>
        </div>
    </div>
</template>
<script>
    import CharacterDetails from './CharacterCreator/CharacterDetails';
    import CharacterStats from './CharacterCreator/CharacterStats';
    import CharacterSkills from './CharacterCreator/CharacterSkills';
    import CharacterProficiencies from './CharacterCreator/CharacterProficiencies';
    import CharacterEquipment from './CharacterCreator/CharacterEquipment';
    import CharacterInventory from './CharacterCreator/CharacterInventory';
    import CharacterIdeals from './CharacterCreator/CharacterIdeals';
    import CharacterTraits from './CharacterCreator/CharacterTraits';
    export default {
        components: {
            CharacterDetails,
            CharacterStats,
            CharacterSkills,
            CharacterProficiencies,
            CharacterEquipment,
            CharacterInventory,
            CharacterIdeals,
            CharacterTraits
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
            },
            submit(){
            }
        }
    }
</script>
