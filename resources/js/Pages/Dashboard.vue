<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { computed } from 'vue';
import NavLink from '@/Components/NavLink.vue';

const props = defineProps({
    clients: Array,
    users: Array
})

const clientCount = computed(() => props.clients ? props.clients.length : 0);
const userCount = computed(() => props.users ? props.users.length : 0);

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight ">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div>
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex-1 p-10">Total Borrower ({{ clientCount }})
                            <NavLink :href="route('clients')" class="float-right">
                                Go to Borrower
                            </NavLink>
                        </h2>


                    </div>
                </div>
                 <br> <br>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div>


                        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex-1 p-10">Total Users ({{ userCount }})
                            <NavLink :href="route('clients')" class="float-right">

                            </NavLink>
                        </h2>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
