<template>
        <div class="x-category flex border-b-2 border-gray-400">
            <div class="py-4 px-2 text-bold border-r-2  border-gray-100 w-10"> <span style="writing-mode: vertical-lr"> {{ name }}</span></div>
            <div class="my-3 w-full flex flex-col">
                <slot></slot>
            </div>
        </div>
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        props: ['name']
    })
</script>
