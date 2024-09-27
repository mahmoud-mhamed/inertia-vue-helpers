<template>
    <aside>
        <Label class="flex cursor-pointer items-center">
            <span>
                <Checkbox :disabled="form.processing" v-if="form && name" v-model="form[name]" :value="value" :binary="binary" :class="{'p-invalid':hasError()}"/>
            </span>
            <span class="ms-2 inline-block pt-1.5 select-none">
                 {{ label ?? $t('column.' + name) }}
             </span>
        </Label>
    </aside>
</template>

<script setup>

import Checkbox from 'primevue/checkbox';

const props = defineProps({
    label: String,
    name: {
        type: String,
        required: true,
    },
    form: {
        type: Object,
        required: true,
    },
    binary: {
        type: Boolean,
        default: true,
    },
    value: {
        required: true,
    },
})

const hasError = () => props.form && (props.form['errors'] ?? false) ? props.form['errors'][props.name] : false;
</script>

<style scoped>

</style>
