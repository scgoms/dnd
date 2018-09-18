<template>
    <div class="flex flex-1">
        <new-player v-if="!joined" @joined="joinLobby($event)"></new-player>
        <div v-else class="h-100 flex flex-1 flex-col">
            <game-map :channel="channel"></game-map>
            <chat :channel="channel" :name="name"></chat>
            <character-pane :user="user"></character-pane>
            <div class="absolute pin-b w-full">
                <dice-tray :channel="channel" :name="name"></dice-tray>
                <character-bar :myCharacters="characters" :channel="channel"></character-bar>
            </div>
        </div>
    </div>
</template>
<script>
    import NewPlayer from './NewPlayer';
    import Chat from './Chat';
    import GameMap from './GameMap';
    import DiceTray from './DiceTray';
    import CharacterBar from './CharacterBar';
    import CharacterPane from './CharacterPane';
    export default {
        props: [
            'user',
            'channel',
            'characters'
        ],
        components: {
            NewPlayer,
            Chat,
            GameMap,
            DiceTray,
            CharacterBar,
            CharacterPane
        },
        data(){
            return {
                joined: false,
                name: '',
                backgroundPath: ''
            }
        },
        methods:{
            joinLobby(payload){
                this.joined=true;
                this.name = payload.name;
            }
        },
        mounted(){
            if(typeof this.user !== 'undefined'){
                this.name = this.user.name;
                this.joined = true;
            }
        }
    }
</script>
