<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    
                    <div class="flex flex-col m-4">
                        <category name="Scene">
                            <action>Scene</action>
                            <action>Safety</action>
                        </category>
                        <category name="test">
                            <action>Aktion 0</action>
                            <category name="test2">
                                <action>Aktion 1</action>
                                <action>Aktion 2</action>
                            </category>
                            <action>Aktion 3</action>
                            <action>Aktion 4</action>
                        </category>
                    </div>

                    <div class="flex flex-col m-4">
                        <nested :children='items'>
                        </nested>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'
    import Category from '@/Components/Case/Category.vue'
    import Action from '@/Components/Case/Action.vue'
    import Nested from '@/Components/Nested.vue'
    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
            Category,
            Action,
            Nested
        },
        data() {
            return {
                items: [
                    {
                        type: 'category',
                        name: 'Sicherheit',
                        children: [
                            {
                                type: 'action',
                                name: 'Secure',
                            },
                            {
                                type: 'action',
                                name: 'Safety'
                            }
                        ],
                    }
                ]
            }
        }
    })
</script>
