<template>
    <div class="w-auto">
        <button class="btn btn-blue" @click.prevent="show">New</button>
        <dnd-modal
            name="character-creator"
            height="auto"
            :pivotY="1"
            width="60%"
        >
            <div class="text-grey py-4 px-2 w-full">
                <!-- Main container -->
                <div class="flex flex-col w-full">
                    <!-- Top Container -->
                    <div class="flex relative w-full flex-1">
                        <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                            <img src="/storage/images/vert_bar_top.png">
                            <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                            <img src="/storage/images/vert_bar_bot.png">
                        </div>
                        <div class="flex flex-col w-full pl-8 -mx-4">
                            <div class="navbar-border mt-2" style="z-index:1000"></div>
                            <div class="px-4 -my-4 py-6 flex flex-col flex-1" style="background-image: url('/storage/images/panel_background.png')">
                                <div class="flex items-center">
                                    <div class="form-group pr-4 w-1/4">
                                        <input type="text" class=" transparent-input form-control" v-model="character.name">
                                        <label class="form-label">Character Name</label>
                                    </div>
                                    <!-- Top right container -->
                                    <div class="flex">
                                        <div class="flex flex-col pr-4">
                                            <div class="flex">
                                                <div class="form-group pr-4">
                                                    <input type="text" class="transparent-input form-control" v-model="character.class">
                                                    <label class="form-label">Class</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="transparent-input form-control" v-model="character.level">
                                                    <label class="form-label">Level</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="transparent-input form-control" v-model="character.race">
                                                <label class="form-label">Race</label>
                                            </div>
                                        </div>
                                        <div class="flex flex-col pr-4">
                                            <div class="form-group">
                                                <input type="text" class="transparent-input form-control" v-model="character.background">
                                                <label class="form-label">Background</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="transparent-input form-control" v-model="character.alignment">
                                                <label class="form-label">Alignment</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group w-1/4">
                                        <input type="text" class="transparent-input form-control" v-model="character.experience_points">
                                        <label class="form-label">Experience Points</label>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-border mb-2" style="z-index:1000"></div>
                        </div>
                        <div class="absolute flex flex-col h-full pin-r" style="z-index:1100">
                            <img src="/storage/images/vert_bar_top.png">
                            <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                            <img src="/storage/images/vert_bar_bot.png">
                        </div>
                    </div>
                    <!-- Body Container -->
                    <div class="flex flex-col md:flex-row w-full">
                        <!-- First column -->
                        <div class="flex flex-col pr-2">
                            <div class="flex">
                                <!-- Stats container -->
                                <div class="flex flex-col justify-center pr-4">
                                    <stat-box>
                                        <label class="character-label">Strength</label>
                                        <input type="text" class="stat-box" v-model="character.stats.strength">
                                    </stat-box>
                                    <stat-box>
                                        <label class="character-label">Dexterity</label>
                                        <input type="text" class="stat-box" v-model="character.stats.dexterity">
                                    </stat-box>
                                    <stat-box>
                                        <label class="character-label">Constitution</label>
                                        <input type="text" class="stat-box" v-model="character.stats.constitution">
                                    </stat-box>
                                    <stat-box>
                                        <label class="character-label">Intelligence</label>
                                        <input type="text" class="stat-box" v-model="character.stats.intelligence">
                                    </stat-box>
                                    <stat-box>
                                        <label class="character-label">Wisdom</label>
                                        <input type="text" class="stat-box" v-model="character.stats.wisdom">
                                    </stat-box>
                                    <stat-box>
                                        <label class="form-label">Charisma</label>
                                        <input type="text" class="stat-box" v-model="character.stats.charisma">
                                    </stat-box>
                                </div>
                                <!-- Second column -->
                                <div class="flex flex-col">
                                    <div class="form-group flex-row items-center">
                                        <input type="text" class="form-control w-12 h-12" v-model="character.inspiration">
                                        <label class="form-label">Inspiration</label>
                                    </div>
                                    <div class="form-group flex-row items-center">
                                        <input type="text" class="form-control rounded-full w-12 h-12" v-model="character.proficiency_bonus">
                                        <label class="form-label">Proficiency Bonus</label>
                                    </div>

                                    <h1 class="form-header">Saving Throws</h1>

                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.saving_throws.strength_saving_throw">
                                        <label class="form-label">Strength</label>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.saving_throws.dexterity_saving_throw">
                                        <label class="form-label">Dexterity</label>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.saving_throws.constitution_saving_throw">
                                        <label class="form-label">Constitution</label>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.saving_throws.intelligence_saving_throw">
                                        <label class="form-label">Intelligence</label>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.saving_throws.wisdom_saving_throw">
                                        <label class="form-label">Wisdom</label>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.saving_throws.charisma_saving_throw">
                                        <label class="form-label">Charisma</label>
                                    </div>

                                    <h1 class="form-header">Skills</h1>

                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.acrobatics">
                                        <label class="form-label">Acrobatics</label>
                                        <span class="stat-sub-label">(Dex)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.animal_handling">
                                        <label class="form-label">Animal Handling</label>
                                        <span class="stat-sub-label">(Wis)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.arcana">
                                        <label class="form-label">Arcana</label>
                                        <span class="stat-sub-label">(Int)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.athletics">
                                        <label class="form-label">Athletics</label>
                                        <span class="stat-sub-label">(Str)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.deception">
                                        <label class="form-label">Deception</label>
                                        <span class="stat-sub-label">(Cha)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.history">
                                        <label class="form-label">History</label>
                                        <span class="stat-sub-label">(Int)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.insight">
                                        <label class="form-label">Insight</label>
                                        <span class="stat-sub-label">(Wis)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.intimidation">
                                        <label class="form-label">Intimidation</label>
                                        <span class="stat-sub-label">(Cha)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.investigation">
                                        <label class="form-label">Investigation</label>
                                        <span class="stat-sub-label">(Int)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.medicine">
                                        <label class="form-label">Medicine</label>
                                        <span class="stat-sub-label">(Wis)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.nature">
                                        <label class="form-label">Nature</label>
                                        <span class="stat-sub-label">(Int)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.perception">
                                        <label class="form-label">Perception</label>
                                        <span class="stat-sub-label">(Wis)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.performance">
                                        <label class="form-label">Performance</label>
                                        <span class="stat-sub-label">(Cha)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.persuasion">
                                        <label class="form-label">Persuasion</label>
                                        <span class="stat-sub-label">(Cha)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.religion">
                                        <label class="form-label">Religion</label>
                                        <span class="stat-sub-label">(Int)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.sleight_of_hand">
                                        <label class="form-label">Sleight of Hand</label>
                                        <span class="stat-sub-label">(Dex)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.stealth">
                                        <label class="form-label">Stealth</label>
                                        <span class="stat-sub-label">(Dex)</span>
                                    </div>
                                    <div class="form-group flex-row items-center py-1">
                                        <div class="stat-round-checkbox pr-3">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                        <input type="text" class="form-control transparent-input small-input" v-model="character.skills.survival">
                                        <label class="form-label">Survival</label>
                                        <span class="stat-sub-label">(Wis)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col flex-1">
                                <div class="form-group">
                                    <label class="form-label">Passive Wisdom (Perception)</label>
                                    <input type="text" class="form-control" v-model="character.perception">
                                </div>
                                <div class="flex relative w-full flex-1">
                                    <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                                        <img src="/storage/images/vert_bar_top.png">
                                        <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                        <img src="/storage/images/vert_bar_bot.png">
                                    </div>
                                    <div class="flex flex-col w-full pl-8 -mx-4">
                                        <div class="navbar-border mt-2" style="z-index:1000"></div>
                                        <div class="px-4 -my-4 py-6 flex flex-col flex-1" style="background-image: url('/storage/images/panel_background.png')">
                                            <textarea class="transparent-input lined h-24 flex-1" v-model="character.proficiencies"></textarea>
                                            <label class="form-label text-center">Other Proficiencies & Languages</label>
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
                        </div>
                        <!-- Second column -->
                        <div class="flex flex-col pl-2">
                            <!-- Top row -->
                            <div class="flex">
                                <stat-box>
                                    <input type="text" class="stat-box" v-model="character.armor_class">
                                    <label class="character-label">Armor Class</label>
                                </stat-box>
                                <stat-box>
                                    <input type="text" class="stat-box" v-model="character.initiative">
                                    <label class="character-label">Initiative</label>
                                </stat-box>
                                <stat-box>
                                    <input type="text" class="stat-box" v-model="character.speed">
                                    <label class="character-label">Speed</label>
                                </stat-box>
                            </div>
                            <!-- Second Row -->
                            <div class="flex flex-col">
                                <div class="flex relative">
                                    <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                                        <img src="/storage/images/vert_bar_top.png">
                                        <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                        <img src="/storage/images/vert_bar_bot.png">
                                    </div>
                                    <div class="flex flex-col w-full pl-8 -mx-4">
                                        <div class="navbar-border mt-2" style="z-index:1000"></div>
                                        <div class="px-4 -my-4 py-6" style="background-image: url('/storage/images/panel_background.png')">
                                            <div class="flex">
                                                <label class="form-label pr-2">Maximum Hit Points</label>
                                                <input type="text" class="transparent-input flex-1 text-grey-dark" style="border-bottom: solid 1px #b8c2cc;" v-model="character.maximum_hit_points">
                                            </div>
                                            <div class="flex flex-col w-full">
                                                <input type="text" class="transparent-input text-center h-16 text-3xl text-grey-lighter" v-model="character.current_hit_points">
                                                <label class="form-label text-center">Current Hit Points</label>
                                            </div>
                                            <div class="flex flex-col">
                                                <input type="text" class="transparent-input text-center h-12 text-xl text-grey-dark" v-model="character.temporary_hit_points">
                                                <label class="form-label text-center">Temporary Hit Points</label>
                                            </div>
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
                            <!-- Fourth Row -->
                            <div class="flex">
                                <div class="flex relative w-1/2">
                                    <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                                        <img src="/storage/images/vert_bar_top.png">
                                        <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                        <img src="/storage/images/vert_bar_bot.png">
                                    </div>
                                    <div class="flex flex-col w-full pl-8 -mx-4">
                                        <div class="navbar-border mt-2" style="z-index:1000"></div>
                                        <div class="px-4 -my-4 py-6" style="background-image: url('/storage/images/panel_background.png')">
                                            <div class="form-group items-center">
                                                <input type="text" class="stat-box" v-model="character.hit_dice">
                                                <label class="form-label whitespace-no-wrap">Hit Dice</label>
                                            </div>
                                        </div>
                                        <div class="navbar-border mb-2" style="z-index:1000"></div>
                                    </div>
                                    <div class="absolute flex flex-col h-full pin-r" style="z-index:1100">
                                        <img src="/storage/images/vert_bar_top.png">
                                        <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                        <img src="/storage/images/vert_bar_bot.png">
                                    </div>
                                </div>
                                <div class="flex relative w-1/2">
                                    <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                                        <img src="/storage/images/vert_bar_top.png">
                                        <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                        <img src="/storage/images/vert_bar_bot.png">
                                    </div>
                                    <div class="flex flex-col w-full pl-8 -mx-4">
                                        <div class="navbar-border mt-2" style="z-index:1000"></div>
                                        <div class="px-4 -my-4 py-6" style="background-image: url('/storage/images/panel_background.png')">
                                            <div class="flex flex-col">
                                                <label class="form-label">Death Saves</label>
                                                <div class="form-group">
                                                    <label class="form-label">Successes
                                                      <input type="radio" name="success" value="1" v-model="character.death_saving_throw_success">
                                                      <input type="radio" name="success" value="2" v-model="character.death_saving_throw_success" >
                                                      <input type="radio" name="success" value="3" v-model="character.death_saving_throw_success">
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Failures
                                                      <input type="radio" name="fail" value="1" v-model="character.death_saving_throw_failure">
                                                      <input type="radio" name="fail" value="2" v-model="character.death_saving_throw_failure">
                                                      <input type="radio" name="fail" value="3" v-model="character.death_saving_throw_failure">
                                                    </label>
                                                </div>
                                            </div>
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
                            <div class="flex relative w-full">
                                <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                                    <img src="/storage/images/vert_bar_top.png">
                                    <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                    <img src="/storage/images/vert_bar_bot.png">
                                </div>
                                <div class="flex flex-col w-full pl-8 -mx-4">
                                    <div class="navbar-border mt-2" style="z-index:1000"></div>
                                    <div class="px-4 -my-4 py-6" style="background-image: url('/storage/images/panel_background.png')">
                                        <div class="flex flex-col">
                                            <div class="flex w-full justify-center">
                                                <label class="form-label text-center w-36 mr-1">Name</label>
                                                <label class="form-label text-center w-18 -ml-1 mr-1 whitespace-no-wrap">ATK Bonus</label>
                                                <label class="form-label text-center w-36 ml-1">Damage/Type</label>
                                            </div>
                                            <div class="flex justify-center py-1">
                                                <input type="text" class="form-control w-36 mr-1" v-model="character.weapon_1_name">
                                                <input type="text" class="form-control w-18 ml-1 mr-1" v-model="character.weapon_1_attack_bonus">
                                                <input type="text" class="form-control w-36 ml-1" v-model="character.weapon_1_damage_type">
                                            </div>
                                            <div class="flex justify-center py-1">
                                                <input type="text" class="form-control w-36 mr-1" v-model="character.weapon_2_name">
                                                <input type="text" class="form-control w-18 ml-1 mr-1" v-model="character.weapon_2_attack_bonus">
                                                <input type="text" class="form-control w-36 ml-1" v-model="character.weapon_2_damage_type">
                                            </div>
                                            <div class="flex justify-center py-1">
                                                <input type="text" class="form-control w-36 mr-1" v-model="character.weapon_3_name">
                                                <input type="text" class="form-control w-18 ml-1 mr-1" v-model="character.weapon_3_attack_bonus">
                                                <input type="text" class="form-control w-36 ml-1" v-model="character.weapon_3_damage_type">
                                            </div>
                                            <textarea class="transparent-input h-32 lined" v-model="character.attacks_and_spellcasting"></textarea>
                                            <label class="form-label text-center">Attacks and Spellcasting</label>
                                        </div>
                                    </div>
                                    <div class="navbar-border mb-2" style="z-index:1000"></div>
                                </div>
                                <div class="absolute flex flex-col h-full pin-r" style="z-index:1100">
                                    <img src="/storage/images/vert_bar_top.png">
                                    <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                    <img src="/storage/images/vert_bar_bot.png">
                                </div>
                            </div>
                            <div class="flex relative w-full">
                                <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                                    <img src="/storage/images/vert_bar_top.png">
                                    <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                    <img src="/storage/images/vert_bar_bot.png">
                                </div>
                                <div class="flex flex-col w-full pl-8 -mx-4">
                                    <div class="navbar-border mt-2" style="z-index:1000"></div>
                                    <div class="px-4 -my-4 py-6" style="background-image: url('/storage/images/panel_background.png')">
                                        <div class="flex flex-col">
                                            <div class="flex">
                                                <div class="flex flex-col">
                                                    <div class="flex relative w-30">
                                                        <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                                                            <img src="/storage/images/vert_bar_top.png">
                                                            <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                                            <img src="/storage/images/vert_bar_bot.png">
                                                        </div>
                                                        <div class="flex flex-col w-full pl-8 -mx-4">
                                                            <div class="navbar-border mt-2" style="z-index:1000"></div>
                                                            <div class="px-2 -my-4 py-6 text-center" style="background-image: url('/storage/images/panel_background.png')">
                                                                <input type="text" class="currency-box" v-model="character.electrum">
                                                                <label class="character-label">Electrum</label>
                                                            </div>
                                                            <div class="navbar-border mb-2" style="z-index:1000"></div>
                                                        </div>
                                                        <div class="absolute flex flex-col h-full pin-r" style="z-index:1100">
                                                            <img src="/storage/images/vert_bar_top.png">
                                                            <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                                            <img src="/storage/images/vert_bar_bot.png">
                                                        </div>
                                                    </div>
                                                    <div class="flex relative w-30">
                                                        <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                                                            <img src="/storage/images/vert_bar_top.png">
                                                            <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                                            <img src="/storage/images/vert_bar_bot.png">
                                                        </div>
                                                        <div class="flex flex-col w-full pl-8 -mx-4">
                                                            <div class="navbar-border mt-2" style="z-index:1000"></div>
                                                            <div class="px-2 -my-4 py-6 text-center" style="background-image: url('/storage/images/panel_background.png')">
                                                                <input type="text" class="currency-box" v-model="character.platinum">
                                                                <label class="character-label">Platinum</label>
                                                            </div>
                                                            <div class="navbar-border mb-2" style="z-index:1000"></div>
                                                        </div>
                                                        <div class="absolute flex flex-col h-full pin-r" style="z-index:1100">
                                                            <img src="/storage/images/vert_bar_top.png">
                                                            <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                                            <img src="/storage/images/vert_bar_bot.png">
                                                        </div>
                                                    </div>
                                                    <div class="flex relative w-30">
                                                        <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                                                            <img src="/storage/images/vert_bar_top.png">
                                                            <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                                            <img src="/storage/images/vert_bar_bot.png">
                                                        </div>
                                                        <div class="flex flex-col w-full pl-8 -mx-4">
                                                            <div class="navbar-border mt-2" style="z-index:1000"></div>
                                                            <div class="px-2 -my-4 py-6 text-center" style="background-image: url('/storage/images/panel_background.png')">
                                                                <input type="text" class="currency-box" v-model="character.gold">
                                                                <label class="character-label">Gold</label>
                                                            </div>
                                                            <div class="navbar-border mb-2" style="z-index:1000"></div>
                                                        </div>
                                                        <div class="absolute flex flex-col h-full pin-r" style="z-index:1100">
                                                            <img src="/storage/images/vert_bar_top.png">
                                                            <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                                            <img src="/storage/images/vert_bar_bot.png">
                                                        </div>
                                                    </div>
                                                    <div class="flex relative w-30">
                                                        <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                                                            <img src="/storage/images/vert_bar_top.png">
                                                            <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                                            <img src="/storage/images/vert_bar_bot.png">
                                                        </div>
                                                        <div class="flex flex-col w-full pl-8 -mx-4">
                                                            <div class="navbar-border mt-2" style="z-index:1000"></div>
                                                            <div class="px-2 -my-4 py-6 text-center" style="background-image: url('/storage/images/panel_background.png')">
                                                                <input type="text" class="currency-box" v-model="character.silver">
                                                                <label class="character-label">Silver</label>
                                                            </div>
                                                            <div class="navbar-border mb-2" style="z-index:1000"></div>
                                                        </div>
                                                        <div class="absolute flex flex-col h-full pin-r" style="z-index:1100">
                                                            <img src="/storage/images/vert_bar_top.png">
                                                            <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                                            <img src="/storage/images/vert_bar_bot.png">
                                                        </div>
                                                    </div>
                                                    <div class="flex relative w-30">
                                                        <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                                                            <img src="/storage/images/vert_bar_top.png">
                                                            <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                                            <img src="/storage/images/vert_bar_bot.png">
                                                        </div>
                                                        <div class="flex flex-col w-full pl-8 -mx-4">
                                                            <div class="navbar-border mt-2" style="z-index:1000"></div>
                                                            <div class="px-2 -my-4 py-6 text-center" style="background-image: url('/storage/images/panel_background.png')">
                                                                <input type="text" class="currency-box" v-model="character.bronze">
                                                                <label class="character-label">Bronze</label>
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
                                                <textarea class="form-control transparent-input lined flex-1" v-model="character.equipment"></textarea>
                                            </div>
                                            <label class="form-label w-full text-center">Equipment</label>
                                        </div>
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
                        <!-- Third Column -->
                        <div class="flex flex-col flex-1">
                            <div class="flex relative w-full">
                                <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                                    <img src="/storage/images/vert_bar_top.png">
                                    <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                    <img src="/storage/images/vert_bar_bot.png">
                                </div>
                                <div class="flex flex-col w-full pl-8 -mx-4">
                                    <div class="navbar-border mt-2" style="z-index:1000"></div>
                                    <div class="px-4 -my-4 py-6 flex flex-col" style="background-image: url('/storage/images/panel_background.png')">
                                        <textarea class="transparent-input lined h-24" v-model="character.personality_traits"></textarea>
                                        <label class="form-label text-center">Personality Traits</label>
                                        <textarea class="transparent-input lined h-24" v-model="character.ideals"></textarea>
                                        <label class="form-label text-center">Ideals</label>
                                        <textarea class="transparent-input lined h-24" v-model="character.bonds"></textarea>
                                        <label class="form-label text-center">Bonds</label>
                                        <textarea class="transparent-input lined h-24" v-model="character.flaws"></textarea>
                                        <label class="form-label text-center">Flaws</label>
                                    </div>
                                    <div class="navbar-border mb-2" style="z-index:1000"></div>
                                </div>
                                <div class="absolute flex flex-col h-full pin-r" style="z-index:1100">
                                    <img src="/storage/images/vert_bar_top.png">
                                    <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                    <img src="/storage/images/vert_bar_bot.png">
                                </div>
                            </div>
                            <div class="flex relative flex-1 w-full">
                                <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                                    <img src="/storage/images/vert_bar_top.png">
                                    <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                                    <img src="/storage/images/vert_bar_bot.png">
                                </div>
                                <div class="flex flex-col w-full pl-8 -mx-4">
                                    <div class="navbar-border mt-2" style="z-index:1000"></div>
                                    <div class="px-4 -my-4 py-6 flex flex-col flex-1" style="background-image: url('/storage/images/panel_background.png')">
                                        <textarea class="transparent-input flex-1 lined h-24" v-model="character.features_and_traits"></textarea>
                                        <label class="form-label text-center">Features and Traits</label>
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
                    </div>
                    <button class="btn btn-red" @click.prevent="submit">Submit</button>
                </div>
            </div>
        </dnd-modal>
    </div>
</template>
<script>
    import StatBox from './StatBox';
    export default {
        components: {
            StatBox
        },
        data(){
            return {
                character: {
                    skills: {},
                    saving_throws:{},
                    stats: {}
                }
            }
        },
        methods:{
            show(){
                this.$modal.show('character-creator')
            },
            submit(){
                axios.post('/profile/characters', this.character)
                    .then(response => {
                        this.$emit('characterCreated', response.data);
                    }).catch(error => {
                        alert('Failed');
                    })
            }
        },
    }
</script>
