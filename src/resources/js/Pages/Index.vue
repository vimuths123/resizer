<template>
  <div class="max-w-2xl mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Contact Form</h1>
    <form @submit.prevent="submit" class="space-y-6">
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
        <input 
          id="name" 
          v-model="form.name" 
          type="text"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        >
        <div v-if="form.errors.name" class="text-red-600 text-sm mt-1">{{ form.errors.name }}</div>
      </div>
      
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
        <input 
          id="email" 
          v-model="form.email" 
          type="email"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        >
        <div v-if="form.errors.email" class="text-red-600 text-sm mt-1">{{ form.errors.email }}</div>
      </div>
      
      <div>
        <label for="message" class="block text-sm font-medium text-gray-700">Message:</label>
        <textarea 
          id="message" 
          v-model="form.message"
          rows="4"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        ></textarea>
        <div v-if="form.errors.message" class="text-red-600 text-sm mt-1">{{ form.errors.message }}</div>
      </div>
      
      <div>
        <button 
          type="submit" 
          :disabled="form.processing"
          class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 disabled:opacity-50"
        >
          <span v-if="form.processing">Processing...</span>
          <span v-else>Submit</span>
        </button>
      </div>
    </form>
  </div>
</template>a

<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  name: '',
  email: '',
  message: ''
})

function submit() {
  form.post(route('resier.submit'), {
    preserveScroll: true,
    onSuccess: () => form.reset('name', 'email', 'message')
  })
}
</script>