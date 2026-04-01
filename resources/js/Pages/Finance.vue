<template>
    <h2>Welcome to the Finance</h2>
    <ion-list>
        <!-- Use v-for to loop through your data array (e.g., 'items') -->
        <ion-item v-for="item in items" :key="item.id">
          <ion-label>{{ item.name }}</ion-label>
          <!-- You can add buttons, icons, etc. inside ion-item -->
        </ion-item>
      </ion-list>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios';
const items = ref([]);

// Function to fetch data from Laravel API
const fetchItems = async () => {
  try {
    // Replace with your actual Laravel API endpoint
    const response = await axios.get('http://127.0.0.1:8000/financeitems');
    items.value = response.data;
  } catch (error) {
    console.error('Error fetching items:', error);
  }
};

onMounted(() => {
  fetchItems();
});

defineProps({
  title: String
});
</script>