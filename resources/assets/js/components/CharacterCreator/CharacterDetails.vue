<template>
    <div class="tray-container">
        <div class="form-group">
            <input type="text" class="transparent-input" v-model="character.name">
            <label class="form-label">Character Name</label>
        </div>
        <div class="w-full">
            <class-carousel></class-carousel>
        </div>
        <div class="flex">
            <div class="flex flex-col w-1/3 pr-1">
                <div class="form-group">
                    <input type="text" class="transparent-input" v-model="character.class">
                    <label class="form-label">Class</label>
                </div>
                <div class="form-group">
                    <input type="text" class="transparent-input" v-model="character.race">
                    <label class="form-label">Race</label>
                </div>
            </div>
            <div class="flex flex-col w-1/3 pl-1 pr-1">
                <div class="form-group">
                    <input type="text" class="transparent-input" v-model="character.background">
                    <label class="form-label">Background</label>
                </div>
                <div class="form-group">
                    <input type="text" class="transparent-input" v-model="character.alignment">
                    <label class="form-label">Alignment</label>
                </div>
            </div>
            <div class="flex flex-col w-1/3 pl-1">
                <div class="form-group">
                    <input type="text" class="transparent-input" v-model="character.level">
                    <label class="form-label">Level</label>
                </div>
                <div class="form-group">
                    <input type="text" class="transparent-input" v-model="character.experience_points">
                    <label class="form-label">Experience</label>
                </div>
            </div>
        </div>
        <div class="flex">
            <button class="btn btn-grey-lightest mr-1" @click.prevent="$emit('back')">Back</button>
            <button class="btn btn-blue ml-1" @click.prevent="$emit('next')">Stats</button>
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
