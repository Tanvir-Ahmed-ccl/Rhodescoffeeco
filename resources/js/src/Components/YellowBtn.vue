<template>
    <button class="uppercase p-3 md:py-5 md:px-8 bg-[#D69C46] hover:bg-[#d69c46bb] text-white hover:text-black text-lg md:text-xl font-thin">
        {{text}}
    </button>
</template>

<script setup>
defineProps(['text'])
</script>