<template>
    <portal to="tray">
        <transition
            :enter-class="enterFrom + '-tray-enter'"
            :enter-active-class="enterFrom + '-tray-enter-active'"
            :leave-to-class="leaveTo + '-tray-leave-to'"
            :leave-active-class="leaveTo + '-tray-leave-active'"
        >
            <div class="tray flex flex-col" v-if="open">
                <portal-target name="tray-controls"></portal-target>
                <div class="tray-content">
                    <slot/>
                </div>
            </div>
        </transition>
    </portal>
</template>
<script>
    export default{
        props:{
            name: {},
            open: {default:false},
            enterFrom: {default: 'left'}
        },
        data(){
            return {
                leaveTo: this.enterFrom,
            }
        },
        computed:{
            opposite(){
                switch(this.enterFrom){
                    case 'left':
                        return 'right';
                    case 'right':
                        return 'left';
                    case 'top':
                        return 'bottom';
                    case 'bottom':
                        return 'top';
                }
            }
        },
        watch:{
            open:function(newVal, oldVal){
                if(newVal){
                    Event.$emit('tray-opened',{
                        name: this.name,
                        leaveTo: this.opposite
                    });
                }
            }
        },
        mounted(){
            Event.$on('tray-opened', (payload) => {
                if(payload.name != this.name){
                    if(this.open){
                        console.log(this.name + ' is open and has been told to close by ' + payload.name);
                        this.leaveTo = payload.leaveTo;
                        Vue.nextTick(() => {
                            this.$emit('closed');
                        })
                    }
                }else{
                    this.leaveTo = this.enterFrom;
                }
            });
        }
    }
</script>
