<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
// import MailCard from '@/Components/MailCard.vue';

const form = useForm({
    subject: '',
    message: ''
})

const submit = () => {
    form.post('/admin/send-mail')

    form.subject = ''
    form.message = ''
}

const props = defineProps({
    message: Object
})


var wordList = ["Attention Library Patrons!", "Alert: Book Return Reminder", "Important Notice: Book Returns", "Urgent Book Return Request", "Reminder: Return Your Books"];

const generateWord = () => {
  // Get a random word from the wordList
  const randomIndex = Math.floor(Math.random() * wordList.length);
  const generatedWord = wordList[randomIndex];

  // Assign the generated word to the input field
  form.subject = generatedWord;
};
// console.log(props.message)
</script>

<template>
    <Head title="Admin" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Send Message</h2>
        </template>

            <!-- <div v-if="props.message.info" class="py-5 rounded-lg text-green-600 text-center text-3xl">
                {{ props.message.info }}
            </div>
            <div v-if="props.message.error" class="py-5 rounded-lg text-red-600 text-center text-3xl">
                {{ props.message.error }}
            </div> -->

        <div class="py-12 text-white">
            <div class="flex justify-center items-center">
                <!-- <MailCard :subject="form.subject" :message="form.message"  /> -->
                <div class="p-4 rounded-lg w-1/4 bg-slate-900 p-10">
                    <h1 class="text-2xl mb-10">Send message to all Borrowers</h1>
                    <form @submit.prevent="submit">
                        <div class=" mb-10">
                            <label for="subject" class="text-4xl"><b>Alert Title:</b> &nbsp;&nbsp;</label> <br> <br>
                            <input v-model="form.subject" type="text" id="subject"  class="border-0 text-white" style="background-color: transparent; border-bottom: 2px solid white; width: 395px;"> <br>
                            <button class="mt-5 text-white px-4 py-1.5 rounded-md bg-blue-600" type="button" @click="generateWord()">Generate Alert Title</button>
                        </div>
                        <div class=" mb-10">
                            <label for="message" class="text-4xl"><b>Message:</b> </label> <br> <br>
                            <textarea placeholder="Write here!" v-model="form.message" type="text" id="message" class="border-0 px-2 py-1 h-[120px] w-full rounded-md text-white" style="background-color: transparent;"></textarea>
                        </div>
                        <div class="flex justify-start">
                            <button type="submit" class="text-white px-4 py-1.5 rounded-md bg-green-600">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
