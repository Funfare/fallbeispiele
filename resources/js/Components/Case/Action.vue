<template>
    <div class="x-action flex border-b-2 border-gray-200">
        <div class="pl-2 my-2 w-40">
            <slot></slot>
        </div>
        <div class="flex-auto mx-4 my-2">
            <input class="px-2 border-2 border-gray-200 rounded-xl w-full" placeholder="Anmerkungen" />
        </div>
        <div class="my-2 space-x-2">
            <i class="text-2xl text-bold far fa-smile"></i>
            <i class="text-2xl text-bold far fa-meh"></i>
            <i class="text-2xl text-bold far fa-frown"></i>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        
    })
</script>
