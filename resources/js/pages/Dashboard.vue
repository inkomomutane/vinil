<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head} from '@inertiajs/vue3';
import { t} from '@/lib/utils';

const props = defineProps({
    user: Object,
});

const breadcrumbs = [
    {
        title: t('Dashboard'),
        href: '/dashboard',
    },
];



</script>

<template>
    <Head :title="$t('Dashboard')" />
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="min-h-screen px-2 pt-4 md:px-4">
            <div class="mx-auto grid max-w-6xl grid-cols-1 gap-5 md:grid-cols-12">
            </div>
        </div>
    </AppLayout>

</template>
