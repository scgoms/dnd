<template>
    <tray
        name="character-ideals"
        :open="open"
        @open="open = true"
        @closed="open = false"
    >
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
    </tray>
</template>
<script>
    export default {
        props: {
            active: {default:false},
            character:{required:true}
        },
        data(){
            return{
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
                handler: function(newVal, oldVal){
                    this.$emit('update', newVal);
                },
                deep: true
            }
        },
    }
</script>
