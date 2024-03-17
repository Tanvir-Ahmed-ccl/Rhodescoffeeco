<template>
    <Link href="/contact" class="uppercase p-3 md:py-5 md:px-8 bg-[#D69C46] hover:bg-[#d69c46bb] text-white hover:text-black text-lg md:text-xl">
        {{text}}
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps(['text'])
</script>