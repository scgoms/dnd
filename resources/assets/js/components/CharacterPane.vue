<template>
    <div class="absolute pin-t pin-l pin-b w-1/5 flex sidebar-left" :class="{'sidebar-left-open':show }" style="z-index:1000;">
        <div class="flex-1 flex flex-col -mr-2" style="background: rgb(0,0,0); background: rgba(0,0,0, 0.75)">
            <div class="text-grey-light flex flex-col">
                <h1 class="text-center">{{ character.name }}</h1>
                <div class="flex justify-center">
                    <stat-box>
                        <div class="flex flex-col">
                            <span class="text-2xl text-grey-light">{{ character.armor_class }}</span>
                            <label class="ml-1 form-label">Armor</label>
                        </div>
                    </stat-box>
                    <stat-box>
                        <div class="flex flex-col">
                            <span class="text-2xl text-grey-light">{{ character.initiative }}</span>
                            <label class="ml-1 form-label">Initiative</label>
                        </div>
                    </stat-box>
                    <stat-box>
                        <div class="flex flex-col">
                            <span class="text-2xl text-grey-light">{{ character.speed }}</span>
                            <label class="ml-1 form-label">Speed</label>
                        </div>
                    </stat-box>
                </div>
                <div class="flex relative w-full">
                    <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                        <img src="/storage/images/vert_bar_top.png">
                        <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                        <img src="/storage/images/vert_bar_bot.png">
                    </div>
                    <div class="flex flex-col w-full pl-8 -mx-4">
                        <div class="navbar-border mt-2" style="z-index:1000"></div>
                        <div class="px-4 -my-4 py-6 flex flex-col text-center" style="background-image: url('/storage/images/panel_background.png')">
                            <span class="text-4xl">
                                {{ character.current_hit_points + character.temporary_hit_points }} / {{ character.maximum_hit_points + character.temporary_hit_points }}
                            </span>
                            <label class="ml-1 form-label">Hit Points</label>
                        </div>
                        <div class="navbar-border mb-2" style="z-index:1000"></div>
                    </div>
                    <div class="absolute flex flex-col h-full pin-r" style="z-index:1100">
                        <img src="/storage/images/vert_bar_top.png">
                        <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                        <img src="/storage/images/vert_bar_bot.png">
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-center">
                <stat-box>
                    <div class="flex flex-col">
                        <span class="text-2xl text-grey-light">{{ character.stats.strength }}</span>
                        <label class="form-label text-xs">Strength</label>
                    </div>
                </stat-box>
                <stat-box>
                <div class="flex flex-col">
                    <span class="text-2xl text-grey-light">{{ character.stats.dexterity }}</span>
                    <label class="form-label text-xs">Dexterity</label>
                </div>
                </stat-box>
                <stat-box>
                    <div class="flex flex-col">
                        <span class="text-2xl text-grey-light">{{ character.stats.constitution }}</span>
                        <label class="form-label text-xs">Constitution</label>
                    </div>
                </stat-box>
                <stat-box>
                    <div class="flex flex-col">
                        <span class="text-2xl text-grey-light">{{ character.stats.intelligence }}</span>
                        <label class="form-label text-xs">Intelligence</label>
                    </div>
                </stat-box>
                <stat-box>
                    <div class="flex flex-col">
                        <span class="text-2xl text-grey-light">{{ character.stats.wisdom }}</span>
                        <label class="form-label text-xs">Wisdom</label>
                    </div>
                </stat-box>
                <stat-box>
                    <div class="flex flex-col">
                        <span class="text-2xl text-grey-light">{{ character.stats.charisma }}</span>
                        <label class="form-label text-xs">Charisma</label>
                    </div>
                </stat-box>
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
    import StatBox from './StatBox';
    export default{
        props: [
            'user'
        ],
        components: {
            StatBox
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
