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
                @class-clicked="activeClass = value"
            ></class-icon>
        </carousel>
        <div v-if="hasActiveClass" class="w-full text-center collapsible">
            <h1 class="text-2xl">{{ activeClass.name }}</h1>
            <p>{{ activeClass.description }}</p>
        </div>
    </div>
</template>
<script>
    import ClassIcon from './ClassIcon';
    export default{
        components: {
            ClassIcon
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
        computed:{
            hasActiveClass(){
                return Object.keys(this.activeClass).length && this.activeClass.constructor === Object;
            }
        }
    }
</script>
