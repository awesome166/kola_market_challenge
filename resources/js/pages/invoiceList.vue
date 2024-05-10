<template>
  <div>

    <div class="d-flex align-items-end transaction-banner">
      <div class="p-3">
        <h1>Invoice List</h1>
      </div>
    </div>
    <div v-if="loading">
      <p>Loading products...</p>
      <!-- <loading-indicator /> -->
    </div>
    <div v-else-if="invoiceList.length === 0">
      <p>No products found</p>
    </div>

    <div v-else  v-for="invoice in invoiceList" :key="invoice.id">
      <invoice-card :invoiceData="invoice" ></invoice-card>
    </div>


  </div>
</template>

<script>


import { computed } from 'vue';
import { useInvoiceStore } from '../store/InvoiceStore'
import InvoiceCard from '../components/InvoiceCard.vue'

export default {
  components: {
    InvoiceCard,
  },
  setup() {
    const invoiceStore = useInvoiceStore()
    const loading = computed(() => invoiceStore.loading)
    const invoiceList = computed(() => invoiceStore.getInvoiceList)

    return {
      loading,
      invoiceList,
    }
  },
}
</script>

<style >
.transaction-banner{
  height: 10vh;
  margin-bottom: 10px;
  border-radius: 10px;
  color: #fff;
  background: rgb(14,0,255);
background: linear-gradient(127deg, rgba(14,0,255,0.5816920518207283) 0%, rgba(0,212,255,0.4724483543417367) 100%);

}
</style>