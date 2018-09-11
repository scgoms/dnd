<template>
    <nav class="container navbar shadow-inner mx-auto bg-green flex -my-2 px-8 pt-2" style="clip-path: polygon(0% 0%, 1% 100%, 99% 100%, 100% 0%);">
        <label for="file" class="btn btn-red w-auto">
        <input type="file" name="background-image" id="file" class="inputfile hidden" @change="handleFileChange($event.target.name, $event.target.files)"/>
            <span>Choose a file</span>
        </label>
    </nav>
</template>
<script>
    export default {
        data(){
            return {
                file: {}
            }
        },
        watch:{

        },
        methods:{
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
                axios.post('/background', formData)
                    .then(response => {
                    }).catch(error => {
                        alert("It broke");
                    })
            }
        }
    }
</script>
