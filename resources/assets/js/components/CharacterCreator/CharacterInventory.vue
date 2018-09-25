<template>
    <div class="tray-container">
        <div class="flex">
            <div class="flex flex-col w-1/4 pr-1">
                <div class="flex flex-col text-center">
                    <input type="text" class="transparent-input">
                    <label class="form-label">Electrum</label>
                </div>
                <div class="flex flex-col text-center">
                    <input type="text" class="transparent-input">
                    <label class="form-label">Platinum</label>
                </div>
                <div class="flex flex-col text-center">
                    <input type="text" class="transparent-input">
                    <label class="form-label">Gold</label>
                </div>
                <div class="flex flex-col text-center">
                    <input type="text" class="transparent-input">
                    <label class="form-label">Silver</label>
                </div>
                <div class="flex flex-col text-center">
                    <input type="text" class="transparent-input">
                    <label class="form-label">Bronze</label>
                </div>
            </div>
            <div class="flex flex-col w-3/4 pl-1">
                <textarea class="h-64 lined transparent-input"></textarea>
            </div>
        </div>
        <div class="flex py-2">
            <button class="btn btn-grey-lightest mr-1" @click.prevent="$emit('back')">Equipment</button>
            <button class="btn btn-blue ml-1" @click.prevent="$emit('next')">Ideals</button>
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
