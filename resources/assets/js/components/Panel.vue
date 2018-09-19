<template>
    <div class="flex relative w-full">
        <div class="absolute flex flex-col h-full pin-l" style="z-index:1100">
            <img src="/storage/images/vert_bar_top.png">
            <div class="flex-1" style="background-image: url('/storage/images/vert_bar_body.png');"></div>
            <img src="/storage/images/vert_bar_bot.png">
        </div>
        <div class="flex flex-col w-full pl-8 -mx-4">
            <div class="navbar-border mt-2" style="z-index:1000"></div>
            <div class="px-4 -my-4 py-6" style="background-image: url('/storage/images/panel_background.png')">
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
</template>
<script>
    export default {

    }
</script>
