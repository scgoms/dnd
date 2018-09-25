<template>
    <div>
        <character-details
            :open="step === 1"
            :character="character"
            @next="step++"
            @update="update($event)"
        ></character-details>
        <character-stats
            :open="step === 2"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></character-stats>
        <!-- <character-skills
            :open="step === 31"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></character-skills>
        <character-proficiencies
            :open="step === 41"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></character-proficiencies>
        <character-equipment
            :open="step === 51"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></character-equipment>
        <character-inventory
            :open="step === 61"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></character-inventory>
        <character-ideals
            :open="step === 71"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></character-ideals>
        <character-traits
            :open="step === 81"
            :character="character"
            @back="step--"
            @update="update($event)"
        ></character-traits> -->
    </div>
</template>
<script>
    import CharacterDetails from '../../CharacterCreator/CharacterDetails';
    import CharacterStats from '../../CharacterCreator/CharacterStats';
    import CharacterSkills from '../../CharacterCreator/CharacterSkills';
    import CharacterProficiencies from '../../CharacterCreator/CharacterProficiencies';
    import CharacterEquipment from '../../CharacterCreator/CharacterEquipment';
    import CharacterInventory from '../../CharacterCreator/CharacterInventory';
    import CharacterIdeals from '../../CharacterCreator/CharacterIdeals';
    import CharacterTraits from '../../CharacterCreator/CharacterTraits';
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
                step: 0,
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
        },
        mounted(){
            Event.$on('open-character-creator', () => {
                this.step = 1;
            });
        }
    }
</script>
