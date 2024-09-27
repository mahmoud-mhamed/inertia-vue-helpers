<template>
    <aside>
        <p>
            {{ label ?? $t('column.' + name) }}
            <ElTextRequired v-if="required"/>
        </p>
        <InputOtp dir="ltr" class="flex !gap-3" v-model="form[name]" :disabled="processing || form.processing"
                  :class="{'p-invalid':hasError(),'active_otp':form[name]}"/>

        <ElTextError v-if="hasError()" :value="customError??form['errors'][name]"/>
    </aside>
</template>

<script setup>
import ElTextRequired from "@/Components/Text/ElTextRequired.vue";
import ElTextError from "@/Components/Text/ElTextError.vue";
import InputOtp from 'primevue/inputotp';

const props = defineProps({
    label: String,
    name: String,
    form: Object,
    customError: {
        type: Object,
        default: null,
    },
    processing: {
        type: Boolean,
        default: false
    },
    required: {
        type: Boolean,
        default: false
    },
})

const hasError = () => props.form && (props.form['errors'] ?? false) ? props.form['errors'][props.name] : !!props.customError;
</script>

<style>
.p-inputotp{
    @apply justify-between;
}
.p-inputotp input{
    @apply !w-[23%];
}
.p-inputotp input[value]{
    @apply text-[#6b7280] bg-[#f1f1f1];
}
</style>
