<template>
    <div class="bg-white p-4 rounded-md shadow relative overflow-hidden">
        <svg-icon :path="mdiContactlessPaymentCircleOutline"
                  type="mdi" size="190"
                  class="absolute -top-1/3 -left-12 text-gray-50 z-0"/>
        <div class="flex justify-between relative">
            <div class="flex flex-col">
                <svg-icon :path="icon" type="mdi" size="48" class="text-primary-700"/>
                <span v-text="title"/>
            </div>
            <span class="text-5xl font-bold p-4 text-secondary-900" v-text="value"/>
        </div>
    </div>
</template>

<script setup>
import SvgIcon from "vue3-icon";
import { mdiContactlessPaymentCircleOutline } from '@mdi/js';
defineProps({
    icon: Object,
    title: String,
    value: Number
})
</script>

<style scoped>

</style>
