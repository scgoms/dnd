<template>
    <div class="flex flex-col">
        <div class="flex flex-col">
            <div id="strength" class="swappable stat-box">15</div>
            <label class="form-label">Strength</label>
        </div>
        <div class="flex flex-col">
            <div id="dexterity" class="swappable stat-box">16</div>
            <label class="form-label">Dexterity</label>
        </div>
        <div class="flex flex-col">
            <div id="constitution" class="swappable stat-box">17</div>
            <label class="form-label">Constitution</label>
        </div>
        <div class="flex flex-col">
            <div id="intelligence" class="swappable stat-box">10</div>
            <label class="form-label">Intelligence</label>
        </div>
        <div class="flex flex-col">
            <div id="wisdom" class="swappable stat-box">9</div>
            <label class="form-label">Wisdom</label>
        </div>
        <div class="flex flex-col">
            <div id="charisma" class="swappable stat-box">8</div>
            <label class="form-label">Charisma</label>
        </div>
    </div>
</template>
<script>
    import {Swappable} from '@shopify/draggable';
    export default{
        data(){
            return{
                swappable: {}
            }
        },
        mounted(){
            this.swappable = new Swappable(this.$el,{
                draggable: '.swappable'
            });
        }
    }
</script>
