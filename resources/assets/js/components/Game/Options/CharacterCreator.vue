<template>
    <div>
        <character-details
            :active="step === 1"
            :character="character"
            @next="step++"
            @update="update($event)"
        ></character-details>
        <character-stats
            :active="step === 2"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></character-stats>
        <character-skills
            :active="step === 3"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></character-skills>
        <character-proficiencies
            :active="step === 4"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></character-proficiencies>
        <character-equipment
            :active="step === 5"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></character-equipment>
        <character-inventory
            :active="step === 6"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></character-inventory>
        <character-ideals
            :active="step === 7"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></character-ideals>

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
