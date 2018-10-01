<template>
    <div class="flex flex-col">
        <div class="navbar-border -mb-2" style="z-index:8900"></div>
        <div class="w-full black-transparent flex flex-row justify-center pt-2">
            <button class="btn btn-red w-auto ml-2 mr-1" @click.prevent="roll(4)">4</button>
            <button class="btn btn-red w-auto mx-1" @click.prevent="roll(6)">6</button>
            <button class="btn btn-red w-auto mx-1" @click.prevent="roll(8)">8</button>
            <button class="btn btn-red w-auto mx-1" @click.prevent="roll(10)">10</button>
            <button class="btn btn-red w-auto mx-1" @click.prevent="roll(12)">12</button>
            <button class="btn btn-red w-auto mx-1 mr-2" @click.prevent="roll(20)">20</button>
        </div>
    </div>
</template>
<script>
    export default {
        props: [
            'name',
            'channel'
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
