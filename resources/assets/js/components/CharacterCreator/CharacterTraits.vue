<template>
    <tray
        name="character-traits"
        :open="open"
        @open="open = true"
        @closed="open = false"
            <textarea class="transparent-input lined h-64" v-model="character.features_and_traits"></textarea>
            <label class="form-label text-center">Other Features and Traits</label>
            <div class="flex py-2">
                <button class="btn btn-grey-lightest mr-1" @click.prevent="$emit('back')">Ideals</button>
                <button class="btn btn-red ml-1" @click.prevent="$emit('next')">Create</button>
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
                open: this.active,
            }
        },
        watch:{
            active:{
                handler:function(newVal, oldVal){
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
