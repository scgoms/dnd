<template>
    <div class="tray-container">
        <div class="flex flex-col">
            <textarea class="lined h-32 transparent-input"></textarea>
            <label class="form-label text-center py-2">Other Proficiences and Languages</label>
            <div class="flex">
                <button class="btn btn-grey-lightest mr-1" @click.prevent="$emit('back')">Skills</button>
                <button class="btn btn-blue ml-1" @click.prevent="$emit('next')">Equipment</button>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            open: {default:false},
            character:{required:true}
        },
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
