<template>
    <!-- Testimonial -->
    <section class="flex flex-col px-5 md:px-20 py-32">
        <div class="text-center mb-10">
            <h1 class="text-4xl md:text-6xl">Testimonial</h1>
            <div class="border border-y-2 rounded-lg border-yellow-600 w-32 mt-5 mx-auto"></div>
        </div>

        <div>
            <vueper-slides
                class="no-shadow"
                :visible-slides="4"
                :slide-multiple="false"
                autoplay
                :gap="3"
                :arrows="false"
                :slide-ratio="1 / 4"
                :dragging-distance="200"
                :breakpoints="{ 1500: { visibleSlides: 3, slideMultiple: false, slideRatio: 1 / 3 }, 1100: { visibleSlides: 2, slideMultiple: false, slideRatio: 1 / 2 }, 600: { visibleSlides: 1, slideMultiple: 1, slideRatio: 1, bulletsOutside: true } }">
                <vueper-slide v-for="(item, key) in coffeeReviews" :key="key">
                    <template #content>
                        <div class="border p-5 shadow-lg rounded">
                            <div class="border-b mb-5">
                                <div class="flex items-center gap-2">
                                    <img v-if="item.image" :src="item.image" :alt="'avatar of ' + item.name" class="h-16 w-16 rounded-lg">
                                    <div>
                                        <p>{{ item.name }}</p>
                                        <p class="text-xs">{{ item.type }}</p>
                                    </div>
                                </div>  
                            </div>
                            <div class="h-52 overflow-y-auto">
                                <p class="text-md text-gray-700"> {{ item.review }} </p>
                            </div>
                        </div>
                    </template>
                </vueper-slide>
            </vueper-slides>
        </div>
    </section>
    <!-- //. Testimonial -->
</template>

<script setup>
import { VueperSlides, VueperSlide } from 'vueperslides';
import 'vueperslides/dist/vueperslides.css';
import coffeeReviews from '../Data/coffeereviews';
</script>