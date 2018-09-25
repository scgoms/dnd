<template>
    <div class="tray-container">
        <div class="flex flex-col">
            <div class="flex py-2">
                <div class="flex-col w-1/3 pr-1 text-center">
                    <input type="text" class="transparent-input w-full text-2xl text-center" v-model="character.armor_class">
                    <label class="character-label">Armor Class</label>
                </div>
                <div class="flex-col w-1/3 pl-1 pr-1 text-center">
                    <input type="text" class="transparent-input w-full text-2xl text-center" v-model="character.initiative">
                    <label class="character-label">Initiative</label>
                </div>
                <div class="flex-col w-1/3 pl-1 text-center">
                    <input type="text" class="transparent-input w-full text-2xl text-center" v-model="character.speed">
                    <label class="character-label">Speed</label>
                </div>
            </div>
            <div class="flex flex-col py-1">
                <div class="flex">
                    <div class="w-1/3 text-center character-label">Weapon Name</div>
                    <div class="w-1/3 text-center character-label">Atk Bonus</div>
                    <div class="w-1/3 text-center character-label">Damage/Type</div>
                </div>
                <div class="flex">
                    <input type="text" class="w-1/3 transparent-input w-full mr-1" v-model="character.speed">
                    <input type="text" class="w-1/3 transparent-input w-full mr-1 ml-1" v-model="character.speed">
                    <input type="text" class="w-1/3 transparent-input w-full ml-1" v-model="character.speed">
                </div>
                <div class="flex">
                    <input type="text" class="w-1/3 transparent-input w-full mr-1" v-model="character.speed">
                    <input type="text" class="w-1/3 transparent-input w-full mr-1 ml-1" v-model="character.speed">
                    <input type="text" class="w-1/3 transparent-input w-full ml-1" v-model="character.speed">
                </div>
                <div class="flex">
                    <input type="text" class="w-1/3 transparent-input w-full mr-1" v-model="character.speed">
                    <input type="text" class="w-1/3 transparent-input w-full mr-1 ml-1" v-model="character.speed">
                    <input type="text" class="w-1/3 transparent-input w-full ml-1" v-model="character.speed">
                </div>
            </div>
            <div class="flex flex-col py-1">
                <textarea class="lined transparent-input h-24"></textarea>
                <label class="form-label text-center">Equipment</label>
            </div>
            <div class="flex">
                <button class="btn btn-grey-lightest mr-1" @click.prevent="$emit('back')">Proficiencies</button>
                <button class="btn btn-blue ml-1" @click.prevent="$emit('next')">Inventory</button>
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
