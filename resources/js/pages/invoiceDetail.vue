<template>
  <div v-if="invoices">
    <div class="d-flex align-items-end transaction-banner">
      <div class="p-2  d-flex justify-content-between w-100">
        <h6>Invoice Number:  #{{invoices.invoice_number}}</h6>
        <h4>Kola <br>Market</h4>
    </div>
    </div>


    <div class="mb-3">
      <p>Kola Market, <br> 12, kantoments <br> Accra, Ghana</p>
    </div>

    <div class="mb-3">
     <p> To:</p>
     Invoice id: #{{invoices.invoice_number}}<br>
      Sample User
      <br>
      Emails@sample.com
      <br>
      0244003000

    </div>
    <table class="table table-stripped">
      <thead  class="table-light">
        <tr >
          <th>Item</th>
          <th>Quantity</th>
          <th>Unit Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr  v-for="invoice in invoices.details" :key="invoice.id">
          <td>{{invoice.item}}</td>
          <td>{{invoice.quantity }}</td>
          <td>{{invoice.unit_price}}</td>
          <td>GHS {{invoice.totalAmount}}</td>
        </tr>

        <tr>
          <td></td>
          <td></td>
          <td>Total</td>
          <td>GHS {{ totalItems }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>

import { computed,ref } from 'vue'
import { useInvoiceStore } from '../store/InvoiceStore'
import { useRoute } from 'vue-router'

export default {
  setup() {
    const InvoiceStore = useInvoiceStore()
    const route = useRoute()
    const invoiceId = computed(() => route.params.id)

    const data = ref({invoice : InvoiceStore.getInvoiceByIdLocal(invoiceId.value)   })

      // this is used when pages is refresh on a single view
      if(!data.invoice?.id) { // check if store is empty or cant find this id
        InvoiceStore.getInvoiceById(invoiceId.value).then(
          value => {
            data.value.invoice =  value[0]
          }
        )
      }

    // Use a computed property to get the invoice by its ID
    const invoices = computed( () => {
      return data.value.invoice
    })

    const totalItems = computed(() => {
      // console.log('cjc', Array.isArray(invoice.details) )
      if (!invoices.value) return 0
      return invoices.value?.details?.reduce((acc, item) => acc + item.totalAmount, 0)
    })


    const formatCurrency = (price) => {
      return `GHS ${(price / 100).toFixed(2)}`
    }
    return {
      invoices,
      formatCurrency,
      totalItems,
    }
  },
}
</script>

<style scoped>
/* style for the table */
table {
  width: 100%;
  border-collapse: collapse;
}
th,
td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  font-size: x-small;
}

</style>