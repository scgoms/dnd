<template>
    <div>
        <nav class="container navbar flex -my-2 px-8 pt-2 w-full mx-auto" style="clip-path: polygon(0% 0%, 1% 100%, 99% 100%, 100% 0%);">
            <label for="file" class="btn btn-red w-auto">
            <input type="file" name="background-image" id="file" class="inputfile hidden" @change="handleFileChange($event.target.name, $event.target.files)"/>
                <span>Choose a file</span>
            </label>
            <button class="btn btn-red w-auto" @click.prevent="showInvitationForm">Invite</button>
        </nav>
        <modal
            name="invitation-form"
            height="auto"
            classes="bg-white rounded shadow p-4"
            style="z-index: 1100"
        >
            <div class="form-group">
                <div class="form-label">Email</div>
                <input type="text" class="form-control" v-model="invitationForm.email">
            </div>
            <div class="form-group flex-row">
                <button class="btn btn-grey-lightest mr-1" @click.prevent="hideInvitationForm">Cancel</button>
                <button class="btn btn-blue ml-1" @click.prevent="sendInvitation">Invite</button>
            </div>
        </modal>
    </div>
</template>
<script>
    export default {
        props: [
            'game'
        ],
        data(){
            return {
                file: {},
                invitationForm: {}
            }
        },
        watch:{

        },
        methods:{
            showInvitationForm(){
                this.$modal.show('invitation-form');
            },
            hideInvitationForm(){
                this.$modal.hide('invitation-form');
            },
            sendInvitation(){
                axios.post('/game/' + this.game.id + '/invite', {
                    email: this.invitationForm.email
                }).then(response => {
                    this.invitationForm = {};
                    this.hideInvitationForm();
                }).catch(error => {
                    alert("Error happened");
                })
            },
            handleFileChange(fieldName, fileList){
                const formData = new FormData();

                if (!fileList.length) return;
                // append the files to FormData
                Array
                  .from(Array(fileList.length).keys())
                  .map(x => {
                    formData.append(fieldName, fileList[x], fileList[x].name);
                  });

                // save it
                this.save(formData);
            },
            save(formData){
                axios.post('/game/' + this.game.id + '/background', formData)
                    .then(response => {
                    }).catch(error => {
                        alert("It broke");
                    })
            }
        }
    }
</script>
