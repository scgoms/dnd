<template>
    <div class="absolute pin-b w-full flex flex-row justify-center">
        <div style="clip-path: polygon(0% 100%, 100% 100%, 98% 0%, 2% 0%); background-image: url('/storage/images/bar_background.png')">
            <button class="btn btn-red m-2 ml-8 mr-1 w-auto" @click.prevent="roll(4)">4</button>
            <button class="btn btn-red ml-1 mr-1 w-auto" @click.prevent="roll(6)">6</button>
            <button class="btn btn-red ml-1 mr-1 w-auto" @click.prevent="roll(8)">8</button>
            <button class="btn btn-red ml-1 mr-1 w-auto" @click.prevent="roll(10)">10</button>
            <button class="btn btn-red ml-1 mr-1 w-auto" @click.prevent="roll(12)">12</button>
            <button class="btn btn-red m-2 mr-8 ml-1 w-auto" @click.prevent="roll(20)">20</button>
        </div>
    </div>
</template>
<script>
    export default {
        props: [
            'name'
        ],
        methods:{
            roll(dice){
                axios.get('/dice/' + dice)
                    .then(response => {
                        Event.$emit('received-roll', {
                            roll: response.data,
                            name: this.name
                        });
                    }).catch(error => {
                        alert("It broke");
                    });
            }
        }
    }
</script>
