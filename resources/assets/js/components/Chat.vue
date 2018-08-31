<template>
    <div class="flex-1 flex flex-col">
        <div class="flex-1 pt-2 pl-2 pr-2">
            <span v-for="message in messages">
                <strong>{{ message.user }}:</strong>{{ message.body}}
            </span>
        </div>
        <div class="h-auto">
            <div class="form-group">
                <label class="pl-2 form-label">Message</label>
                <textarea class="form-control" placeholder="Message" v-model="message"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-blue" @click.prevent="sendMessage">Send</button>
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
                messages: []
            }
        },
        methods:{
            sendMessage(){
                axios.post('/messages', {
                    from: this.name,
                    message: this.message
                }).then(response =>{
                    this.messages.push(response);
                }).catch(error => {
                    alert("There was an error");
                })
            }
        },
        mounted(){
            Echo.channel('chat')
                .listen('MessageReceived', (e) => {
                    console.log(e);
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
