<template>
    <div class="tray-container">
        <div class="flex flex-col">
            <div class="flex flex-col">

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
