<template>
    <div class="flex flex-1 flex-col">
        <new-player v-if="!joined" @joined="joinLobby($event)"></new-player>
        <div v-else class="h-100 flex flex-1">
            <div class="w-full bg-red h-100">The main content</div>
            <div class="w-1/4 absolute mt-12 pin-r pin-t pin-b h-100 text-white flex" style="background: rgb(0,0,0); background: rgba(0,0,0, 0.75);">
                <chat :name="name"></chat>
            </div>
        </div>
    </div>
</template>
<script>
    import NewPlayer from './NewPlayer';
    import Chat from './Chat';
    export default {
        data(){
            return {
                joined: false,
                name: ''
            }
        },
        methods:{
            joinLobby(payload){
                this.joined=true;
                this.name = payload.name;
            }
        },
        components: {
            NewPlayer,
            Chat
        }
    }
</script>
