<template>
    <tray
        name="character-race-selector"
        :open="open"
        @open="open = true"
        @closed="open = false"
    >
        <div class="flex-1 flex flex-col -mx-2 pb-2">
            <flickity cell-align="center" classes="flex-1" :wrap-around="false">
                <div class="w-full h-full px-8 -mx-16 scaled-down" v-for="race in races">
                    <div class="w-full h-full rounded" :class="race.title.toLowerCase().replace(' ', '-')">{{ race.title }}</div>
                </div>
            </flickity>
        </div>
        <div class="flex">
            <button class="btn btn-grey-lightest mr-1" @click.prevent="$emit('back')">Back</button>
            <button class="btn btn-blue ml-1" @click.prevent="$emit('next')">Class</button>
        </div>
    </tray>
</template>
<script>
    export default {
        props: {
            active: {default:false},
            character:{required:true}
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
            active:{
                handler: function(newVal, oldVal){
                    if(newVal){
                        this.open = true;
                    }
                }
            },
            character:{
                handler: function(newVal, oldVal){
                    this.$emit('update', newVal);
                },
                deep: true
            },
        },
        data(){
            return {
                open: this.active,
                detailed: '',
                races: {
                    dwarf:{
                        title: 'Dwarf',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    elf:{
                        title: 'Elf',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    halfling:{
                        title: 'Halfling',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    human:{
                        title: 'Human',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    dragonborn:{
                        title: 'Dragonborn',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    gnome:{
                        title: 'Gnome',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    halfelf:{
                        title: 'Half-Elf',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    halforc:{
                        title: 'Half-Orc',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    tiefling:{
                        title: 'Tiefling',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                },
            }
        },
    }
</script>
