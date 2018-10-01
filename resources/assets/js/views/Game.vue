<template>
    <div class="flex-1 flex">
        <game-map :channel="channel"/>
        <options></options>
        <chat :channel="channel"></chat>
        <character-creator></character-creator>
    </div>
</template>
<script>
    import GameMap from '../components/Game/Map';
    import Options from '../components/Game/Options';
    import CharacterCreator from '../components/Game/Options/CharacterCreator';
    import Chat from '../components/Game/Chat';
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
