<template>
    <div>
        <button class="btn btn-blue" @click.prevent="show">New Lobby</button>
        <modal
            name="game-creator"
            classes="p-4 rounded shadow bg-white"
            height="auto"
        >
            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" v-model="form.name">
            </div>
            <div class="form-group">
                <label class="form-label">Description</label>
                <textarea class="form-control" v-model="form.description"></textarea>
            </div>
            <div class="form-group flex flex-row">
                <button class="btn btn-grey-lightest mr-1" @click.prevent="hide">Cancel</button>
                <button class="btn btn-blue ml-1" @click.prevent="submit">Create</button>
            </div>
        </modal>
    </div>
</template>
<script>
    export default{
        data(){
            return {
                form: {
                    name: '',
                    description: ''
                }
            }
        },
        methods:{
            show(){
                this.$modal.show('game-creator');
            },
            hide(){
                this.$modal.hide('game-creator');
            },
            reset(){
                this.form.name = '';
                this.form.description = '';
            },
            submit(){
                console.dir(this.form);
                axios.post('/game', this.form)
                    .then(response => {
                        this.hide();
                    }).catch(error => {
                        this.hide();
                    })
            }
        },
    }
</script>
