 <template>
  <div class="product-card shadow m-1">
    <router-link :to="'/products/'+product.id" >
    <img :src="product.image_url" :alt="product.name"  class="product-image" />
    <div class="product-details">
      <h3 class="product-name">{{ product.name }}</h3>
      <p class="product-category ">Electronics</p>
      <p class="product-price">  {{ formatCurrency(product.price) }}</p>
    </div>
    </router-link>
  </div>
</template>

<script>
export default {
  props: {
    product: {
      type: Object,
      required: true,
    },
  },
  methods: {
    formatCurrency(price) {
      // Assuming price is in cents, you might want to format it to dollars or any other currency
      return `GHS ${(price / 100).toFixed(2)}`
    },
  },
};
</script>

<style scoped>

.product-card {
  /* border: 1px solid #ccc; */
  border-radius: 5px;
  /* box-shadow: 1px 1px 1px 1px  rgb(0 0 0 / 20%); */
}

a{
  text-decoration: none;
  color: black;
}

.product-image {
  width: 100%;
  /* height: auto; */
  /* object-fit: fill; */
}

.product-details {
  margin-top: 0.2rem;
  padding: 0.6rem;
  height: 100px;
}
.product-name{
  font-size: 1rem;
  font-weight: 500;
  color: black;
  padding: 0px;
  margin: 0px;
}
.product-category{
  font-size: 0.5rem;
  color: rgb(141, 141, 141);
  font-weight: bold;
  padding: 0px;
  margin: 0px;
}
.product-price {
  padding-top: 5px;
  font-weight: bold;
  color: black;
}
</style>
