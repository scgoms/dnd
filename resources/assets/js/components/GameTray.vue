<template>
    <transition name="bottom-tray">
        <div class="game-tray text-grey-light" v-if="open">
            <slot></slot>
        </div>
    </transition>
</template>
<script>
    export default {
        props: [
            'open'
        ],
    }
</script>
