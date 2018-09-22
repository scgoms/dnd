<template>
    <div
        class="icon"
        :class="item.name.toLowerCase() + '-icon'"
        @click.prevent="$emit('class-clicked', item)"
    >
        {{ item.name }}
    </div>
</template>
<script>
    export default{
        props:{
            item: {}
        },
    }
</script>
