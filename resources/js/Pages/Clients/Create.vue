<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    title: '',
    author: '',
    subject: '',
    borrower: '',
    email: '',
    bdate: '',
    bio: '',
    pic: null
})

function submit() {
    form.post('/clients/')
}

</script>

<template>
    <Head title="Create Client" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex">
                <h2 class="flex-1 font-semibold text-xl text-gray-800 leading-tight">Create Borrower</h2>
                <Link class="mt-2 bg-slate-500 text-white rounded-2xl p-5 hover:bg-slate-50 hover:text-black duration-200" as="button" href="/clients" style="margin-top: -20px; margin-bottom: -20px;">Back</Link>
            </div>
        </template>

        <div class="py-6">
            <div class="bg-slate-900 max-w-4xl p-4 mx-auto rounded-lg text-white">
                <form @submit.prevent="submit" class="flex">
                    <div class="flex-1 pr-4">
                        <h4 class="text-xl mb-4">Form Details</h4>
                        <div class="form-field text-black">
                            <label for="title">Title</label> <br>
                            <select required name="" id="" v-model="form.title" style="width: 425px; background-color: transparent; border-bottom: 2px solid white;" class="border-0 text-white">
                                <option class="text-black" value="Life And Works Of Rizal">Life And Works Of Rizal</option>
                                <option class="text-black" value="Don Quixote">Don Quixote</option>
                                <option class="text-black" value="Alice's Adventures in Wonderland">Alice's Adventures in Wonderland</option>
                                <option class="text-black" value="The Adventures of Huckleberry Finn">The Adventures of Huckleberry Finn</option>
                                <option class="text-black" value="The Adventures of Tom Sawyer">The Adventures of Tom Sawyer</option>
                                <option class="text-black" value="Treasure Island">Treasure Island</option>
                                <option class="text-black" value="Pride and Prejudice">Pride and Prejudice</option>
                                <option class="text-black" value="Wuthering Heights">Wuthering Heights</option>
                                <option class="text-black" value="Jane Eyre">Jane Eyre</option>
                                <option class="text-black" value="Moby Dick">Moby Dick</option>
                                <option class="text-black" value="The Scarlet Letter">The Scarlet Letter</option>
                                <option class="text-black" value="Gulliver's Travels">Gulliver's Travels</option>


                            </select>
                        </div>

                        <div class="form-field text-black " >
                            <label for="author">Author</label>
                            <input required type="text" id="author" v-model="form.author" class="border-0 text-white" style="background-color: transparent; border-bottom: 2px solid white;">
                        </div>

                        <div class="form-field text-black">
                            <label for="subject">Genre</label>
                            <input required type="text" id="subject" v-model="form.subject" class="border-0 text-white" style="background-color: transparent; border-bottom: 2px solid white;">
                        </div>

                        <div class="form-field text-black">
                            <label for="bdate">Borrow Date</label>
                            <input required type="date" id="bdate" v-model="form.bdate" class="border-0 text-white" style="background-color: transparent; border-bottom: 2px solid white;">
                        </div>

                        <div class="form-field text-black">
                            <label for="borrower">Borrower</label>
                            <input required type="text" id="borrower" v-model="form.borrower" class="border-0 text-white" style="background-color: transparent; border-bottom: 2px solid white;">
                        </div>

                        <div class="form-field text-black">
                            <label for="email">Email</label>
                            <input required type="email" id="email" v-model="form.email" class="border-0 text-white" style="background-color: transparent; border-bottom: 2px solid white;">
                        </div>
                        <div class="form-field text-black">
                            <label for="pic">Cover Picture</label>
                            <input required type="file" @input="form.pic = $event.target.files[0]" class="h-full border-gray-400 rounded text-center" accept="image/png" />
                            <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                {{ form.progress.percentage }}%
                            </progress>
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col ">
                        <h4 class="text-xl">Description</h4>
                        <textarea placeholder="Write here!" required cols="30" v-model="form.bio" class="flex-1 border-0 border-gray-400 rounded text-white" style="background-color: transparent;"></textarea>
                        <button class="mt-2 bg-slate-500 text-white rounded-2xl p-5 hover:bg-slate-50 hover:text-black duration-200" type="submit">Create Request</button>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
