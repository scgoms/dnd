<template>
    <div>
        <button class="btn btn-blue" @click.prevent="show">New</button>
        <dnd-modal
            name="character-creator"
            height="auto"
            :pivotY="1"
            width="80%"
        >
            <div class="text-grey py-4 px-2 w-full">
                <!-- Main container -->
                <div class="flex flex-col w-full">
                    <!-- Top Container -->
                    <div class="flex items-center">
                        <div class="form-group pr-4">
                            <label class="form-label">Character Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <!-- Top right container -->
                        <div class="flex">
                            <div class="flex flex-col pr-4">
                                <div class="flex">
                                    <div class="form-group pr-4">
                                        <label class="form-label">Class</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Level</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Race</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="flex flex-col pr-4">
                                <div class="form-group">
                                    <label class="form-label">Background</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Alignment</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="form-group">
                                    <label class="form-label">Experience Points</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Body Container -->
                    <div class="flex w-full">
                        <!-- First column -->
                        <div class="flex flex-col bg-red w-1/3">
                            <div class="flex">
                                <!-- Stats container -->
                                <div class="flex flex-col bg-blue rounded bg-red">
                                    <stat-box>
                                        <label class="character-label">Strength</label>
                                        <input type="text" class="stat-box">
                                    </stat-box>
                                    <stat-box>
                                        <label class="character-label">Dexterity</label>
                                        <input type="text" class="stat-box">
                                    </stat-box>
                                    <stat-box>
                                        <label class="character-label">Constitution</label>
                                        <input type="text" class="stat-box">
                                    </stat-box>
                                    <stat-box>
                                        <label class="character-label">Intelligence</label>
                                        <input type="text" class="stat-box">
                                    </stat-box>
                                    <stat-box>
                                        <label class="character-label">Wisdom</label>
                                        <input type="text" class="stat-box">
                                    </stat-box>
                                    <stat-box>
                                        <label class="form-label">Charisma</label>
                                        <input type="text" class="stat-box">
                                    </stat-box>
                                </div>
                                <!-- Second column -->
                                <div class="flex flex-col">
                                    <div class="form-group"><label class="form-label">Inspiration</label><input type="text" class="form-control"></div>
                                    <div class="form-group"><label class="form-label">Proficiency Bonus</label><input type="text" class="form-control"></div>

                                    <h1 class="form-header">Saving Throws</h1>
                                    <div class="form-group"><label class="form-label">Strength</label><input type="text" class="form-control"></div>
                                    <div class="form-group"><label class="form-label">Dexterity</label><input type="text" class="form-control"></div>
                                    <div class="form-group"><label class="form-label">Constitution</label><input type="text" class="form-control"></div>
                                    <div class="form-group"><label class="form-label">Intelligence</label><input type="text" class="form-control"></div>
                                    <div class="form-group"><label class="form-label">Wisdom</label><input type="text" class="form-control"></div>
                                    <div class="form-group"><label class="form-label">Charisma</label><input type="text" class="form-control"></div>

                                    <h1 class="form-header">Skills</h1>
                                    <div class="form-group">
                                        <label class="form-label">Acrobatics</label>
                                        <span class="text-grey-lighter">(Dex)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Animal Handling</label>
                                        <span class="text-grey-lighter">(Wis)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Arcana</label>
                                        <span class="text-grey-lighter">(Int)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Athletics</label>
                                        <span class="text-grey-lighter">(Str)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Deception</label>
                                        <span class="text-grey-lighter">(Cha)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">History</label>
                                        <span class="text-grey-lighter">(Int)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Insight</label>
                                        <span class="text-grey-lighter">(Wis)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Intimidation</label>
                                        <span class="text-grey-lighter">(Cha)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Investigation</label>
                                        <span class="text-grey-lighter">(Int)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Medicine</label>
                                        <span class="text-grey-lighter">(Wis)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Nature</label>
                                        <span class="text-grey-lighter">(Int)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Perception</label>
                                        <span class="text-grey-lighter">(Wis)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Performance</label>
                                        <span class="text-grey-lighter">(Cha)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Persuasion</label>
                                        <span class="text-grey-lighter">(Cha)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Religion</label>
                                        <span class="text-grey-lighter">(Int)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Sleight of Hand</label>
                                        <span class="text-grey-lighter">(Dex)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Stealth</label>
                                        <span class="text-grey-lighter">(Dex)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Survival</label>
                                        <span class="text-grey-lighter">(Wis)</span>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="form-group">
                                    <label class="form-label">Passive Wisdom (Perception)</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Other Proficiencies</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Second column -->
                        <div class="flex flex-col bg-red-light w-1/3">
                            <!-- Top row -->
                            <div class="flex"></div>
                            <!-- Second Row -->
                            <div class="flex flex-col">
                                <div class="form-group"><label class="form-label">Maximum Hit Points</label><input type="text" class="form-control"></div>
                                <div class="form-group"><label class="form-label">Current Hit Points</label><input type="text" class="form-control"></div>
                            </div>
                            <!-- Third row -->
                            <div class="form-group"><label class="form-label">Temporary Hit Points</label><input type="text" class="form-control"></div>
                            <!-- Fourth Row -->
                            <div class="flex">
                                <div class="form-group"><label class="form-label">Hit Dice</label><input type="text" class="form-control"></div>
                                <div class="flex flex-col">
                                    <label class="form-label">Death Saves</label>
                                    <div class="form-group">
                                        <label class="form-label">Successes
                                          <input type="radio" name="success">
                                          <input type="radio" name="success">
                                          <input type="radio" name="success">
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Failures
                                          <input type="radio" name="fail">
                                          <input type="radio" name="fail">
                                          <input type="radio" name="fail">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control">
                                    <input type="text" class="form-control">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Atk Bonus</label>
                                    <input type="text" class="form-control">
                                    <input type="text" class="form-control">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Damage/Type</label>
                                    <input type="text" class="form-control">
                                    <input type="text" class="form-control">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex flex-col">
                                    <div class="form-group"><label class="form-label">Electrum</label><input type="text" class="form-control"></div>
                                    <div class="form-group"><label class="form-label">Platinum</label><input type="text" class="form-control"></div>
                                    <div class="form-group"><label class="form-label">Gold</label><input type="text" class="form-control"></div>
                                    <div class="form-group"><label class="form-label">Silver</label><input type="text" class="form-control"></div>
                                    <div class="form-group"><label class="form-label">Bronze</label><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="form-label">Equipment</label><textarea class="form-control"></textarea></div>
                            </div>
                        </div>
                        <!-- Third Column -->
                        <div class="flex flex-col bg-red-lighter w-1/3">
                            <div class="flex flex-col">
                                <div class="form-group"><label class="form-label">Personality Traits</label><textarea class="form-control"></textarea></div>
                                <div class="form-group"><label class="form-label">Ideals</label><textarea class="form-control"></textarea></div>
                                <div class="form-group"><label class="form-label">Bonds</label><textarea class="form-control"></textarea></div>
                                <div class="form-group"><label class="form-label">Flaws</label><textarea class="form-control"></textarea></div>
                            </div>
                            <input type="text" class="form-group"><label class="form-label">Features and Traits</label><textarea class="form-control"></textarea></input>
                        </div>
                    </div>
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
        methods:{
            show(){
                this.$modal.show('character-creator')
            }
        },
        mounted(){
            this.show();
        }
    }
</script>
