<template>
    <div class="flex-1 flex">
        <game-map :channel="channel"/>
        <options></options>
        <chat></chat>
    </div>
</template>
<script>
    import GameMap from './Game/Map';
    import Options from './Game/Options';

    export default {
        components:{
            GameMap,
            Options
        },
        props:{
            channel: {required:true}
        },
    }
</script>
