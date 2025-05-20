// resources/js/router.js
import { createRouter, createWebHistory } from 'vue-router'
import CustomerOrder from '../components/CustomerOrder.vue'
import AdminOrder from '../components/AdminOrder.vue'

const routes = [
  { path: '/', component: CustomerOrder },
  { path: '/admin', component: AdminOrder }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
