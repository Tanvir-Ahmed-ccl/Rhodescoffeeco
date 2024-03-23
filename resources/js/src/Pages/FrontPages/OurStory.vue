<template>
    <AdminLayout>
        <!-- Page Title -->
        <section class="px-5 md:px-20 flex flex-col justify-end"
            style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('imgs/started_img_n7.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="pt-36 pb-20 md:py-44 text-center text-[#c8d6ca] transition-all animate-fade">
                <h1 class="text-4xl md:text-7xl font-semibold italic">Our Story</h1>
            </div>
        </section>

        <!-- Page Content -->
        <section class="px-5 md:px-20 py-12 md:py-32 transition-all animate-fade">

            <div class="flex flex-col lg:flex-row gap-10">
                <div>
                    <h1 class="text-3xl text-center lg:text-left lg:text-5xl font-semibold">Who Am I:</h1>
                    <h4 class="mt-5 lg:text-xl lg:leading-10">
                        Welcome! I'm Tricia, a dedicated mom, a proud veteran, and the passionate founder of Rhodes
                        Coffee Company. My journey has been shaped by my roles as a caregiver and a service member,
                        teaching me the importance of community, discipline, and love. These values are the foundation
                        of Rhodes Coffee Company, where we're more than just a coffee shop. We're a community gathering
                        spot where each cup of coffee connects people and stories. Our mission is to offer not just
                        exceptional coffee but a welcoming space where everyone feels at home. Step into Rhodes Coffee
                        Company and discover not just a drink, but an experience. Welcome to our family, where every sip
                        comes with warmth and pride.
                    </h4>
                </div>
                <div>
                    <img src="../../Imgs/pics/picture_of_me.jpg" alt="picture of me" class="me-auto" />
                </div>
            </div>


            <div class="mt-20 grid lg:grid-cols-3 items-center gap-10">
                <div class="lg:col-span-1">
                    <img src="../../Imgs/pics/Trailer.jpg" alt="picture of trailer" class="mx-auto" />
                </div>

                <div class="lg:col-span-2">
                    <h1 class="text-3xl md:text-5xl font-semibold">Rhodes Coffee Co:</h1>
                    <h4 class="mt-3">
                        Established in 2023, Rhodes Coffee Co. is a mobile coffee bar and café based in Pulaski, New
                        York,
                        specializing in organic, fair-trade coffee. The inspiration for this venture stemmed from a
                        fusion
                        of personal experiences and practicality. As a former nomad embracing the #vanlife lifestyle and
                        a
                        touring cyclist, I found myself captivated by the cozy cafes, vibrant coffee scenes, and rich
                        coffee
                        culture encountered throughout my travels across the country. Recognizing a need within our
                        community, I saw an opportunity to provide a much-needed service: a proper espresso bar
                        featuring a
                        diverse array of offerings such as acai bowls, smoothies, overnight oats, nitro and cold brew,
                        matcha, chai tea, and much more. Our carefully curated menu is free of artificial dyes and high
                        fructose corn syrup, with a predominant focus on organic ingredients.
                        With ample parking and a convenient location, it's easy to make Rhodes Coffee Co your go-to spot
                        for
                        that perfect caffeine fix or a healthy, satisfying snack. Whether you're a local or just passing
                        through, don't miss this gem!

                        Our semi-permanent location is at the intersection of Route 11 & 13 in Pulaski from May to
                        November,
                        open Thursday through Sunday.
                    </h4>
                </div>
            </div>

            <div
                class="text-gray-800 text-lg lg:text-xl lg:leading-8 flex flex-col lg:flex-row mt-20 items-center gap-20">
                <div class="flex flex-col">
                    <h1 class="text-3xl lg:text-5xl font-semibold">Rhodes Coffee Co. Cart</h1>
                    <h5 class="mt-10 text-lg lg:text-xl lg:leading-8 leading-8">
                        With our most recent addition, we're delighted to offer coffee cart catering using a chic,
                        highly
                        maneuverable beverage cart that brings a touch of refinement to any event. Tailored for private
                        gatherings, corporate functions, and catering needs - just head to our contact page, provide
                        event
                        particulars, and request pricing details.
                    </h5>
                </div>

                <div>
                    <img src="../../Imgs/pics/Cold Brew + Sweet Cream.jpg" class="mx-auto w-[70rem]" />
                </div>
            </div>

        </section>
    </AdminLayout>
</template>


<script setup>
import AdminLayout from '../../Layouts/Frontend.vue';
</script>