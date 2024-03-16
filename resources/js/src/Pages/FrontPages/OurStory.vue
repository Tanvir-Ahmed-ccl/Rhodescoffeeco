<template>
    <AdminLayout>
        <section class="px-5 md:px-20 flex flex-col justify-end" 
            style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('imgs/started_img_n5.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;"
        >
            <div class="py-20 md:py-32 text-center text-gray-200 transition-all animate-fade">
                <h1 class="text-4xl md:text-6xl font-semibold">Our Story</h1>
            </div>
        </section>
        <div class="grid md:grid-cols-2 gap-10 px-5 md:px-20 py-12 md:py-32">
            <div>
                <h5 class="text-gray-700 text-lg md:text-3xl">RhodesCoffeeCo is a mobile coffee shop that serves the community of Pulaski NY and surrounding areas. We are a family-owned business that is passionate about coffee and serving our community.</h5>
            </div>
            <img src="../../Imgs/about_img2.jpg" alt="about story"/>
        </div>
    </AdminLayout>
</template>


<script setup>
import YellowBtn from '../../Components/YellowBtn.vue';
import AdminLayout from '../../Layouts/Frontend.vue';
</script>