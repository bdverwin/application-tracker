<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Item from '@/Components/Item.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    applications : Array
})

console.log(props.applications);
</script>

<template>
    <Head title="Applications" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Applications
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <Item
                    :items = "applications"
                />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
