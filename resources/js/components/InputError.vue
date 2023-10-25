<script setup>
const props = defineProps({
  error: String
})
</script>

<template>
  <span
    v-if="error"
    class="text-sm text-red-600">
    {{ error }}
  </span>
</template>
