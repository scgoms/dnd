<template>
    <div>
        <race-selector
            :active="step === 1"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></race-selector>
        <class-selector
            :active="step === 2"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></class-selector>
        <background-selector
            :active="step === 3"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></background-selector>
        <alignment-selector
            :active="step === 4"
            :character="character"
            @next="step++"
            @back="step--"
            @update="update($event)"
        ></alignment-selector>
    </div>
</template>
<script>
    import RaceSelector from './CharacterCreator/RaceSelector';
    import ClassSelector from './CharacterCreator/ClassSelector';
    import BackgroundSelector from './CharacterCreator/BackgroundSelector';
    import AlignmentSelector from './CharacterCreator/AlignmentSelector';
    export default {
        components: {
            RaceSelector,
            ClassSelector,
            BackgroundSelector,
            AlignmentSelector
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
