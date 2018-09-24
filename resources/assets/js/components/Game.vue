<template>
    <div class="flex-1 flex">
        <game-map :channel="channel"/>
        <chat :channel="channel"></chat>
    </div>
</template>
<script>
    import GameMap from './Game/Map';
    export default {
        components:{
            GameMap
        },
        props:{
            channel: {required:true}
        },
    }
</script>
