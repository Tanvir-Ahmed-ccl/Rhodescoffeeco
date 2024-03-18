<template>
    <Link :href="redirectTo" class="uppercase p-3 md:py-5 md:px-8 bg-[#f0dde0] hover:bg-[#ddc9cc] text-black text-lg md:text-xl">
        {{ text }}
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps(['text', 'redirectTo'])
</script>