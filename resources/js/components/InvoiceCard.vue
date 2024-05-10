<template>
<div>

  <router-link :to="'/invoices/'+invoiceData.id" >
  <div class="card mb-2 shadow invoice">
      <div class="card-body">
      <div class="d-flex ">
        <div class="flex-shrink-0">
          <small>Invoice Number</small>
          <p>{{ invoiceData.invoice_number  }} </p>

        </div>

        <div class="flex-grow-0 mx-auto">
        <small>Date</small><br>
          {{ invoiceData.invoice_date }}
        </div>

        <div class="flex-grow-0 ms-3">
          <small>Amount</small><br>
          GHS {{  invoiceData.total_amount }} >
        </div>
      </div>
      </div>

    </div>
    </router-link>
</div>
</template>

<script>
export default {
  props: {
    invoiceData: {
      type: Object,
      required: true,
    },
  },
  methods: {
    // formatCurrency(price) {
    //   return `GHS ${(price / 100).toFixed(2)}`;
    // },
  },
}

</script>


<style scoped>

a{
  text-decoration: none;
  color: black;
}
.invoice:focus{
  background-color: aqua;
}
</style>