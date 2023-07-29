<template>
    <Head title="View Client" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex">
                <h2 class="flex-1 font-semibold text-xl text-gray-800 leading-tight">View Borrower &nbsp; ( {{ client.title }} )</h2>
                <Link class="bg-slate-500 text-white rounded-2xl p-5 hover:bg-slate-50 hover:text-black duration-200" as="button" :href="'/clients/'" style="margin-top: -20px; margin-bottom: -20px;">Back</Link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-slate-700 overflow-hidden shadow-lg sm:rounded-lg">
                    <div class="p-6 text-white flex">
                    <img :src="client.picUrl" alt="Product photo" class="w-[300px] h-[400px] border flex justify-center items-center">
                        <div class="flex-1 ml-4 ">
                            <div class="">
                                <h3 class="text-2xl flex-1"> <b>Title:</b> {{ client.title }}</h3>
                                <h3 class="text-2xl flex-1"> <b>Author:</b> {{ client.author }}</h3>
                                <div style="margin-top: 20px; margin-bottom: 20px;">
                                    <Link class="bg-red-500 p-2 text-white hover:bg-red-700 duration-75 mr-2 mb-2" :href="'/clients/' + client.id" method="delete" as="button">Delete</Link>
                                    <a class="bg-green-500 p-2 text-white hover:bg-green-700 duration-75 mr-2 mb-2" :href="'/clients/edit/' + client.id" as="button">Edit</a>

                                    <a :href="'/clients/email/' + client.id" class="bg-yellow-500 p-2 text-white hover:bg-yellow-700 duration-75 mr-2 mb-2" as="button">Send Email</a>

                                    <a as="button" :href="'/clients/pdf/' + client.id" target="_blank" class="bg-orange-500 p-2 text-white hover:bg-orange-700 duration-75 mr-2 mb-2">
                                        Export PDF
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-white p-10">
                        <div><b>Genre:</b> {{ client.subject }}</div>
                        <div><b>Borrower:</b> {{ client.borrower }}</div>
                        <div><b>Email:</b> {{ client.email }}</div>
                        <div><b>Borrow Date:</b> {{ client.formattedBDate }}</div>
                        <div class="mt-5 p-4 border rounded">
                            {{ client.bio }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue'

const page = usePage()
const user = computed(() => page.props.auth.user)

const props = defineProps({
    'client': Object
})
</script>
