<template>
    <tray
        name="character-alignment-selector"
        :open="open"
        @open="open = true"
        @closed="open = false"
    >
        <div class="flex-1 flex flex-col -mx-2 pb-2">
            <flickity cell-align="center" classes="flex-1" :wrap-around="false">
                <div class="w-full h-full px-8 -mx-16 scaled-down" v-for="alignment in alignments">
                    <div class="w-full h-full rounded" :class="alignment.title.toLowerCase().replace(' ', '-')">{{ alignment.title }}</div>
                </div>
            </flickity>
        </div>
        <div class="flex">
            <button class="btn btn-grey-lightest mr-1" @click.prevent="$emit('back')">Background</button>
            <button class="btn btn-blue ml-1" @click.prevent="$emit('next')">Stats</button>
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
            character_class:{
                handler:function(newVal, oldVal){
                    this.detailed = 'class';
                }
            },
            character_race:{
                handler:function(newVal, oldVal){
                    this.detailed = 'race';
                }
            }
        },
        data(){
            return {
                open: this.active,
                detailed: '',
                alignments: {
                    lawfulGood:{
                        title: 'Lawful Good',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    neutralGood:{
                        title: 'Neutral Good',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    chaoticGood:{
                        title: 'Chaotic Good',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    lawfulNeutral:{
                        title: 'Lawful Neutral',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    trueNeutral:{
                        title: 'True Neutral',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    chaoticNeutral:{
                        title: 'Chaotic Neutral',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    lawfulEvil:{
                        title: 'Lawful Evil',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    neutralEveil:{
                        title: 'Neutral Evil',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    chaoticEvil:{
                        title: 'Chaotic Evil',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                },
            }
        },
    }
</script>
