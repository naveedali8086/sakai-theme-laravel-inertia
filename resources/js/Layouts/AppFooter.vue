<script setup>
import { useLayout } from '@/Layouts/composables/layout.js';
import { computed } from 'vue';
import BaseService from "@/service/BaseService.js";

const { layoutConfig } = useLayout();

const baseUrl = (new BaseService()).getBaseUrl()

const logoUrl = computed(() => {
    return `${baseUrl}/layout/images/${layoutConfig.darkTheme.value ? 'logo-white' : 'logo-dark'}.svg`;
});
</script>

<template>
    <div class="layout-footer">
        <img :src="logoUrl" alt="Logo" height="20" class="mr-2" />
        by
        <span class="font-medium ml-2">PrimeVue</span>
    </div>
</template>
<style lang="scss" scoped></style>
