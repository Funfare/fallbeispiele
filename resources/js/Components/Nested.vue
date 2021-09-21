
<template>
        <draggable class="dragArea" tag="div" :list="children" :group="{ name: 'g1' }">
            <component :is="el.type" v-for="el in children" :key="el.name" :name="el.name">
                <nested v-if="el.children !== undefined" :children="el.children" />
            </component>

            <template v-if="children.length == 0">
                <div class="w-full h-auto">Kein Eintrag vorhanden</div>
            </template>
        </draggable>
</template>

<script>
    import { defineComponent } from 'vue'
    import { VueDraggableNext } from 'vue-draggable-next'
    import Category from '@/Components/Case/Category'
    import Action from '@/Components/Case/Action'
    export default defineComponent({
        props: ['children'],
        components: {draggable: VueDraggableNext, Category, Action},
        name: 'nested'
    })
</script>


