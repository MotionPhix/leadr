<script setup>
import { computed } from 'vue';

const props = defineProps({
  errors: {
    type: Object,
    default: () => {},
  },
  modelValue: {
    type: [Array, String],
    default: () => [
      {
        number: '',
        type: '',
      },
    ],
  },
})

const emit = defineEmits(['update:modelValue'])

const phones = computed(() => Array.isArray(props.modelValue) ? props.modelValue : [])

const err = computed(() => props.errors)

const phoneErr = computed(() => {
  const error_bug = {}

  for (const key in err.value) {
    if (key.startsWith('phones'))
      error_bug[key] = err.value[key]
  }

  return error_bug
})

function addPhone() {
  phones.value.push({ number: '', type: '' })
  emitUpdatedPhones()
}

function removePhone(index) {
  phones.value.splice(index, 1)
  emitUpdatedPhones()
}

function emitUpdatedPhones() {
  const updatedPhones = [...phones.value]
  emit('update:modelValue', updatedPhones)
}
</script>

<template>
  <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">
    Contact phones
  </label>

  <div
    v-for="(phone, index) in phones"
    :key="index"
    class="grid w-full grid-cols-2 gap-3 mb-6 sm:gap-6"
  >
    <input
      v-model="phone.number"
      type="text"
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
      placeholder="Enter a number"
    >

    <article class="flex gap-2">
      <select
        v-model="phone.type"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
      >
        <option value="" disabled>
          Pick a type
        </option>

        <option value="mobile">
          Mobile
        </option>

        <option value="home">
          Home
        </option>

        <option value="work">
          Office
        </option>
      </select>

      <button type="button" class="hover:text-rose-500" @click="removePhone(index)">
        <IconTrash />
      </button>
    </article>

    <span v-if="phoneErr.length" class="col-span-2 text-sm font-medium text-red-500">
      {{ phoneErr[`phones.${index}.number`] ?? phoneErr[`phones.${index}.type`] }}
    </span>
  </div>

  <button type="button" class="flex items-center gap-2 hover:bg-gray-200 rounded py-1.5 px-2" @click="addPhone">
    <IconPlus /> <span>Add Phone</span>
  </button>
</template>
