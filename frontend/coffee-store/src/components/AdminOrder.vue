<template>
  <div class="container my-5" style="font-family: 'Poppins', sans-serif;">
    <h2 class="mb-4 text-center fw-bold">Daftar Pesanan</h2>

    <div v-if="orders.length === 0" class="text-center text-muted fst-italic py-5">
      Tidak ada Pesanan saat ini.
    </div>

    <div v-for="order in orders" :key="order.id" class="card shadow-sm mb-4">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-1">
          <div>
            <!-- Jika tidak ada customer_name, bisa dihapus -->
            <h5 class="card-title mb-0 text-primary">{{ order.customer_name || 'Customer' }}</h5>
            <small class="text-secondary fst-italic">Meja: {{ order.table_number }}</small><br />
            <small class="text-secondary fst-italic">
              Waktu Pesan: {{ formatOrderTime(order.order_time || order.created_at) }}
            </small>
          </div>
          <span
            :class="order.paid ? 'badge bg-success' : 'badge bg-danger'"
            class="fs-6"
          >
            {{ order.paid ? 'Lunas' : 'Belum Lunas' }}
          </span>
        </div>

        <ul class="list-group list-group-flush mb-3">
          <li
            v-for="item in order.items"
            :key="item.name"
            class="list-group-item d-flex justify-content-between align-items-center px-0 border-0"
          >
            <span>
              {{ item.name }}
              <span v-if="item.quantity && item.quantity > 1" class="text-muted">x{{ item.quantity }}</span>
            </span>
            <span class="fw-semibold">
              Rp{{ (item.price * (item.quantity || 1)).toLocaleString('id-ID') }}
            </span>
          </li>
        </ul>

        <div class="d-flex justify-content-between align-items-center mb-3 border-top pt-2">
          <strong>Total:</strong>
          <span class="fs-5 text-success fw-bold">Rp{{ order.total.toLocaleString('id-ID') }}</span>
        </div>

        <div class="d-flex gap-2">
          <button
            @click="markAsPaid(order.id)"
            :disabled="order.paid"
            class="btn btn-outline-success btn-sm flex-grow-1"
          >
            <i class="bi bi-check-lg me-1"></i>
            Tandai Lunas
          </button>
          <button
            @click="deleteOrder(order.id)"
            class="btn btn-outline-danger btn-sm flex-grow-1"
          >
            <i class="bi bi-trash me-1"></i>
            Hapus
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const orders = ref([])

//GET Produk dari database
const fetchOrders = async () => {
  try {
    const res = await axios.get('http://localhost:8000/api/orders')
    orders.value = res.data
  } catch (err) {
    console.error('Gagal fetch pesanan:', err)
  }
}

//PUT Produk untuk menandai Lunas
const markAsPaid = async (id) => {
  try {
    await axios.put(`http://localhost:8000/api/orders/${id}`)
    fetchOrders()
  } catch (err) {
    console.error('Gagal tandai lunas:', err)
  }
}

//DELETE Produk
const deleteOrder = async (id) => {
  try {
    await axios.delete(`http://localhost:8000/api/orders/${id}`)
    fetchOrders()
  } catch (err) {
    console.error('Gagal hapus pesanan:', err)
  }
}

// Format waktu WIB
function formatOrderTime(isoString) {
  if (!isoString) return '-'
  const date = new Date(isoString)
  const dateWIB = new Date(date.getTime() + 7 * 60 * 60 * 1000)
  const h = String(dateWIB.getUTCHours()).padStart(2, '0')
  const m = String(dateWIB.getUTCMinutes()).padStart(2, '0')
  const s = String(dateWIB.getUTCSeconds()).padStart(2, '0')
  return `${h}:${m}:${s}`
}

onMounted(fetchOrders)
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
</style>