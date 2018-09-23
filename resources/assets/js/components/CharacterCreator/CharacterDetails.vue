<template>
    <div class="tray-container">
        <div class="form-group">
            <input type="text" class="transparent-input" v-model="character.name">
            <label class="form-label">Character Name</label>
        </div>
        <div class="w-full relative py-2">
            <extended-carousel
                v-model="character.class"
                @input="detailed = 'class'"
                :items="classes"
                :detailed="detailed==='class'"
            ></extended-carousel>
        </div>
        <div class="w-full relative py-2">
            <extended-carousel
                v-model="character.race"
                @input="detailed = 'race'"
                :items="races"
                :detailed="detailed==='race'"
            ></extended-carousel>
        </div>
        <div class="flex">
            <div class="flex flex-col w-1/3 pr-1">
                <div class="form-group">
                    <input type="text" class="transparent-input" v-model="character.class">
                    <label class="form-label">Class</label>
                </div>
                <div class="form-group">
                    <input type="text" class="transparent-input" v-model="character.race">
                    <label class="form-label">Race</label>
                </div>
            </div>
            <div class="flex flex-col w-1/3 pl-1 pr-1">
                <div class="form-group">
                    <input type="text" class="transparent-input" v-model="character.background">
                    <label class="form-label">Background</label>
                </div>
                <div class="form-group">
                    <input type="text" class="transparent-input" v-model="character.alignment">
                    <label class="form-label">Alignment</label>
                </div>
            </div>
            <div class="flex flex-col w-1/3 pl-1">
                <div class="form-group">
                    <input type="text" class="transparent-input" v-model="character.level">
                    <label class="form-label">Level</label>
                </div>
                <div class="form-group">
                    <input type="text" class="transparent-input" v-model="character.experience_points">
                    <label class="form-label">Experience</label>
                </div>
            </div>
        </div>
        <div class="flex">
            <button class="btn btn-grey-lightest mr-1" @click.prevent="$emit('back')">Back</button>
            <button class="btn btn-blue ml-1" @click.prevent="$emit('next')">Stats</button>
        </div>
    </div>
</template>
<script>
    import ExtendedCarousel from '../Carousels/ExtendedCarousel';
    export default {
        props: [
            'character'
        ],
        components:{
            ExtendedCarousel
        },
        methods:{
        },
        data(){
            return {
                detailed: '',
                classes: {
                    barbarian:{
                        title: 'Barbarian',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    bard:{
                        title: 'Bard',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    cleric:{
                        title: 'Cleric',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    druid:{
                        title: 'Druid',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    fighter:{
                        title: 'Fighter',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    monk:{
                        title: 'Monk',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    paladin:{
                        title: 'Paladin',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    ranger:{
                        title: 'Ranger',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    rogue:{
                        title: 'Rogue',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    sorcerer:{
                        title: 'Sorcerer',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    warlock:{
                        title: 'Warlock',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    wizard: {
                        title: 'Wizard',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    }
                },
                races: {
                    human:{
                        title: 'Human',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    elf:{
                        title: 'Elf',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    dwarf:{
                        title: 'Dwarf',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    tiefling:{
                        title: 'Tiefling',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    dragonborn:{
                        title: 'Dragonborn',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    }
                }
            }
        },
        computed:{
            character_class(){
                return this.character.class;
            },
            character_race(){
                return this.character.race;
            }
        },
        watch:{
            character:{
                handler: function(oldVal, newVal){
                    this.$emit('update', newVal);
                },
                deep: true
            },
            character_class:{
                handler:function(oldVal, newVal){
                    this.detailed = 'class';
                }
            },
            character_race:{
                handler:function(oldVal, newVal){
                    this.detailed = 'race';
                }
            }
        },
    }
</script>
