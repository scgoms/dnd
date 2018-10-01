<template>
    <div>
        <class-selector
            :active="step === 1"
            :character="character"
            @next="step++"
            @update="update($event)"
        ></class-selector>
    </div>
</template>
<script>
    import ClassSelector from './CharacterCreator/ClassSelector';
    export default {
        components: {
            ClassSelector,
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
