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
        <section class="grid md:grid-cols-2 gap-20 px-5 md:px-20 py-12 md:py-32 transition-all animate-fade">

            <div>
                <h1 class="text-3xl md:text-5xl font-semibold">Who Am I</h1>
                <h4 class="mt-24 text-xl md:text-2xl">Hi there! I’m Tricia - a mama, a veteran, and the proud owner of Rhodes Coffee Company. </h4>
            </div>
            <div>
                <img src="../../Imgs/pics/picture_of_me.jpg" alt="picture of me" class="h-96 me-auto"/>
            </div>

            <div>
                <img src="../../Imgs/pics/Trailer.jpg" alt="picture of trailer"/>
            </div>

            <div>
                <h1 class="text-3xl md:text-5xl font-semibold">Rhodes Coffee Co:</h1>
                <h4 class="mt-10 text-xl">
                    Established in 2023, Rhodes Coffee Co. is a mobile coffee bar and café based in Pulaski, New York, specializing in organic, fair-trade coffee. The inspiration for this venture stemmed from a fusion of personal experiences and practicality. As a former nomad embracing the #vanlife lifestyle and a touring cyclist, I found myself captivated by the cozy cafes, vibrant coffee scenes, and rich coffee culture encountered throughout my travels across the country. 
                    Recognizing a need within our community, I saw an opportunity to provide a much-needed service: a proper espresso bar featuring a diverse array of offerings such as acai bowls, smoothies, overnight oats, nitro and cold brew, matcha, chai tea, and much more. Our carefully curated menu is free of artificial dyes and high fructose corn syrup, with a predominant focus on organic ingredients.
                    Our semi-permanent location is at the intersection of Route 11 & 13 in Pulaski from May to November, open Thursday through Sunday.
                </h4>
            </div>

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