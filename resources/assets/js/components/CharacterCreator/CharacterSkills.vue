<template>
    <tray
        name="character-skills"
        :open="open"
        @open="open = true"
        @closed="open = false"
    >
        <div class="flex flex-col overflow-scroll-y">
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.acrobatics">
                </div>
                <label class="form-label pl-6">Acrobatics</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.animal_handling">
                </div>
                <label class="form-label pl-6">Animal Handling</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.arcana">
                </div>
                <label class="form-label pl-6">Arcana</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.athletics">
                </div>
                <label class="form-label pl-6">Athletics</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.deception">
                </div>
                <label class="form-label pl-6">Deception</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.history">
                </div>
                <label class="form-label pl-6">History</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.insight">
                </div>
                <label class="form-label pl-6">Insight</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.intimidation">
                </div>
                <label class="form-label pl-6">Intimidation</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.investigation">
                </div>
                <label class="form-label pl-6">Investigation</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.medicine">
                </div>
                <label class="form-label pl-6">Medicine</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.nature">
                </div>
                <label class="form-label pl-6">Nature</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.perception">
                </div>
                <label class="form-label pl-6">Perception</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.performance">
                </div>
                <label class="form-label pl-6">Performance</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.persuasion">
                </div>
                <label class="form-label pl-6">Persuasion</label>
            </div>
           <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.religion">
                </div>
                <label class="form-label pl-6">Religion</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.slight_of_hand">
                </div>
                <label class="form-label pl-6">Slight of Hand</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.stealth">
                </div>
                <label class="form-label pl-6">Stealth</label>
            </div>
            <div class="form-group flex-col">
                <div class="flex">
                    <div class="stat-round-checkbox pr-3">
                        <input type="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </div>
                    <input type="text" class="transparent-input flex-1" v-model="character.skills.survival">
                </div>
                <label class="form-label pl-6">Survival</label>
            </div>
            <div class="flex">
                <button class="btn btn-grey-lightest mr-1" @click.prevent="$emit('back')">Stats</button>
                <button class="btn btn-blue ml-1" @click.prevent="$emit('next')">Proficiencies</button>
            </div>
        </div>
    </tray>
</template>
<script>
    export default {
        props: {
            active: {default:false},
            character:{required:true}
        },
        data(){
            return {
                open: this.active
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
                handler: function(oldVal, newVal){
                    this.$emit('update', newVal);
                },
                deep: true
            }
        },
    }
</script>
