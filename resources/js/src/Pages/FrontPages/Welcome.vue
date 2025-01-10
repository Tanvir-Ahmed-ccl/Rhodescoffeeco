<template>
    <AdminLayout>
        <section class="min-h-screen px-5 md:px-20 flex flex-col justify-end"
            style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('imgs/started_img_n5.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="py-28 text-center md:text-left text-[#c8d6ca] transition-all animate-fade">
                <h1 class="text-5xl md:text-6xl font-semibold">Coffee Cart Catering for Your Next Event.</h1>
                <h5 class="my-10 text-2xl">Coffee Cart Available for Catering</h5>
                <YellowBtn text="Book Now" redirectTo="/contact" />
            </div>
        </section>

        <!-- Ocasion -->
        <section class="bg-[#f0dde0] flex flex-col gap-10 py-32 px-5 lg:px-20">
            <div class="text-center transition-all animate-fade">
                <h1 class="text-4xl md:text-6xl">Cart Coffee Catering for All Occasions</h1>
                <div class="border border-y-2 rounded-lg border-yellow-600 w-32 my-5 mx-auto"></div>
                <!-- <h5 class="mt-12s text-2xl">But not limited to</h5> -->
            </div>
            <div class="grid lg:grid-cols-2 gap-10 transition-all animate-fade">
                <div>
                    <img src="../../Imgs/grid_gal7_sq.jpeg" alt="coffee cup" class="mx-auto" />
                </div>
                <div class="text-center lg:text-left basis-3/6">
                    <h6 class="text-lg md:text-2xl mb-4">
                        At Rhodes Coffee Co., we're more than just a coffee truck -
                        we're purveyors of exceptional experiences. Our services extend beyond serving delicious,
                        thoughtfully sourced organic coffee and artisanal products. We specialize in crafting moments
                        that elevate your event or gathering.
                    </h6>
                    <h6 class="text-lg md:text-2xl mb-4">
                        With our newest addition, we're thrilled to provide coffee cart catering using a stylish, highly
                        mobile drink cart that radiates aesthetic charm and adds a touch of sophistication to any
                        occasion. Ideal for private events, corporate events, catering, etc - just visit our contact
                        page, provide event specifics, and request a quote.
                    </h6>
                    <p class="my-10" </p>
                        <!-- <h6 class="text-lg md:text-2xl mb-16">From intimate gatherings to bustling festivals, our mobile
                        coffee truck brings the perfect blend of flavor and ambiance to any occasion. Whether you're
                        seeking a caffeine boost or a cozy atmosphere, our team is dedicated to delivering top-notch
                        service and hospitality.</h6> -->
                        <YellowBtn class="mx-auto" text="Contact Us" redirectTo="/contact" />
                </div>
            </div>
        </section>


        <!-- Mission -->
        <section
            style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('imgs/started_img_n3.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="text-center flex flex-col py-32 px-5 lg:px-20">
                <div class="flex gap-7 mx-auto text-[#c8d6ca]">
                    <h1 class="text-4xl md:text-6xl "> Our Mission </h1>
                </div>

                <div class="text-gray-200 px-5 text-center md:px-24 lg:px-48 mt-14 ">
                    <i class="fa fa-quote-left text-5xl"></i>
                    <p class="text-lg">
                        Inspired by the road [Rhode]—the unexpected places life takes us, the people we meet, and ultimately, the place we call home—Rhodes Coffee Co. is an homage to our roots. Rooted in the belief that life is best lived authentically, organically, and close to nature, we proudly offer organic, fair-trade coffee that reflects our commitment to these values
                    </p>
                    <i class="fa fa-quote-right text-5xl"></i>
                    <p class="mb-5 text-lg">Tricia Hax, Owner</p>
                </div>
            </div>
        </section>

        <!-- Commitment -->
        <section class="bg-[#C8D5CA]">
            <div class="text-center py-16 px-5 md:px-20 lg:px-40 xl:px-52">
                <div class="flex flex-col gap-7 mx-auto">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold"> What to expect </h1>
                    <!-- <p class="text-[1rem]">
                        At Rhodes Coffee Co, we are more than just purveyors of delicious coffee and
                        delectable treats; we are stewards of ethical consumption and guardians of community well-being.
                        With a firm commitment to sustainability, social responsibility, and environmental stewardship,
                        we strive to serve not just exceptional food and beverages, but also uphold a moral and ethical
                        obligation to our community.
                    </p>
                    <p class="text-[1rem]">
                        Every cup of coffee, every pastry, and every ingredient we source is a reflection of our values.
                        We believe in the power of organic farming practices to preserve the earth's delicate ecosystems
                        and protect the health of both farmers and consumers alike. That's why we partner with certified
                        organic suppliers who share our dedication to sustainable agriculture and ethical labor
                        practices.
                    </p>
                    <p class="text-[1rem]">
                        When you choose to support our café, you're not just enjoying a cup of coffee or a pastry –
                        you're joining us in our mission to make a positive impact on the world around us. Together, we
                        can create a brighter future for generations to come, one mindful sip and one thoughtful bite at
                        a time. Thank you for your support in our journey toward a more ethical and sustainable future.
                    </p> -->

                    <p class="text-xl">
                        What to expect with a full mobile espresso bar for your event or gathering
                    </p>

                    <ul class="text-left list-disc mx-auto">
                        <li>Fresh, organic, fair-trade coffee</li>
                        <li>Full Espresso Bar Menu: Espresso, Latte, Cortado, Cappuccino</li>
                        <li>Alternative Milk Options and Organic Syrups</li>
                        <li>Unlimited Drinks</li>
                        <li>Alternative Drinks: Hot Chocolate, Matcha, Tea, Chai</li>
                        <li>Custom Branding Packages</li>
                    </ul>

                    <div class="mt-6">
                        <YellowBtn text="Request a Quote Today" redirectTo="/contact" />
                    </div>
                </div>
                <!-- <div class="grid grid-cols-2 lg:grid-cols-4 items-end justify-center gap-y-12 lg:gap-36 mt-10 md:mt-28">
                    <div class="flex flex-col gap-5">
                        <p class="text-7xl md:text-8xl text-[#EA9Fb3]"> <i class="fa-brands fa-pagelines"></i> </p>
                        <p class="text-lg font-semibold">Organic</p>
                    </div>
                    <div class="flex flex-col gap-5">
                        <p class="text-7xl md:text-8xl text-[#EA9Fb3] font-light"> <i
                                class="fa fa-map-location-dot"></i> </p>
                        <p class="text-lg font-semibold">Local</p>
                    </div>
                    <div class="flex flex-col gap-5">
                        <p class="text-7xl md:text-8xl text-[#EA9Fb3] font-light"> <i class="far fa-handshake"></i> </p>
                        <p class="text-lg font-semibold">Ethical</p>
                    </div>

                    <div class="flex flex-col gap-5">
                        <p class="text-7xl md:text-8xl text-[#EA9Fb3] font-light"> <i class="fa fa-people-group"></i>
                        </p>
                        <p class="text-lg font-semibold">Comunity centered</p>
                    </div>
                </div> -->
            </div>
        </section>


        <!-- Testimonial -->
        <TestimonialVue />

        <!-- FAQ -->
        <section class=" flex flex-col items-center text-center gap-10 py-32 px-20"
            style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('imgs/started_img_n3.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <h1 class="text-4xl md:text-6xl text-[#c8d6ca]">Still have questions?</h1>
            <YellowBtn class="mx-auto mt-5" text="See our faq" redirectTo="/faqs" />
        </section>

        <!-- Gallery -->
        <section class="grid grid-cols-2 md:grid-cols-3 gap-4 py-20 px-5 md:px-20">
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal7.jpeg" alt="gallery 3">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal13.jpeg" alt="gallery 5">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal17.jpeg" alt="g10">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal12.jpeg" alt="g 6">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal16.jpeg" alt="g9">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal6.jpeg" alt="g10">
                </div>
            </div>
            <div class="md:grid gap-4 hidden">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="../../Imgs/grid_gal21.jpeg" alt="g11">
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
                <form @submit.prevent="form.post('/subscribe', { onSuccess: () => closeModal('subscriber'), })">
                    <section class=" text-gray-900 flex flex-col text-center items-center gap-10 py-20 px-5 md:px-16">
                        <img src="../../Imgs/logo.png" alt="logo" class="h-24 w-52" />
                        <p class="text-lg">Subscribe to receive a coupon code form 10% off your first order! for
                            RhodesCoffeeCo Merchandise </p>
                        <div class="flex flex-col md:flex-row gap-5">
                            <input type="text" v-model="form.phone" class="p-5 border-2 border-[#f0dde0]"
                                placeholder="Enter your phone number">
                            <button :disabled="form.processing"
                                class=" float-right uppercase items-center hidden md:flex py-3 px-6 bg-[#d69c46] hover:bg-[#b48032] text-black text-lg">
                                Subscribe
                            </button>
                        </div>
                        <p v-if="form.errors.phone" class="mt-2 text-sm text-red-600 dark:text-red-500">{{
            form.errors.phone }}</p>
                        <fwb-alert closable icon border type="success" v-if="$page.props.flash.message">{{
            $page.props.flash.message }}</fwb-alert>
                        <fwb-alert closable icon border type="danger" v-if="$page.props.flash.exception">{{
                            $page.props.flash.exception }}</fwb-alert>
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
import { FwbModal, FwbAlert } from 'flowbite-vue'
import WhiteBtnVue from '../../Components/WhiteBtn.vue';
import { useForm } from '@inertiajs/vue3'

const isShowModal = ref(false);

const form = useForm({
    phone: null,
})

function closeModal(type = 'cancel') {
    isShowModal.value = false;
    localStorage.setItem('subscribe', type);
}

function showModal() {
    const modal = localStorage.getItem('subscribe');
    if (modal == null) {
        isShowModal.value = true
    }
}
showModal();
</script>