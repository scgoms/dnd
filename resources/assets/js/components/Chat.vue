<template>
    <div>
        <div class="absolute pin-t pin-r pin-b w-1/6 flex sidebar-right" :class="{'sidebar-right-open':show}" style="z-index:1000">
            <div class="bg-red w-8" @click.prevent="show = !show">T</div>
            <div class="flex-1 flex flex-col" style="background: rgb(0,0,0); background: rgba(0,0,0, 0.75)">
                <div class="flex-1 pt-2 pl-2 pr-2">
                    <div v-for="message in messages">
                        <span class="text-white">
                            <strong>{{ message.user }}: </strong>{{ message.body}}
                        </span>
                    </div>
                </div>
                <div class="h-auto">
                    <div class="form-group">
                        <label class="pl-2 form-label text-white">Message</label>
                        <textarea class="form-control" placeholder="Message" v-model="message"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-blue" @click.prevent="sendMessage">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        props: [
            'name'
        ],
        data(){
            return {
                message: '',
                messages: [],
                show: false
            }
        },
        methods:{
            sendMessage(){
                axios.post('/messages', {
                    from: this.name,
                    message: this.message
                }).then(response =>{

                }).catch(error => {
                    alert("There was an error");
                })
                this.message = '';
            }
        },
        mounted(){
            Echo.channel('chat')
                .listen('MessageReceived', (e) => {
                    this.messages.push(e.message);
                });
            Echo.channel('activity')
                .listen('UserJoined', (e) => {
                    console.log(e.user.name);
                });
            Echo.channel('activity')
                .listen('UserLeft', (e) => {
                    console.log(e.user.name);
                });
        }
    }
</script>
<style>
    .sidebar-right{
        margin-right: -14.6%;
        transition:all 700ms;
    }
    .sidebar-right-open{
        margin-right: 0;
    }
</style>
