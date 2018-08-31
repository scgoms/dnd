<template>
    <nav class="container navbar md:navbar h-12">
        <input type="file" name="background-image" id="file" class="inputfile hidden" @change="handleFileChange($event.target.name, $event.target.files)"/>
        <label for="file" class="btn btn-blue w-auto">
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
