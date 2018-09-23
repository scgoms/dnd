<template>
    <div class="w-full flex flex-col">
        <carousel
            :free-scroll="true"
            cell-align="center"
            :prev-next="false"
        >
            <icon
                v-for="(value, key) in items"
                :item="value"
                :key="key"
                @clicked="setItem(value)"
            ></icon>
        </carousel>
        <transition-expand>
            <div v-if="detailed" class="w-full text-center collapsible">
                <transition name="fade" mode="out-in">
                    <div :key="activeItem.title">
                        <h1 class="text-2xl">{{ activeItem.title }}</h1>
                        <p>{{ activeItem.description }}</p>
                    </div>
                </transition>
            </div>
        </transition-expand>
    </div>
</template>
<script>
    import Icon from './Icon';
    import Carousel from './Carousel';
    export default{
        components: {
            Icon
        },
        props:{
            detailed:{default:false},
            items: {type: Object, default: []}
        },
        data(){
            return {
                activeItem:{},
            }
        },
        methods:{
            setItem(item){
                this.activeItem = item;
                this.$emit('input', item.title);
            }
        },
    }
</script>
<style>

.fade-enter-active {
  transition: opacity .5s;
}
.fade-leave-active {
    transition: opacity .3s;
}
.fade-enter, .fade-leave-to{
    opacity: 0;
}
</style>
