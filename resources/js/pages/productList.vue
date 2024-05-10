<template>
  <div class="masonry">
    <div v-if="loading">
      <p>Loading products...</p>
    </div>
    <div v-else-if="productList.length === 0">
      <p>No products found</p>
    </div>

    <div v-else v-for="product in productList" :key="product.id" class="masonry-item">
      <ProductCard :product="product" />
    </div>
  </div>
</template>

<script>
import { computed } from 'vue';
import { useProductStore } from '../store/ProductStore'
import ProductCard from '../components/ProductCard.vue'

export default {
  components: {
    ProductCard,
  },
  setup() {
    const productStore = useProductStore()
    const loading = computed(() => productStore.loading)
    const productList = computed(() => productStore.getProductList)

    return {
      loading,
      productList,
    }
  },
};
</script>

<style scoped>

.masonry {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-auto-flow: dense;
  gap: 10px;
  margin-bottom: 5em;
}

.masonry-item{
  margin: 0;
  display: grid;
  grid-template-rows: 1fr auto;
  border-radius: 5px;
}
</style>
