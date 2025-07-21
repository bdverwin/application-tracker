
<script setup>
defineProps({
    items : {}
})

const getStatus = (status) => {
    switch(status){
        case 1:
            return 'application-sent';
        case 2:
            return 'rejected';
        case 3:
            return 'in-progress';
    }
}

</script>
    
<template>
    <div
        :class="['overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800 mt-2', getStatus(item.status)]"
        v-for="item in items" :key="item.id"
    >
        <div class="p-6 text-gray-900 dark:text-gray-100">
            {{ item.comp_name }}
        </div>
    </div>
</template>


<style>

.application-sent{
    border:2px solid rgb(40, 54, 114);
}

.rejected{
    border:2px solid rgb(102, 22, 22);
}

</style>