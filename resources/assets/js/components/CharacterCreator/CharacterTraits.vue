<template>
    <div class="tray-container">
        <div class="flex flex-col">
            <textarea class="transparent-input lined h-64" v-model="character.features_and_traits"></textarea>
            <label class="form-label text-center">Other Features and Traits</label>
            <div class="flex py-2">
                <button class="btn btn-grey-lightest mr-1" @click.prevent="$emit('back')">Ideals</button>
                <button class="btn btn-red ml-1" @click.prevent="$emit('next')">Create</button>
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
