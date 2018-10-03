<template>
    <tray
        name="character-stat-generation"
        :open="open"
        @open="open = true"
        @closed="open = false"
    >
        <transition name="fade">
            <div class="flex-1 flex flex-col" v-if="step===0">
                Roll the dice and you will be allocated 6 numbers to place as you please.
                <button class="btn btn-red" @click.prevent="roll">Roll!</button>
            </div>
            <div class="flex-1 flex flex-col" v-if="step===1">
                You've been assigned some stats, you can re-arrange the numbers now as you please. Just drag and drop.
            </div>
        </transition>
        <draggable :list="stats">
            <div class="stat-box">{{ stats[0] }}</div>
            <div class="stat-box">{{ stats[1] }}</div>
            <div class="stat-box">{{ stats[2] }}</div>
            <div class="stat-box">{{ stats[3] }}</div>
            <div class="stat-box">{{ stats[4] }}</div>
            <div class="stat-box">{{ stats[5] }}</div>
        </draggable>
        <div class="flex">
            <button class="btn btn-grey-lightest mr-1" @click.prevent="$emit('back')">Race</button>
            <button class="btn btn-blue ml-1" @click.prevent="$emit('next')">Background</button>
        </div>
    </tray>
</template>
<script>
    import Draggable from 'vuedraggable'
    export default {
        components:{
            Draggable
        },
        props: {
            active: {default:false},
            value:{default: []}
        },
        data(){
            return {
                open: this.active,
                stats: [],
                step: 0
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
        },
        methods:{
            roll(){
                axios.get('/stats/create')
                    .then(response => {
                        this.stats = response.data;
                        this.step = 1;
                    }).catch(error => {

                    });
            }
        },
        mounted(){
            this.stats = this.value;
            // When this opens, we should check the server to try and find out the characters preferred stats.
        }
    }
</script>
