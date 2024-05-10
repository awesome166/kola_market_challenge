import { defineStore } from 'pinia'
import axios from 'axios'

import { toRaw } from 'vue'  // Import toRaw from Vue

export const useProductStore = defineStore({
  id: 'product',
  state: () => ({
    productList: [],
    loading: false,
  }),
  getters: {
    getProductList() {
      if (this.productList.length === 0  &&!this.loading) {
        this.fetchProducts()
      }
      return this.productList
    },

  },
  actions: {
    async fetchProducts() {
      this.loading = true
      try {
        const response = await axios.get('/api/products')
        this.productList = response.data.data
        this.loading = false
      } catch (error) {
        this.loading = false
        console.error('Error fetching products:', error)
      }
    },

    getProductByIdLocal(productId) {
      return this.productList.find(product => product.id === Number(productId))

    },

    async getProductById(productId) {
      try {
        const response = await axios.get(`/api/products/${productId}`)
        // console.log('sa', response.data.data)
        return response.data.data
      } catch (error) {
        // console.error('Error fetching invoice:', error)
        return null
      }
    },
  //...
    // Other actions for updating, deleting, etc.

    // async addProduct(product) {
    //   try {
    //     const response = await axios.post('/api/products', product)
    //     this.productList.push(response.data)
    //   } catch (error) {
    //     console.error('Error adding product:', error)
    //   }
    // },

  },
})
