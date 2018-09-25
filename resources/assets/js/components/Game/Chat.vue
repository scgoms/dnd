<template>
    <div>
        <tray
            name="chat"
            :open="tray.open"
            enter-from="right"
            @open="tray.open = true"
            @closed="tray.open = false"
        >
            <div class="flex-1">
                <div v-for="message in messages">
                    <span class="text-white">
                        <strong>{{ message.user }}: </strong>{{ message.body}}
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label class="pl-2 form-label text-white">Message</label>
                <textarea class="form-control" placeholder="Message" v-model="message"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-blue" @click.prevent="sendMessage">Send</button>
            </div>
        </tray>
        <portal to="footer-items">
            <button @click.prevent="tray.open = !tray.open" :class="{'burger-close' : tray.open}">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>
        </portal>
    </div>
</template>
<script>
    export default{
        props: [
            'name',
            'channel'
        ],
        data(){
            return {
                tray: {
                    open:false
                },
                message: '',
                messages: [],
            }
        },
        methods:{
            sendMessage(){
                axios.post('/game/' + this.channel.id + '/messages', {
                    from: this.name,
                    message: this.message
                }).then(response =>{
                }).catch(error => {
                    alert("There was an error");
                })
                this.message = '';
            },
            setOpen(value){
                this.open = value;
            }
        },
        mounted(){
            Echo.private('game.' + this.channel.id + '.chat')
                .listen('MessageReceived', (e) => {
                    this.messages.push(e.message);
                });
            // Echo.channel('activity')
            //     .listen('UserJoined', (e) => {
            //         console.log(e.user.name);
            //     });
            // Echo.channel('activity')
            //     .listen('UserLeft', (e) => {
            //         console.log(e.user.name);
            //     });
        }
    }
</script>
