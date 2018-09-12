<template>
    <div class="flex flex-1">
        <new-player v-if="!joined" @joined="joinLobby($event)"></new-player>
        <div v-else class="h-100 flex flex-1 flex-col">
            <game-map :channel="channel"></game-map>
            <chat :channel="channel" :name="name"></chat>
            <dice-tray :channel="channel" :name="name"></dice-tray>
        </div>
    </div>
</template>
<script>
    import NewPlayer from './NewPlayer';
    import Chat from './Chat';
    import GameMap from './GameMap';
    import DiceTray from './DiceTray';
    export default {
        props: [
            'user',
            'channel'
        ],
        components: {
            NewPlayer,
            Chat,
            GameMap,
            DiceTray
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
