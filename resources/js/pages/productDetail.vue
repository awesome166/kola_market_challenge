
<template>
  <div v-if="product">
      <img :src="product.image_url" alt="Camera" class="single-image shadow" />
      <div class="single-detail">
        <h3 class="single-name ">   {{ product.name }}</h3>
        <div class="d-flex justify-content-between pr-2 align-content-center ">
          <h3  class="single-price">{{ formatCurrency(product.price) }}</h3>
          <button class="btn btn-primary" @click="addToCart" >Add to Cart</button>
        </div>
        <p class="single-description">
          <span  class="badge text-bg-secondary">Description</span><br>
            {{product.description}}        </p>
    </div>
  </div>
</template>

<script>

import { computed, ref } from 'vue'
import { useProductStore } from '../store/ProductStore'
import { useRoute } from 'vue-router'

export default {
  setup() {
    const productStore = useProductStore()
    const route = useRoute()
    // Retrieve the product ID from the route
    const productId = computed(() => route.params.id)


    const data = ref({product : productStore.getProductByIdLocal(productId.value)   })

      // this is used when pages is refresh on a single view
      if(!data.product?.id) { // check if store is empty or cant find this id
        productStore.getProductById(productId.value).then(
          value => {
            data.value.product =  value[0]
          }
        )
      }

    // Use a computed property to get the invoice by its ID
    const product = computed( () => {
      return data.value.product
    })

    const addToCart = () => {
      alert('Added to Cart')
    }
    const formatCurrency = (price) => {
      return `GHS ${(price / 100).toFixed(2)}`
    }
    return {
      product,
      addToCart,
      formatCurrency,
    }
  },
}

</script>

<style scoped>
.single-image{
  width: 100%;
  height: 40vh;
  object-fit: cover;
}
.single-detail{
  padding: 10;
}
.single-name{
  padding-top:10px;
  font-size: 1.5rem;
  font-weight: 600;
}
.single-category{
  font-size: 0.6rem;
  font-weight: 600;
}

.single-price{
  font-size: 1.2rem;
  font-weight: bold;
}

.single-title{
  font-size: 1.2rem;
  font-weight: 600;
  background-color: rgba(127, 168, 255, 0.631);
  color: black;
}

.single-description{
  font-size: 0.8rem;
  font-weight: 400;
  text-align: justify;
}
</style>