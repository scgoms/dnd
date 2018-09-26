<template>
    <tray
        name="character-proficiencies"
        :open="open"
        @open="open = true"
        @closed="open = false"
    >
        <div class="flex flex-col">
            <textarea class="lined h-32 transparent-input"></textarea>
            <label class="form-label text-center py-2">Other Proficiences and Languages</label>
            <div class="flex">
                <button class="btn btn-grey-lightest mr-1" @click.prevent="$emit('back')">Skills</button>
                <button class="btn btn-blue ml-1" @click.prevent="$emit('next')">Equipment</button>
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
                handler: function(newVal, oldVal){
                    this.$emit('update', newVal);
                },
                deep: true
            }
        },
    }
</script>
