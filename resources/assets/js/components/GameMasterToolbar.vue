<template>
    <div>
        <nav class="wooden shadow-md -mt-2 flex px-2 md:tapered">
            <label for="file" class="btn btn-red w-auto ml-1 mr-1">
            <input type="file" name="background-image" id="file" class="inputfile hidden" @change="handleFileChange($event.target.name, $event.target.files)"/>
                <span>Choose a file</span>
            </label>
            <button class="btn btn-red w-auto ml-1" @click.prevent="showInvitationForm">Invite</button>
        </nav>
        <dnd-modal name="invitation-form">
            <div class="form-group">
                <div class="form-label">Email</div>
                <input type="text" class="form-control" v-model="invitationForm.email">
            </div>
            <div class="form-group flex-row">
                <button class="btn btn-grey-lightest mr-1" @click.prevent="hideInvitationForm">Cancel</button>
                <button class="btn btn-blue ml-1" @click.prevent="sendInvitation">Invite</button>
            </div>
        </dnd-modal>
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
                });
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
