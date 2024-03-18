<template>
    <nav class="fixed w-full z-20 top-0 start-0 transition-all duration-200" :class="scrollPosition > 100 ? 'bg-[#f0dde0e5]' : ''">
        <div class="flex flex-wrap items-center mx-5 md:ml-12 md:mr-20 py-4">
            <Link href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <!-- <span class="self-center text-xl md:text-3xl font-semibold whitespace-nowrap" :class="scrollPosition > 100 ? 'text-black' : 'text-white'">Rhodescoffeeco</span> -->
                <img v-if="scrollPosition > 100" src="../Imgs/logo.png" class="h-20 w-48" alt="logo" />
                <img v-else src="../Imgs/white_logo.png" class="h-20 w-48" alt="logo" />
            </Link>
            <div class="flex ms-auto md:order-2 space-x-3 md:space-x-0 gap-2 md:gap-8 items-center rtl:space-x-reverse">
                <a target="_blank" href="https://www.instagram.com/rhodescoffeeco/"> <i class="fa-brands fa-instagram text-4xl" :class="scrollPosition > 100 ? 'text-black' : 'text-white'"></i> </a>
                <Link href="/contact" class="uppercase hidden md:flex py-3 px-6 border-2 bg-[#f0dde0] hover:bg-[#ddc9cc] text-lg" :class="scrollPosition > 100 ? 'border-gray-800' : ''">
                    Get Started
                </Link>
                <button type="button" @click.prevent="mobileMenuToggle" class="text-white items-center p-2 w-10 h-10 justify-center text-sm rounded-lg" :class="mobileMenuVisible ? 'inline-flex ' : 'md:hidden'">
                    <i class="fa fa-bars text-2xl"></i>
                </button>

                <ul v-if="mobileMenuVisible"  class="fixed w-full right-0 top-24 flex flex-col border-2 bg-[#f0dde0] z-10">
                    <li class=" border-t-2 border-gray-300 px-5 py-3"><Link href="/our-story" >Our Story</Link></li>
                    <li class=" border-t-2 border-gray-300 px-5 py-3"><Link href="/faqs" >FAQs</Link></li>
                    <li class=" border-t-2 border-gray-300 px-5 py-3"><Link href="/imgs/menu.pdf" >Explore Menu</Link></li>
                    <li class=" border-t-2 border-gray-300 px-5 py-3"><Link href="/blogs" >Blogs</Link></li>
                    <li class=" border-t-2 border-gray-300 px-5 py-3"><Link href="/contact" >Contact</Link></li>
                </ul>
            </div>
            <div class="ms-auto text-white items-center justify-between hidden w-full lg:flex md:w-auto md:order-1">
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
                        <Link href="/blogs" class="block py-2 px-3 rounded md:p-0 " :class="scrollPosition > 100 ? 'text-gray-800' : 'text-gray-300' ">Blogs</Link>
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
    <section class="bg-[#f0dde0] text-white text-center flex flex-col items-center gap-10 py-32 px-20">
        <h1 class="text-4xl md:text-6xl font-semibold text-gray-800">Let's get Started.</h1>
        <WhiteBtnVue class="mx-auto mt-5" text="Contact Us" redirectTo="/contact"/>
    </section>

    <!-- Footer -->
    <footer class="grid md:grid-cols-3 text-center md:text-left gap-10 py-24 px-20">
        <div class="flex flex-col gap-6">
            <h1 class="text-xl font-semibold">Stay in touch</h1>
            <img src="../Imgs/sunlogo.png" alt="sun-logo" class="h-20 w-44" />
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
                <li><Link href="/faqs" class="underline">FAQ</Link></li>
                <li><a href="/imgs/menu.pdf" target="_blank" class="underline">Explore Menu</a></li>
                <li><Link href="/contact" class="underline">Contact</Link></li>
            </ul>
        </div>
    </footer>
    
    <div class="md:col-span-3 text-center py-3 text-sm bg-[#f0dde0]">
        <p> <i class="far fa-copyright"></i> 2024 Rhodescoffeeco. All rights reserved.</p>
    </div>
</template>

<script setup>
import { onMounted, ref } from "vue";
import { Link } from "@inertiajs/vue3";
import WhiteBtnVue from '../Components/WhiteBtn.vue';

let mobileMenuVisible = ref(false);
const mobileMenuToggle = () => {
    mobileMenuVisible.value = !mobileMenuVisible.value;
}

const scrollPosition = ref(null);

const updateScroll = () => {
    scrollPosition.value = window.scrollY;
}

onMounted(() => {
    window.addEventListener('scroll', updateScroll);
})
</script>