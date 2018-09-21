<template>
    <div class="tray-container">
        <div class="flex flex-col">
            <div class="flex">
                <div class="w-1/4">
                    <div class="flex flex-col">
                        <div class="form-group">
                            <input type="text" class="transparent-input stat-box" v-model="character.stats.strength">
                            <label class="form-label text-center">Str</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="transparent-input stat-box" v-model="character.stats.dexterity">
                            <label class="form-label text-center">Dex</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="transparent-input stat-box" v-model="character.stats.constitution">
                            <label class="form-label text-center">Con</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="transparent-input stat-box" v-model="character.stats.intelligence">
                            <label class="form-label text-center">Int</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="transparent-input stat-box" v-model="character.stats.wisdom">
                            <label class="form-label text-center">Wis</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="transparent-input stat-box" v-model="character.stats.charisma">
                            <label class="form-label text-center">Cha</label>
                        </div>
                    </div>
                </div>
                <div class="w-3/4 flex flex-col pl-2 pt-4">
                    <div class="form-group">
                        <input type="text" class="transparent-input" v-model="character.inspiration">
                        <label class="form-label">Inspiration</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="transparent-input" v-model="character.proficiency_bonus">
                        <label class="form-label">Proficiency Bonus</label>
                    </div>
                    <div class="form-group">
                        <div class="flex">
                            <div class="stat-round-checkbox pr-3">
                                <input type="checkbox" id="checkbox" />
                                <label for="checkbox"></label>
                            </div>
                            <input type="text" class="transparent-input flex-1" v-model="character.saving_throws.strength">
                        </div>
                        <label class="form-label pl-6">Strength</label>
                    </div>
                    <div class="form-group">
                        <div class="flex">
                            <div class="stat-round-checkbox pr-3">
                                <input type="checkbox" id="checkbox" />
                                <label for="checkbox"></label>
                            </div>
                            <input type="text" class="transparent-input flex-1" v-model="character.saving_throws.dexterity_saving_throw">
                        </div>
                        <label class="form-label pl-6">Dexterity</label>
                    </div>
                    <div class="form-group">
                        <div class="flex">
                            <div class="stat-round-checkbox pr-3">
                                <input type="checkbox" id="checkbox" />
                                <label for="checkbox"></label>
                            </div>
                            <input type="text" class="transparent-input flex-1" v-model="character.saving_throws.constitution_saving_throw">
                        </div>
                        <label class="form-label pl-6">Constitution</label>
                    </div>
                    <div class="form-group">
                        <div class="flex">
                            <div class="stat-round-checkbox pr-3">
                                <input type="checkbox" id="checkbox" />
                                <label for="checkbox"></label>
                            </div>
                            <input type="text" class="transparent-input flex-1" v-model="character.saving_throws.intelligence_saving_throw">
                        </div>
                        <label class="form-label pl-6">Intelligence</label>
                    </div>
                    <div class="form-group">
                        <div class="flex">
                            <div class="stat-round-checkbox pr-3">
                                <input type="checkbox" id="checkbox" />
                                <label for="checkbox"></label>
                            </div>
                            <input type="text" class="transparent-input flex-1" v-model="character.saving_throws.wisdom_saving_throw">
                        </div>
                        <label class="form-label pl-6">Wisdom</label>
                    </div>
                    <div class="form-group">
                        <div class="flex">
                            <div class="stat-round-checkbox pr-3">
                                <input type="checkbox" id="checkbox" />
                                <label for="checkbox"></label>
                            </div>
                            <input type="text" class="transparent-input flex-1" v-model="character.saving_throws.charisma_saving_throw">
                        </div>
                        <label class="form-label pl-6">Charisma</label>
                    </div>
                </div>
            </div>
            <div class="flex">
                <button class="btn btn-grey-lightest mr-1" @click.prevent="$emit('back')">Back</button>
                <button class="btn btn-blue ml-1" @click.prevent="$emit('next')">Next</button>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: [
            'character'
        ],
        watch:{
            character:{
                handler: function(oldVal, newVal){
                    this.$emit('update', newVal);
                },
                deep: true
            }
        },
    }
</script>
