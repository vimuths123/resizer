<template>
  <div class="max-w-2xl mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Image Upload</h1>
    <form @submit.prevent="submit" class="space-y-6">
      <div>
        <label for="image" class="block text-sm font-medium text-gray-700">Select Image:</label>
        <input 
          id="image" 
          type="file"
          @input="form.image = $event.target.files[0]"
          accept="image/*"
          class="mt-1 block w-full text-sm text-gray-500
            file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-indigo-50 file:text-indigo-700
            hover:file:bg-indigo-100"
        >
        <div v-if="form.errors.image" class="text-red-600 text-sm mt-1">{{ form.errors.image }}</div>
      </div>
      
      <div>
        <button 
          type="submit" 
          :disabled="form.processing"
          class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 disabled:opacity-50"
        >
          <span v-if="form.processing">Uploading...</span>
          <span v-else>Upload Image</span>
        </button>
      </div>
    </form>
  </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  image: null
})

function submit() {
  form.post(route('resier.submit'), {
    preserveScroll: true,
    forceFormData: true,
    onSuccess: () => form.reset('image')
  })
}
</script>