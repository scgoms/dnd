<template>
    <div class="absolute flex flex-1 w-full h-full mt-14" style="z-index:9000">
        <div class="flex flex-1 flex-col">
            <game-map :channel="channel"></game-map>
            <chat :channel="channel" :name="name"></chat>
            <!-- <character-pane :user="user"></character-pane> -->
            <lobby-footer>
            </lobby-footer>
        </div>
    </div>
</template>
<script>
    import Chat from './Chat';
    import GameMap from './GameMap';
    import LobbyFooter from './Footer';
    export default {
        props: [
            'user',
            'channel',
            'characters'
        ],
        components: {
            Chat,
            GameMap,
            LobbyFooter
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
