<template>
    <nav class="fixed w-full z-20 top-0 start-0 transition-all duration-200" :class="scrollPosition > 100 ? 'bg-[#e7d1b5dc]' : ''">
        <div class="flex flex-wrap items-center mx-5 md:ml-12 md:mr-20 py-4 text-white">
            <Link href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <!-- <span class="self-center text-xl md:text-3xl font-semibold whitespace-nowrap" :class="scrollPosition > 100 ? 'text-black' : 'text-white'">Rhodescoffeeco</span> -->
                <img v-if="scrollPosition > 100" src="../Imgs/logo.png" class="h-20 w-48" alt="logo" />
                <img v-else src="../Imgs/white_logo.png" class="h-20 w-48" alt="logo" />
            </Link>
            <div class="flex ms-auto md:order-2 space-x-3 md:space-x-0 gap-2 md:gap-8 items-center rtl:space-x-reverse">
                <a target="_blank" href="https://www.instagram.com/rhodescoffeeco/"> <i class="fa-brands fa-instagram text-4xl" :class="scrollPosition > 100 ? 'text-black' : 'text-white'"></i> </a>
                <Link href="/contact" class="uppercase hidden md:flex py-3 px-6 bg-[#D69C46] hover:bg-[#d69c46bb] text-white text-lg">
                    Get Started
                </Link>
                <button data-collapse-toggle="navbar-sticky" type="button" class="text-white inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <i class="fa fa-bars text-2xl"></i>
                </button>
            </div>
            <div class="ms-auto items-center justify-between hidden w-full lg:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 text-xl font-medium border  rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <Link href="/our-story" class="block py-2 px-3 rounded md:bg-transparent md:p-0" aria-current="page" :class="(scrollPosition > 100)? 'text-black' : 'text-white'"> Our Story</Link>
                    </li>
                    <li>
                        <Link href="/faqs" class="block py-2 px-3 rounded md:p-0 " :class="scrollPosition > 100 ? 'text-gray-800' : 'text-gray-300' ">FAQs</Link>
                    </li>
                    <li>
                        <a href="/imgs/menu.pdf" target="_blank" class="block py-2 px-3 rounded md:p-0 " :class="scrollPosition > 100 ? 'text-gray-800' : 'text-gray-300' ">Explore Menus</a>
                    </li>
                    <li>
                        <Link href="/contact" class="block py-2 px-3 rounded md:p-0 " :class="scrollPosition > 100 ? 'text-gray-800' : 'text-gray-300' ">Contact</Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <slot/>

    <!-- Lets get started -->
    <section class="bg-[#D69C46] text-white text-center flex flex-col items-center gap-10 py-32 px-20">
        <h1 class="text-4xl md:text-6xl font-semibold">Let's get Started.</h1>
        <WhiteBtn class="mx-auto mt-5" text="Contact Us" redirectTo="/contact"/>
    </section>

    <!-- Footer -->
    <footer class="grid md:grid-cols-3 text-center md:text-left gap-10 py-24 px-20">
        <div class="flex flex-col gap-6">
            <h1 class="text-xl font-semibold">Stay in touch</h1>
            <p>hello@rhodescoffeeco.com</p>
            <p>(315) 430-5996</p>
            <p>4759 Salina St, Pulaski, NY 13142</p>
        </div>
        <div class="flex flex-col gap-7">
            <h1 class="text-xl font-semibold">Questions?</h1>
            <a href="/">Contact Us</a>
            <a href="https://www.instagram.com/rhodescoffeeco/"> <i class="fa-brands fa-instagram text-3xl"></i> </a>
        </div>
        <div class="">
            <ul class="flex flex-col gap-5">
                <li class="font-semibold text-xl">Menu</li>
                <li><Link href="/our-story" class="underline" >Our Story</Link></li>
                <li><Link href="" class="underline">Services</Link></li>
                <li><Link href="" class="underline">Gallery</Link></li>
            </ul>
        </div>
    </footer>
</template>

<script setup>
import WhiteBtn from '../Components/WhiteBtn.vue';
import { onMounted, ref } from "vue";
import { Link } from "@inertiajs/vue3";

const scrollPosition = ref(null);

const updateScroll = () => {
    scrollPosition.value = window.scrollY;
}

onMounted(() => {
    window.addEventListener('scroll', updateScroll);
})
</script>