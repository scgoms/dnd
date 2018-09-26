<template>
    <tray
        name="character-inventory"
        :open="open"
        @open="open = true"
        @closed="open = false"
    >
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
