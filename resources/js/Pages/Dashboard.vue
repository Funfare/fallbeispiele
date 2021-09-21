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
                    
                    <div class="m-4">
                        <jet-button type="button" @click="items.push({type:'category', name: 'blabla', children:[{type:'action', name:'bla'}]})">Kategorie hinzufügen</jet-button>
                        <jet-button type="button" @click="items.push({type:'action', name:'bla'})">Aktion hinzufügen</jet-button>
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
    import JetButton from '@/Jetstream/Button'
    import Category from '@/Components/Case/Category.vue'
    import Action from '@/Components/Case/Action.vue'
    import Nested from '@/Components/Nested.vue'
    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
            Category,
            Action,
            Nested,
            JetButton
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
