<template>
<Head title="Admin" />

<AuthenticatedLayout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">All Requests (3)</h2>
    </template>

        <!-- <div v-if="props.message.info" class="py-5 rounded-lg text-green-600 text-center text-3xl">
            {{ props.message.info }}
        </div>
        <div v-if="props.message.error" class="py-5 rounded-lg text-red-600 text-center text-3xl">
            {{ props.message.error }}
        </div> -->

    <div class="py-12 text-white" style="display: grid; place-content: center;">
        <div class="flex items-center flex-wrap" style="width: 1210px;">
            <!-- <MailCard :subject="form.subject" :message="form.message"  /> -->
            <div class="p-4 rounded-lg w-1/4 bg-slate-900 p-10 m-10" style="width: 500px;">
                <b>Name:</b> Francis Michael Mejias <br> <br>
                <b>ID Number:</b> 12232 <br> <br>
                <b>Book Requested:</b> Moby Dick <br> <br>
                <b>Course:</b> BSIT <br> <br>
                <b>Email:</b> mejiasfranzsaijem@gmail.com &nbsp; <button class="bg-green-600 p-2 rounded-xl" @click="copyEmail()">Copy Email</button> <br> <br>
            </div>

            <div class="p-4 rounded-lg w-1/4 bg-slate-900 p-10 m-10" style="width: 500px;">
                <b>Name:</b> Christian Sacedon <br> <br>
                <b>ID Number:</b> 12254 <br> <br>
                <b>Book Requested:</b> Jane Eyre <br> <br>
                <b>Course:</b> BSIT <br> <br>
                <b>Email:</b> christianjamessacedon@gmail.com &nbsp; <button class="bg-green-600 p-2 rounded-xl" @click="copyEmail1()">Copy Email</button> <br> <br>
            </div>


            <div class="p-4 rounded-lg w-1/4 bg-slate-900 p-10 m-10" style="width: 500px;">
                <b>Name:</b> Barz Gudia <br> <br>
                <b>ID Number:</b> 12232 <br> <br>
                <b>Book Requested:</b> Treasure Island <br> <br>
                <b>Course:</b> BSIT <br> <br>
                <b>Email:</b> barzgudia@gmail.com &nbsp; <button class="bg-green-600 p-2 rounded-xl" @click="copyEmail2()">Copy Email</button> <br> <br>
            </div>



        </div>
    </div>
</AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';

const copyEmail = () =>{
    var tempInput = document.createElement('input');
    var email = 'mejiasfranzsaijem@gmail.com';
    tempInput.value = email;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand('copy');
    document.body.removeChild(tempInput);
    alert('Email copied to clipboard: ' + email);
}

const copyEmail1 = () =>{
    var tempInput = document.createElement('input');
    var email = 'christianjamessacedon@gmail.com';
    tempInput.value = email;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand('copy');
    document.body.removeChild(tempInput);
    alert('Email copied to clipboard: ' + email);
}


const copyEmail2 = () =>{
    var tempInput = document.createElement('input');
    var email = 'barzgudia@gmail.com';
    tempInput.value = email;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand('copy');
    document.body.removeChild(tempInput);
    alert('Email copied to clipboard: ' + email);
}




</script>
