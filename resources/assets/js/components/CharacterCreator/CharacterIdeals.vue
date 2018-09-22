<template>
    <div class="tray-container">
        <div class="flex flex-col">
            <textarea class="transparent-input lined h-24" v-model="character.personality_traits"></textarea>
            <label class="form-label text-center">Personality Traits</label>
            <textarea class="transparent-input lined h-24" v-model="character.ideals"></textarea>
            <label class="form-label text-center">Ideals</label>
            <textarea class="transparent-input lined h-24" v-model="character.bonds"></textarea>
            <label class="form-label text-center">Bonds</label>
            <textarea class="transparent-input lined h-24" v-model="character.flaws"></textarea>
            <label class="form-label text-center">Flaws</label>
            <div class="flex py-2">
                <button class="btn btn-grey-lightest mr-1" @click.prevent="$emit('back')">Inventory</button>
                <button class="btn btn-blue ml-1" @click.prevent="$emit('next')">Features</button>
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
