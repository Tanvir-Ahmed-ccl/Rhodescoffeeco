<template>
    <AdminLayout>
        <!-- Page Title -->
        <section class="px-5 md:px-20 flex flex-col justify-end" 
            style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('imgs/started_img_n3.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;"
        >
            <div class="pt-36 pb-20 md:py-44 text-center text-gray-200 transition-all animate-fade">
                <h1 class="text-4xl md:text-7xl font-semibold italic">FAQ</h1>
            </div>
        </section>

        <!-- Page Content -->
        <section class="px-5 md:px-20 py-12 md:py-32 transition-all animate-fade">
            <div class="grid md:grid-cols-2 gap-10 mb-10" v-for="item in faqsCollection" :key="item.id">
                <div>
                    <p class="font-semibold text-2xl">{{item.query}}</p>
                </div>
                <div>
                    <p class="text-lg">{{item.answer}}</p>
                </div>
            </div>
        </section>
    </AdminLayout>
</template>


<script setup>
import AdminLayout from '../../Layouts/Frontend.vue';
import faqsCollection from '../../Data/faqs';
</script>