<template>
    <AdminLayout>
        <!-- Page Title -->
        <section class="px-5 md:px-20 flex flex-col justify-end" 
            style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('imgs/started_img_n3.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;"
        >
            <div class="pt-36 pb-20 md:py-44 text-center text-[#c8d6ca] transition-all animate-fade">
                <h1 class="text-4xl md:text-7xl font-semibold italic">Blogs</h1>
            </div>
        </section>

        <!-- Page Content -->
        <section class="px-5 md:px-20 py-12 md:py-32 grid md:grid-cols-3 gap-10 transition-all animate-fade">
            <BlogCard :img="BlogOneImg" />
            <BlogCard/>
            <BlogCard/>
        </section>
    </AdminLayout>
</template>


<script setup>
import AdminLayout from '../../Layouts/Frontend.vue';
import BlogCard from '../../Components/BlogCard.vue';
import BlogOneImg from '../../Imgs/started_img_n6.jpeg'
</script>