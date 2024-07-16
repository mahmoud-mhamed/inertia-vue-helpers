<template>
    <button class="bg-primary-600 border border-primary-600 disabled:opacity-80 disabled:cursor-progress text-white py-2 px-8
     rounded hover:bg-primary-500 transition-all duration-300 text-base font-bold" as="button" type="submit" :disabled="progressing">
        <el-loading-dots v-if="progressing"/>
        <span v-else v-text="text" />
        <slot v-else/>
    </button>
</template>

<script setup>
import ElLoadingDots from "../ElLoadingDots.vue";
defineProps({
    progressing: {
        type: Boolean,
        default: false
    },
    text: String
})
</script>

<style scoped>

</style>
