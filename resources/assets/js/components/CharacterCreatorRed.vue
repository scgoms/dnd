<template>
    <div>
        <div class="flex justify-between">
            <button @click.prevent="creating = false"><i class="left"></i></button>
            <h1>New Character</h1>
            <button @click.prevent="$emit('tray-closed')" class="burger-close">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>
        </div>
    </div>
</template>
<script>
    export default {

    }
</script>
