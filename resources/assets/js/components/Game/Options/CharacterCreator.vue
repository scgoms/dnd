<template>
    <div>
        <race-selector
            :active="step === 1"
            v-model="character.race"
            @next="step++"
            @back="step--"
        ></race-selector>
        <class-selector
            :active="step === 2"
            v-model="character.class"
            @next="step++"
            @back="step--"
        ></class-selector>
        <background-selector
            :active="step === 3"
            v-model="character.background"
            @next="step++"
            @back="step--"
        ></background-selector>
        <alignment-selector
            :active="step === 4"
            v-model="character.alignment"
            @next="step++"
            @back="step--"
        ></alignment-selector>
        <stat-generator
            :active="step === 4"
            v-model="character.stats"
            @next="step++"
            @back="step--"
        ></stat-generator>
    </div>
</template>
<script>
    import RaceSelector from './CharacterCreator/RaceSelector';
    import ClassSelector from './CharacterCreator/ClassSelector';
    import BackgroundSelector from './CharacterCreator/BackgroundSelector';
    import AlignmentSelector from './CharacterCreator/AlignmentSelector';
    import StatGenerator from './CharacterCreator/Stats';
    export default {
        components: {
            RaceSelector,
            ClassSelector,
            BackgroundSelector,
            AlignmentSelector,
            StatGenerator
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
            openOptions(){
                this.step = 0;
                Event.$emit('open-options');
            }
        },
        mounted(){
            Event.$on('open-character-creator', () => {
                this.step = 1;
            });
        }
    }
</script>
