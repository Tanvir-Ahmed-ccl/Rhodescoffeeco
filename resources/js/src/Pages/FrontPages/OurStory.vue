<template>
    <AdminLayout>
        <!-- Page Title -->
        <section class="px-5 md:px-20 flex flex-col justify-end" 
            style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('imgs/started_img_n7.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;"
        >
            <div class="pt-36 pb-20 md:py-44 text-center text-[#c8d6ca] transition-all animate-fade">
                <h1 class="text-4xl md:text-7xl font-semibold italic">Our Story</h1>
            </div>
        </section>

        <!-- Page Content -->
        <section class="grid md:grid-cols-2 gap-10 px-5 md:px-20 py-12 md:py-32 transition-all animate-fade">
            <div class="text-gray-700 text-lg md:text-2xl flex flex-col gap-5">
                <h5>
                    Welcome to Rhodes Coffee Co, a vibrant addition to your community! This woman and veteran-owned mobile coffee shop is a haven for coffee enthusiasts and health-conscious foodies alike.  Discover a delightful menu of exceptionally crafted espresso drinks, refreshing smoothies, and wholesome treats like overnight oats and açaí bowls. 
                    
                </h5>
                <h5>
                    Rhodes Coffee Co is passionate about using high-quality, organic ingredients, evident in every delicious sip and bite. Their commitment to friendly service and a welcoming atmosphere shines through. With ample parking and a convenient location, it's easy to make Rhodes Coffee Co your go-to spot for that perfect caffeine fix or a healthy, satisfying snack. Whether you're a local or just passing through, don't miss this gem!
                </h5>
            </div>
            <img src="../../Imgs/about_img2.jpg" alt="about story" />
        </section>
    </AdminLayout>
</template>


<script setup>
import AdminLayout from '../../Layouts/Frontend.vue';
</script>