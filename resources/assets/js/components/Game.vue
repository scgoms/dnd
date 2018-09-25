<template>
    <div class="flex-1 flex">
        <game-map :channel="channel"/>
        <options></options>
        <chat :channel="channel"></chat>
        <character-creator></character-creator>
    </div>
</template>
<script>
    import GameMap from './Game/Map';
    import Options from './Game/Options';
    import CharacterCreator from './Game/Options/CharacterCreator';
    import Chat from './Game/Chat';
    export default {
        components:{
            GameMap,
            Options,
            CharacterCreator,
            Chat
        },
        props:{
            channel: {required:true}
        },
    }
</script>
