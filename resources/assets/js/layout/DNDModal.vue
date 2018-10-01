<template>
    <modal
        :name="name"
        height="auto"
        width="100%"
        classes="w-full h-auto"
        style="z-index: 10000"
        :pivotY="1"
    >
    <div class="flex flex-col">
        <div class="modal-border pin-t -mb-2"></div>
        <div class="modal-body pt-2 px-4">
            <slot></slot>
        </div>
        <div class="modal-border pin-b -mt-2 hidden"></div>
    </div>
    </modal>
</template>
<script>
    export default{
        props: [
            'name',
            'z-index'
        ],
        data(){
            return {
            }
        },
        created(){
        }
    }
</script>
