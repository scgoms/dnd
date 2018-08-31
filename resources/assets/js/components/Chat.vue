<template>
    <div class="absolute pin-r pin-t pin-b w-96 flex flex-col overflow-hidden " style="z-index: 1000">
        <div class="bg-red shadow rounded-b h-8 text-center flex justify-center items-center" @click.prevent="show = !show">Arrow down</div>
        <transition name="slide">
            <div class="flex-1 flex flex-col" style="background: rgb(0,0,0); background: rgba(0,0,0, 0.75);" v-if="show">
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
        </transition>
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
                    this.message = '';
                }).catch(error => {
                    alert("There was an error");
                })
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
/* Enter and leave animations can use different */
/* durations and timing functions.              */
.slide-enter-active {
  transition: all .3s;
}
.slide-leave-active {
  transition: all .3s;
}
.slide-enter, .slide-leave-to
/* .slide-fade-leave-active below version 2.1.8 */ {
  transform: translateY(-100%);
}
</style>
