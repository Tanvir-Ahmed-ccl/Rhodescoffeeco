<template>
    <button class="uppercase p-3 md:py-5 md:px-8 text-[#D69C46] hover:text-[#d69c46bb] bg-white hover:text-black text-lg md:text-xl ">
        {{text}}
    </button>
</template>

<script setup>
defineProps(['text'])
</script>