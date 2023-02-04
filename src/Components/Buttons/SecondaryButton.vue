<template>
    <component :is="href?'Link':'button'"
               class="bg-primary-500 inline-block text-secondary-800 border border-secondary-600 disabled:opacity-80
    disabled:cursor-progress text-white inline-block py-2 px-8
     rounded hover:bg-secondary-500 hover:text-white transition-all duration-300 text-base font-bold"
            v-bind="$attrs">
        <span v-if="text" v-text="text"/>
        <slot v-else/>
    </component>
</template>
<script setup>
const props = defineProps({
    text: {
        type:String,
        default:null,
    },
    href: {
        type:String,
        default:null,
    }
})
</script>

<style scoped>

</style>
