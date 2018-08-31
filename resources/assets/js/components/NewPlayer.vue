<template>
    <div class="container mx-auto">
        <div class="form">
            <div class="form-group">
                <div class="form-label">
                    Name
                </div>
                <input class="form-control" type="text" name="name" v-model="name" placeholder="Your name">
            </div>
            <div class="form-group">
                <button class="btn btn-blue" @click.prevent="join" :disabled="submitting == true" :class="{'btn-grey-lightest': submitting}">Join</button>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                submitting: false,
                name: ''
            }
        },
        methods:{
            join(){
                this.submitting = true;
                axios.post('/game', {
                    name: this.name
                }).then(response =>{
                    this.submitting = false;
                    this.$emit('joined', {name: this.name});
                }).catch(error => {
                    alert("There was an error");
                });
            }
        }
    }
</script>
<style>

</style>
