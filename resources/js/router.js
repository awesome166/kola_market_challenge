import { createRouter, createWebHistory } from 'vue-router'
import ProductList from './pages/productList.vue'
import ProductDetail from './pages/productDetail.vue'
import InvoiceList from './pages/invoiceList.vue'
import InvoiceDetail from './pages/invoiceDetail.vue'
const routes = [
  {
    path: '/',
    component: ProductList,
  },
  {
    path: '/',
    component: ProductList,
  },
  {
    path: '/products/:id',
    component: ProductDetail,
    props: true,
  },
  {
    path: '/invoices/',
    component: InvoiceList,
  },
  {
    path: '/invoices/:id',
    component: InvoiceDetail,
    props: true,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router
