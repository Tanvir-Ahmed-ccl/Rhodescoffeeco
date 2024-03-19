<template>
    <AdminLayout>
        <section class="min-h-screen px-5 md:px-20 flex flex-col justify-end" 
            style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('imgs/started_img_n5.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;"
        >
            <div class="py-28 text-center md:text-left text-[#c8d6ca] transition-all animate-fade">
                <h1 class="text-5xl md:text-6xl font-semibold">Rhodes Coffee Co.: Brewed from Life's Adventures.</h1>
                <h5 class="my-10 text-2xl">Coffee Truck for  your catering</h5>
                <YellowBtn text="Book Now" redirectTo="/contact"/>
            </div>
        </section>

        <!-- Service -->
        <section class="bg-[#f0dde0] flex flex-col gap-10 py-32 px-5 md:px-20">
            <div class="text-center transition-all animate-fade">
                <h1 class="text-4xl md:text-6xl">Catering for all ocasions</h1>
                <div class="border border-y-2 rounded-lg border-yellow-600 w-32 my-5 mx-auto"></div>
                <!-- <h5 class="mt-12s text-2xl">But not limited to</h5> -->
            </div>
            <div class="grid md:grid-cols-2 gap-10 transition-all animate-fade">
                <div>
                    <img src="../../Imgs/history2.jpg" alt="service 1" class="w-auto" />
                </div>
                <div class="text-center md:text-left basis-3/6">
                    <h6 class="text-lg md:text-2xl mb-4">At Rhodes Coffee Co., we're more than just a coffee truck - we're purveyors of exceptional experiences. Our services extend beyond serving delicious, thoughtfully sourced organic coffee and artisanal products. We specialize in crafting moments that elevate your event or gathering.</h6>
                    <h6 class="text-lg md:text-2xl mb-4">Additionally, we offer catering services tailored to your needs. Impress your guests with our carefully curated menu featuring a selection of our finest brews and delectable treats. Let Rhodes Coffee Co. elevate your next event with our passion for quality, authenticity, and sustainability.</h6>
                    <h6 class="text-lg md:text-2xl mb-16">From intimate gatherings to bustling festivals, our mobile coffee truck brings the perfect blend of flavor and ambiance to any occasion. Whether you're seeking a caffeine boost or a cozy atmosphere, our team is dedicated to delivering top-notch service and hospitality.</h6>
                    <YellowBtn class="mx-auto" text="Contact Us" redirectTo="/contact"/>
                </div>
            </div>
        </section>

        <!-- Mission -->
        <section style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('imgs/started_img_n3.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="text-center flex flex-col py-32 px-5 md:px-20" >
                <div class="flex gap-7 mx-auto text-[#c8d6ca]">
                    <i class="fa fa-quote-left text-3xl"></i>  
                    <h1 class="text-4xl md:text-6xl "> Our Mission </h1>
                    <i class="fa fa-quote-right text-3xl"></i>
                </div>
                <p class="text-gray-200 px-5 md:px-24 lg:px-48 mt-14 text-lg md:text-2xl">
                    Inspired by the road [Rhode] - the unexpected places life takes us, the people we meet, and ultimately - the place we call home - Rhodes Coffee Co. is an homage to our roots. Rooted in the belief that life is best lived authentically and organically - and as close to nature as possible. Rhodes Coffee Co. strives to be a catalyst for positive change with thoughtfully sourced organic coffee & ingredients + small batch, artisanal products at an affordable price
                </p>
                <p class="text-white text-2xl mt-10">Tricia Hax - CEO - Owner</p>
            </div>
        </section>

        <!-- Services -->
        <section class="bg-[#C8D5CA]">
            <div class="text-center py-16 px-5 md:px-52" >
                <div class="flex flex-col gap-7 mx-auto">
                    <h1 class="text-4xl md:text-6xl "> Our Services </h1>
                    <p class="text-2xl">With our newest addition, we're thrilled to provide coffee cart catering using a stylish, highly mobile drink cart that radiates aesthetic charm and adds a touch of sophistication to any occasion. Ideal for private events, corporate events, catering, etc - just visit our contact page, provide event specifics, and request a quote.</p>
                </div>
                <div class="flex items-center justify-center gap-36 mt-28">
                    <div class="flex flex-col gap-5">
                        <img src="../../Imgs/choose_icon1.png" class="w-28" />
                        <p class="text-lg font-semibold">Organic</p>
                    </div>
                    <div class="flex flex-col gap-5">
                        <img src="../../Imgs/choose_icon2.png" class="w-28" />
                        <p class="text-lg font-semibold">Cart</p>
                    </div>
                    <div class="flex flex-col gap-5">
                        <img src="../../Imgs/contact_icon1.png" class="w-28" />
                        <p class="text-lg font-semibold">Location</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <TestimonialVue/>

        <!-- FAQ -->
        <section class=" flex flex-col items-center text-center gap-10 py-32 px-20"
            style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('imgs/started_img_n3.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;"
        >
            <h1 class="text-4xl md:text-6xl text-[#c8d6ca]">Still have questions?</h1>
            <YellowBtn class="mx-auto mt-5" text="See our faq" redirectTo="/faqs"/>
        </section>

        <!-- Gallery -->
        <section class="grid grid-cols-2 md:grid-cols-4 gap-4 py-20 px-5 md:px-20">
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal1.1.jpeg" alt="gallery 1">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs//grid_gal1.2.jpeg" alt="gallery 2">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs//grid_gal1.jpeg" alt="gallery 3">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal10.jpeg" alt="gallery 4">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal11.jpeg" alt="gallery 5">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal12.jpeg" alt="g 6">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal13.jpeg" alt="g7">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal14.jpeg" alt="g8">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal16.jpeg" alt="g9">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal17.jpeg" alt="g10">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal18.jpeg" alt="g11">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal19.jpeg" alt="g12">
                </div>
            </div>
        </section>

        <fwb-modal v-if="isShowModal" @close="closeModal" size="2xl">
            <template #body>
                <form @submit.prevent="form.post('/subscribe', {onSuccess: () => closeModal('subscriber'),})">
                    <section class=" text-gray-900 flex flex-col text-center items-center gap-10 py-20 px-5 md:px-16">
                        <img src="../../Imgs/logo.png" alt="logo" class="h-24 w-52" />
                        <p class="text-lg">Subscribe to receive a coupon code form 10% off your first order! for RhodesCoffeeCo Merchandise </p>
                        <div class="flex flex-col md:flex-row gap-5">
                            <input type="text" v-model="form.phone" class="p-5 border-2 border-[#f0dde0]" placeholder="Enter your phone number">
                            <button :disabled="form.processing" class=" float-right uppercase items-center hidden md:flex py-3 px-6 bg-[#ddc9cc] hover:bg-[#dbbdc2] text-black text-lg">
                                Subscribe
                            </button>
                        </div>
                        <p v-if="form.errors.phone" class="mt-2 text-sm text-red-600 dark:text-red-500">{{ form.errors.phone }}</p>
                        <fwb-alert closable icon border type="success" v-if="$page.props.flash.message">{{ $page.props.flash.message }}</fwb-alert>
                        <fwb-alert closable icon border type="danger" v-if="$page.props.flash.exception">{{ $page.props.flash.exception }}</fwb-alert>
                    </section>
                </form>
            </template>
        </fwb-modal>
    </AdminLayout>
</template>

<script setup>
import YellowBtn from '../../Components/YellowBtn.vue';
import TestimonialVue from '../../Components/Testimonial.vue';
import AdminLayout from '../../Layouts/Frontend.vue';
import { ref } from 'vue'
import { FwbModal,FwbAlert } from 'flowbite-vue'
import WhiteBtnVue from '../../Components/WhiteBtn.vue';
import { useForm } from '@inertiajs/vue3'

const isShowModal = ref(false);

const form = useForm({
  phone: null,
})

function closeModal (type = 'cancel') {
  isShowModal.value = false;
  localStorage.setItem('subscribe', type);
}

function showModal () {
    const modal = localStorage.getItem('subscribe');
    if(modal == null){
        isShowModal.value = true
    }
}
showModal();
</script>