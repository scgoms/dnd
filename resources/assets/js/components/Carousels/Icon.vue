<template>
    <div
        class="icon"
        :class="item.title.toLowerCase().replace(' ', '-') + '-icon'"
        @click.prevent="$emit('clicked', item)"
    >
        {{ item.title }}
    </div>
</template>
<script>
    export default{
        props:{
            item: {}
        },
    }
</script>
