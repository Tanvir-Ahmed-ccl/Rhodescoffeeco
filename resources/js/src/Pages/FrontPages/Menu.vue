<template>
    <AdminLayout>
        <!-- Page Title -->
        <section class="px-5 md:px-20 flex flex-col justify-end" 
            style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('imgs/started_img_n3.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;"
        >
            <div class="pt-28 text-center text-[#c8d6ca] transition-all animate-fade">
                <!-- <h1 class="text-4xl md:text-7xl font-semibold italic">Menu</h1> -->
            </div>
        </section>

        <!-- Page Content -->
        <section class="px-5 md:px-20 py-12 md:py-16 transition-all animate-fade grid grid-cols-2 gap-10">
            <div class="flex flex-col items-center lg:col-span-2 mb-10">
                <img src="../../Imgs/updated_logo.png" alt="sun-logo" class="h-40 w-40 mx-auto" />
                <h1 class="text-2xl">We have something for everyone</h1>
            </div>

            <div class="text-center lg:col-span-2 mb-6">
                <h4 class="text-3xl font-bold mb-4">Drinks (Hot or Iced)</h4>
                <ul class="text-xl">
                    <li>Latte</li>
                    <li>Cappuccino</li>
                    <li>Americano</li>
                    <li>Chai</li>
                    <li>Matcha</li>
                    <li>Hot Chocolate</li>
                    <li>Tea Selection</li>
                </ul>
            </div>

            <div class="text-center">
                <h4 class="text-3xl font-bold mb-4">Milks + Alternatives</h4>
                <ul class="text-xl">
                    <li>Whole Milk</li>
                    <li>Oat Milk</li>
                    <li>Almond Milk</li>
                </ul>
            </div>

            <div class="text-center">
                <h4 class="text-3xl font-bold mb-4">Syrups + Sauces</h4>
                <ul class="text-xl">
                    <li>Vanila</li>
                    <li>Mocha</li>
                    <li>Caramel</li>
                    <li>Additional flavors upon request</li>
                </ul>
            </div>
        </section> 
    </AdminLayout>
</template>

<script setup>
import AdminLayout from '../../Layouts/Frontend.vue';
import BlogCard from '../../Components/BlogCard.vue';
import BlogOneImg from '../../Imgs/ins_gal17.jpeg'
import BlogTwoImg from '../../Imgs/ins_gal10.jpeg'
import BlogThreeImg from '../../Imgs/ins_gal1.jpeg'
</script>