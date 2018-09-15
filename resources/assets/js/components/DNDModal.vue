<template>
    <modal
        :name="name"
        :height="dndHeight"
        :pivotY="dndPivotY"
        :width="dndWidth"
        style="z-index: 1200"
        classes=""
        :scrollable="true"
    >
        <div class="flex relative">
            <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
                <img src="/storage/images/vert_bar_top.png">
                <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                <img src="/storage/images/vert_bar_bot.png">
            </div>
            <div class="flex flex-col w-full pl-8 -mx-4">
                <div class="navbar-border mt-2" style="z-index:1000"></div>
                <div class="px-4 -my-4 py-4" style="background-image: url('/storage/images/modal_background.png')">
                    <slot></slot>
                </div>
                <div class="navbar-border mb-2" style="z-index:1000"></div>
            </div>
            <div class="absolute flex flex-col h-full pin-r" style="z-index:1100">
                <img src="/storage/images/vert_bar_top.png">
                <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
                <img src="/storage/images/vert_bar_bot.png">
            </div>
        </div>
    </modal>
</template>
<script>
    export default{
        props: [
            'name',
            'pivotY',
            'height',
            'width'
        ],
        data(){
            return {
                dndPivotY: 0.5,
                dndHeight: 'auto',
                dndWidth: "50%"
            }
        },
        created(){
            if(this.pivotY !== 'undefined'){
                this.dndPivotY = this.pivotY;
            }
            if(this.width !== 'undefined'){
                this.dndWidth = this.width;
            }
            if(this.height !== 'undefined'){
                this.dndHeight = this.height;
            }
        }
    }
</script>
