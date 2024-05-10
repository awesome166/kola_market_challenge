import { defineStore } from 'pinia'
import axios from 'axios'

export const useInvoiceStore = defineStore({
  id: 'invoice',
  state: () => ({
    invoiceList: [],
    loading: false,
  }),
  getters: {
    getInvoiceList() {
      if (this.invoiceList.length === 0 && !this.loading) {
        this.fetchInvoices()
      }
      return this.invoiceList
    },

  },
  actions: {
    async fetchInvoices() {
      this.loading = true
      try {
        const response = await axios.get('/api/invoices')
        this.invoiceList = response.data.data
        this.loading = false
      } catch (error) {
        this.loading = true
        // console.error('Error fetching invoices:', error)
      }
    },

    getInvoiceByIdLocal(invoiceId) {
      return this.invoiceList.find(invoice => invoice.id === Number(invoiceId))
    },

    async getInvoiceById(invoiceId) {
      try {
        const response = await axios.get(`/api/invoices/${invoiceId}`)
        // console.log('sa', response.data.data)
        return response.data.data
      } catch (error) {
        // console.error('Error fetching invoice:', error)
        return null
      }
    },
  },
})

