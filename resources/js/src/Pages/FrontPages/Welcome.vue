<template>
    <!-- <fwb-carousel :pictures="pictures" slide :slide-interval="2000" /> -->
    <div class="min-h-screen bg-gray-200 flex items-center justify-start px-20">
        <div class="">
            <h1 class="text-6xl font-semibold">Craft Coffee & Dessert Carts Catering</h1>
            <h5 class="mt-10 text-2xl">Mobile carts for your event</h5>
            <button class="py-5 px-8 mt-5 bg-[#D69C46] text-white text-2xl font-thin">Book Now</button>
        </div>
    </div>

    <!-- Service -->
    <div class="bg-[#E7D1B5] flex flex-col gap-10 py-10 px-20">
        <div class="text-center">
            <h1 class="text-6xl font-thin">Our Services</h1>
            <h5 class="mt-12s text-2xl">But not limited to</h5>
        </div>
        <div class="grid grid-cols-3 gap-20">
            <div class="flex flex-col items-center text-center gap-5">
                <img src="../../Imgs/grid_gal1.1.jpeg" alt="service 1" />
                <h1 class="text-4xl font-thin">Cotton Candy Cart</h1>
                <h6>Brighten up your party with delicious & hard to resist cotton candy made fresh at your party!</h6>
            </div>

            <div class="flex flex-col items-center text-center gap-5">
                <img src="../../Imgs/grid_gal10.jpeg" alt="service 1" />
                <h1 class="text-4xl font-thin">Drink Cart</h1>
                <h6>We specialize in creating custom signature mocktails with top quality ingredients, making your event unforgettable and fun!</h6>
            </div>

            <div class="flex flex-col items-center text-center gap-5">
                <img src="../../Imgs/grid_gal11.jpeg" alt="service 1" />
                <h1 class="text-4xl font-thin">Churro Cart</h1>
                <h6>Our churros are baked hot and fresh during your event, dipped and coated in sugar and cinnamon leaving a light crunchy outside and soft chewy inside. </h6>
            </div>
        </div>
    </div>
</template>

<script setup>
import { FwbCarousel } from 'flowbite-vue'
const pictures = [
    {src: '/imgs/started_img_n4.jpeg', alt: 'img 1'},
    {src: '/imgs/started_img_n1.jpeg', alt: 'img 2'},
    {src: '/imgs/started_img_n2.jpeg', alt: 'img 3'},
]
</script>