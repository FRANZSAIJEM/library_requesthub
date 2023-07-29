<template>

    <Head title="Clients" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight flex-1">Borrowers ({{ clientCount }})</h2>
                <div></div>
                <div>
                    <Link href="/clients/create" class="mt-2 bg-slate-500 text-white rounded-2xl p-5 hover:bg-slate-50 hover:text-black duration-200">Create Form Borrower</Link>
                </div>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <input type="text" @keydown.enter="search($event)" name="" id="" class="mb-10 text-white border-0" style="background-color: transparent; border-bottom: 2px solid white; width: 590px;" placeholder="Search Title">
                <div class="overflow-hidden shadow-sm sm:rounded-lg flex flex-wrap justify-between">

                    <div class="w-[49%] mb-4" v-for="client in clients" :key="client.id">
                        <ClientCard :client="client" />
                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>

</template>

<script setup>
import { computed } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ClientCard from '@/Components/ClientCard.vue';
import { Head, Link, router } from '@inertiajs/vue3';

const props = defineProps({
    clients: Array
})

function search(e) {
    router.visit('/clients/search/' + e.target.value, {
        only: ['clients']
    })
}

const clientCount = computed(() => props.clients.length);

</script>
