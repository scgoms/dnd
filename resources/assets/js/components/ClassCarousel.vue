<template>
    <div class="w-full flex flex-col">
        <carousel
            :free-scroll="true"
            cell-align="center"
            :prev-next="false"
        >
            <class-icon
                v-for="(value, key) in classes"
                :item="value"
                :key="key"
                @class-clicked="setClass(value)"
            ></class-icon>
        </carousel>
        <transition-expand>
            <div v-if="detailed" class="w-full text-center collapsible">
                <transition name="fade" mode="out-in">
                    <div :key="activeClass.name">
                        <h1 class="text-2xl">{{ activeClass.name }}</h1>
                        <p>{{ activeClass.description }}</p>
                    </div>
                </transition>
            </div>
        </transition-expand>
    </div>
</template>
<script>
    import ClassIcon from './ClassIcon';
    import Carousel from './Carousel';
    export default{
        components: {
            ClassIcon
        },
        props:{
            detailed:{default:false},
        },
        data(){
            return {
                activeClass:{},
                classes: {
                    barbarian:{
                        name: 'Barbarian',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    bard:{
                        name: 'Bard',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    cleric:{
                        name: 'Cleric',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    druid:{
                        name: 'Druid',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    fighter:{
                        name: 'Fighter',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    monk:{
                        name: 'Monk',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    paladin:{
                        name: 'Paladin',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    ranger:{
                        name: 'Ranger',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    rogue:{
                        name: 'Rogue',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    sorcerer:{
                        name: 'Sorcerer',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    warlock:{
                        name: 'Warlock',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    },
                    wizard: {
                        name: 'Wizard',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae cum tempora quae, repudiandae facere nesciunt animi ratione eaque commodi, mollitia fugiat libero amet autem assumenda! Numquam quisquam animi natus.'
                    }
                }
            }
        },
        methods:{
            setClass(activeClass){
                this.activeClass = activeClass;
                this.$emit('input', activeClass.name);
            }
        },
    }
</script>
<style>

.fade-enter-active {
  transition: opacity .5s;
}
.fade-leave-active {
    transition: opacity .3s;
}
.fade-enter, .fade-leave-to{
    opacity: 0;
}
</style>
