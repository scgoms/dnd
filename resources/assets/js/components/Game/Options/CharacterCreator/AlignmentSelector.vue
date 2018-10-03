<template>
    <tray
        name="character-alignment-selector"
        :open="open"
        @open="open = true"
        @closed="open = false"
    >
        <div class="flex-1 flex flex-col -mx-2 pb-2">
            <flickity cell-align="center" classes="flex-1" :wrap-around="false" @change="update($event)">
                <div class="w-full h-full px-8 -mx-16 scaled-down" v-for="alignment in alignments">
                    <div class="card" :class="alignment.title.toLowerCase().replace(' ', '-')">{{ alignment.title }}</div>
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
            value:{default: ''}
        },
        watch:{
            active:{
                handler: function(newVal, oldVal){
                    if(newVal){
                        this.open = true;
                    }
                }
            },
        },
        methods:{
            update(payload){
                this.$emit('input', this.alignments[payload].title);
            }
        },
        data(){
            return {
                open: this.active,
                detailed: '',
                alignments: [
                    {
                        title: 'Lawful Good',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    {
                        title: 'Neutral Good',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    {
                        title: 'Chaotic Good',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    {
                        title: 'Lawful Neutral',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    {
                        title: 'True Neutral',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    {
                        title: 'Chaotic Neutral',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    {
                        title: 'Lawful Evil',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    {
                        title: 'Neutral Evil',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    {
                        title: 'Chaotic Evil',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                ],
            }
        },
    }
</script>
