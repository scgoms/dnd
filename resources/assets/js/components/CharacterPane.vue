<template>
    <div class="absolute pin-t pin-l pin-b w-1/5 flex sidebar-left" :class="{'sidebar-left-open':show }" style="z-index:1000;">
        <div class="flex-1 flex flex-col -mr-2" style="background: rgb(0,0,0); background: rgba(0,0,0, 0.75)">
            <div class="text-grey-light flex flex-col">
                <div class="flex">
                    <div class="w-1/3">
                        <panel>
                            <div class="flex flex-col items-center">
                                <div class="pb-2 flex flex-col text-center">
                                    <span class="text-2xl">
                                        {{ character.stats.strength }}
                                    </span>
                                    <label class="form-label">
                                        Strength
                                    </label>
                                </div>
                                <div class="pb-2 flex flex-col text-center">
                                    <span class="text-2xl">
                                        {{ character.stats.dexterity }}
                                    </span>
                                    <label class="form-label">
                                        Dexterity
                                    </label>
                                </div>
                                <div class="pb-2 flex flex-col text-center">
                                    <span class="text-2xl">
                                        {{ character.stats.constitution }}
                                    </span>
                                    <label class="form-label">
                                        Constitution
                                    </label>
                                </div>
                                <div class="pb-2 flex flex-col text-center">
                                    <span class="text-2xl">
                                        {{ character.stats.intelligence }}
                                    </span>
                                    <label class="form-label">
                                        Intelligence
                                    </label>
                                </div>
                                <div class="pb-2 flex flex-col text-center">
                                    <span class="text-2xl">
                                        {{ character.stats.wisdom }}
                                    </span>
                                    <label class="form-label">
                                        Wisdom
                                    </label>
                                </div>
                                <div class="flex flex-col text-center">
                                    <span class="text-2xl">
                                        {{ character.stats.charisma }}
                                    </span>
                                    <label class="form-label">
                                        Charisma
                                    </label>
                                </div>
                            </div>
                        </panel>
                    </div>
                    <div class="w-3/4">
                        <panel>
                            <div class="flex flex-col">
                                <div class="flex justify-between">
                                    <div class="flex flex-col text-center">
                                        <span class="text-2xl">
                                            {{ character.armor_class }}
                                        </span>
                                        <label class="form-label">
                                            Armor
                                        </label>
                                    </div>
                                    <div class="flex flex-col text-center">
                                        <span class="text-2xl">
                                            {{ character.initiative }}
                                        </span>
                                        <label class="form-label">
                                            Initiative
                                        </label>
                                    </div>
                                    <div class="flex flex-col text-center">
                                        <span class="text-2xl">
                                            {{ character.speed }}
                                        </span>
                                        <label class="form-label">
                                            Speed
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </panel>
                        <panel>
                            <div class="flex flex-col text-center">
                                <span class="text-4xl">
                                    {{ character.current_hit_points + character.temporary_hit_points }} / {{ character.maximum_hit_points + character.temporary_hit_points }}
                                </span>
                                <label class="form-label">
                                    Hit Points
                                </label>
                            </div>
                        </panel>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col" @click.prevent="show = !show" style="z-index: 900">
            <img src="/storage/images/vert_bar_top.png">
            <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png')">
            </div>
            <img src="/storage/images/vert_bar_bot.png">
        </div>
    </div>
</template>
<script>
    import Panel from './Panel';
    export default{
        props: [
            'user'
        ],
        components: {
            Panel
        },
        data(){
            return {
                character: {
                    stats: {},
                    skills: {},
                    saving_throws: {}
                },
                show: false
            }
        },
        mounted(){
            Event.$on('show-character', (e) => {
                this.character = e;
                this.show = true;
            });
        }
    }
</script>
<style>
    .sidebar-left{
        margin-left: -19%;
        transition:all 700ms;
    }
    .sidebar-left-open{
        margin-left: 0;
    }
</style>
<!-- This will basically be two layouts. So maybe we move them in to seperate components. One for when YOU own the character. One for when someone else is just viewing it. -->
