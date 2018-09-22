<template>
    <div class="tray-container">
        <div class="flex flex-col">
            <div class="flex py-2">
                <button class="btn btn-grey-lightest mr-1" @click.prevent="$emit('back')">Ideals</button>
                <button class="btn btn-red ml-1" @click.prevent="$emit('next')">Create</button>
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
