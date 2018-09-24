<template>
    <div>
        <tray
            name="game"
            :open="tray.open"
            enter-from="bottom"
            @closed="tray.open = false"
        >
            Chat
        </tray>
        <portal to="footer-items">
            <button @click.prevent="tray.open = !tray.open" :class="{'burger-close' : tray.open}">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>
        </portal>
    </div>
    <transition name="right-tray">
        <div class="absolute flex sidebar black-transparent pb-14" v-if="open">
            <div class="absolute pin-r pin-t pt-2 pr-2">
                <button @click.prevent="open = !open" class="burger-close">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </button>
            </div>
            <div class="flex-1">
                <div v-for="message in messages">
                    <span class="text-white">
                        <strong>{{ message.user }}: </strong>{{ message.body}}
                    </span>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label class="pl-2 form-label text-white">Message</label>
                    <textarea class="form-control" placeholder="Message" v-model="message"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-blue" @click.prevent="sendMessage">Send</button>
                </div>
            </div>
        </div>
    </transition>
</template>
<script>
    export default{
        props: [
            'name',
            'channel'
        ],
        data(){
            return {
                message: '',
                messages: [],
                open: false
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
            Event.$on('show-chat', () => {
                this.setOpen(true);
            });
            Event.$on('received-roll', (e) => {
                this.messages.push({
                    user: e.name,
                    body: 'Rolled a ' + e.roll
                });
            });
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
