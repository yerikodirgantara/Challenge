<template>
  <div class="font-sans text-dark">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold text-warning" href="#home">BEANIE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#shop">Shop</a></li>
            <li class="nav-item"><a class="nav-link" href="#location">Lokasi</a></li>
            <li class="nav-item"><a class="nav-link" href="#testimonial">Testimoni</a></li>
            <li class="nav-item"><a class="nav-link" href="#best-selling">Produk Populer</a></li>
            <li class="nav-item"><a class="nav-link" href="#popular">Produk Baru</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section as Carousel -->
    <section id="home" class="mt-5">
      <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../assets/banner-coffee.jpg" class="d-block w-100" alt="Coffee 1" style="max-height: 500px; object-fit: cover;" />
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-5 fw-semibold text-white">SPECIAL <span class="text-warning">COFFEE</span></h2>
              <p class="mt-2">Nikmati kopi dari biji kopi terbaik di dunia. Kualitas terbaik yang akan memanjakan harimu.</p>
              <a href="#popular" class="btn btn-warning mt-2 px-4 py-2">Order Now</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../assets/banner-coffee2.png" class="d-block w-100" alt="Coffee 2" style="max-height: 500px; object-fit: cover;" />
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-5 fw-semibold text-white">AROMA <span class="text-warning">NIKMAT</span></h2>
              <p class="mt-2">Kopi pilihan dengan aroma yang khas dan rasa yang memikat hati.</p>
              <a href="#popular" class="btn btn-warning mt-2 px-4 py-2">Order Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Shop -->
    <section id="shop" class="py-5">
      <div class="container">
        <h3 class="text-center fw-bold mb-4 fs-2">SHOP BEST COFFEE</h3>
        <div class="row">
          <div class="col-md-4 mb-4" v-for="p in products" :key="p.id">
            <div class="card h-100 shadow">
              <img :src="getImgUrl(p.image)" class="card-img-top" :alt="p.name" style="height: 250px; object-fit: cover;" />
              <div class="card-body">
                <h5 class="card-title">{{ p.name }}</h5>
                <p class="card-text text-muted">Rp {{ p.price.toLocaleString('id-ID') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Lokasi Section -->
    <section id="location" class="py-5 bg-light">
      <div class="container">
        <h3 class="text-center fw-bold mb-4 fs-2">LOKASI KEDAI</h3>
        <div class="row">
          <div class="col-md-4" v-for="loc in locations" :key="loc.id">
            <div class="card shadow mb-3">
              <div class="card-body">
                <h5 class="card-title">{{ loc.name }}</h5>
                <p class="card-text">{{ loc.address }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- Testimonial Section -->
<section id="testimonial" class="py-5 text-center bg-light">
  <div class="container">
    <h2 class="mb-5 fw-bold">Apa Kata Mereka</h2>
    <div class="row justify-content-center g-4">

      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <p class="card-text fst-italic">"Tempatnya nyaman, pilihan menunya banyak, dan suasananya bikin betah berlama-lama."</p>
          </div>
          <div class="card-footer bg-transparent border-0 fw-semibold">
            Sarah Anderson
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <p class="card-text fst-italic">"Kopi di sini benar-benar nikmat dan suasananya sangat nyaman untuk bekerja ataupun bersantai."</p>
          </div>
          <div class="card-footer bg-transparent border-0 fw-semibold">
            Dimas Pratama
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <p class="card-text fst-italic">"Pelayanan ramah, tempatnya estetik, dan varian minumannya sangat beragam. Pasti akan kembali lagi!"</p>
          </div>
          <div class="card-footer bg-transparent border-0 fw-semibold">
            Rina Maharani
          </div>
        </div>
      </div>

      <!-- Testimoni tambahan -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <p class="card-text fst-italic">"Tempat favorit saya untuk ngopi pagi. Baristanya juga sangat berpengetahuan soal kopi."</p>
          </div>
          <div class="card-footer bg-transparent border-0 fw-semibold">
            Andi Wijaya
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <p class="card-text fst-italic">"Suka banget sama desain interiornya. Estetik banget buat foto-foto dan nongkrong bareng teman."</p>
          </div>
          <div class="card-footer bg-transparent border-0 fw-semibold">
            Melisa Putri
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <p class="card-text fst-italic">"Harga terjangkau tapi kualitas premium. Sangat direkomendasikan untuk para pecinta kopi!"</p>
          </div>
          <div class="card-footer bg-transparent border-0 fw-semibold">
            Budi Santoso
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

    <!-- Popular & New Sections -->
<section id="popular" class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <!-- New Arrivals -->
      <div class="col-md-6 mb-5">
        <h4 class="fw-bold text-uppercase mb-4">Produk Baru</h4>
        <div
          class="d-flex align-items-center justify-content-between mb-3"
          v-for="p in newProducts"
          :key="p.id"
        >
          <div class="d-flex align-items-center">
            <img
              :src="getImgUrl(p.image)"
              :alt="p.name"
              class="rounded"
              style="width: 50px; height: 50px; object-fit: cover; margin-right: 15px;"
            />
            <div>
              <a
                href="#"
                class="fw-semibold text-decoration-none"
                @click.prevent="openModal(p)"
                style="cursor: pointer;"
              >
                {{ p.name }}
              </a>
              <div class="text-muted small">Kopi baru dengan cita rasa khas.</div>
            </div>
          </div>
          <div class="fw-semibold">Rp {{ p.price.toLocaleString('id-ID') }}</div>
        </div>
        <a href="#" class="text-decoration-underline small">View All</a>
      </div>

          <!-- Best Selling -->
    <div class="col-md-6 mb-5" id="best-selling">
      <h4 class="fw-bold text-uppercase mb-4">Produk Populer</h4>
      <div
        class="d-flex align-items-center justify-content-between mb-3"
        v-for="p in popularProducts"
        :key="p.id"
      >
        <div class="d-flex align-items-center">
          <img
            :src="getImgUrl(p.image)"
            :alt="p.name"
            class="rounded"
            style="width: 50px; height: 50px; object-fit: cover; margin-right: 15px;"
          />
          <div>
            <a
              href="#"
              class="fw-semibold text-decoration-none"
              @click.prevent="openModal(p)"
              style="cursor: pointer;"
            >
              {{ p.name }}
            </a>
            <div class="text-muted small">Favorit Pengunjung Beanie.</div>
          </div>
        </div>
        <div class="fw-semibold">Rp {{ p.price.toLocaleString('id-ID') }}</div>
      </div>
      <a href="#" class="text-decoration-underline small">View All</a>
    </div>
    </div>
  </div>
</section>

    <!-- Fitur Layanan -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row text-center justify-content-center">
      <div class="col-md-4 mb-4">
        <i class="bi bi-cup-hot fs-1 text-warning mb-2"></i>
        <h6 class="fw-bold">Pilihan Kopi Beragam</h6>
        <p class="text-muted small">Nikmati berbagai varian kopi dari biji kopi pilihan terbaik lokal maupun internasional.</p>
      </div>
      <div class="col-md-4 mb-4">
        <i class="bi bi-emoji-smile fs-1 text-warning mb-2"></i>
        <h6 class="fw-bold">Pelayanan Ramah</h6>
        <p class="text-muted small">Barista dan staf kami siap melayani dengan senyum dan keramahan setiap saat.</p>
      </div>
      <div class="col-md-4 mb-4">
        <i class="bi bi-house-heart fs-1 text-warning mb-2"></i>
        <h6 class="fw-bold">Tempat Estetik Indoor & Outdoor</h6>
        <p class="text-muted small">Rasakan suasana nyaman dan estetik baik di dalam ruangan maupun area terbuka.</p>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div
  class="modal fade"
  id="orderModal"
  tabindex="-1"
  aria-labelledby="orderModalLabel"
  aria-hidden="true"
  ref="orderModalRef"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow rounded-4">
      <!-- Header -->
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title fw-semibold text-dark" id="orderModalLabel">
          Konfirmasi Pemesanan
        </h5>
        <button
          type="button"
          class="btn-close"
          @click="closeModal"
          aria-label="Tutup"
        ></button>
      </div>

      <!-- Body -->
      <div class="modal-body pt-2">
        <p class="mb-2">Anda yakin ingin memesan:</p>

        <!-- Daftar Produk yang Dipilih -->
        <ul class="list-unstyled">
          <li
            v-for="(product, index) in selectedProducts"
            :key="product.id"
            class="d-flex align-items-center justify-content-between mb-2"
          >
            <div>
              <h6 class="fw-bold text-warning mb-0">
                {{ product.name }} <small>x{{ product.quantity || 1 }}</small>
              </h6>
              <p class="text-muted mb-0">
                Harga: Rp {{
                  (product.price * (product.quantity || 1)).toLocaleString('id-ID')
                }}
              </p>
            </div>
            <button class="btn btn-sm btn-danger" @click="removeProduct(index)">
              Hapus
            </button>
          </li>
        </ul>

        <!-- Total Bayar -->
        <div class="mb-3">
          <h6>Total Bayar: Rp {{ totalPrice.toLocaleString('id-ID') }}</h6>
        </div>

        <!-- Pilih Meja -->
        <div class="mb-3">
          <label for="tableNumber" class="form-label fw-semibold">Pilih Meja</label>
          <select id="tableNumber" v-model="tableNumber" class="form-select" required>
            <option disabled value="">-- Pilih Meja --</option>
            <option v-for="n in 5" :key="n" :value="n">Meja {{ n }}</option>
          </select>
        </div>

        <!-- Pertanyaan Tambah Produk -->
        <div class="mb-3">
          <label class="form-label fw-semibold">Ingin tambah produk lain?</label>
          <div class="d-flex gap-2">
            <button
              type="button"
              class="btn btn-sm"
              :class="showProductOptions === true ? 'btn-primary' : 'btn-outline-primary'"
              @click="selectAddProduct(true)"
            >
              Ya
            </button>
            <button
              type="button"
              class="btn btn-sm"
              :class="showProductOptions === false ? 'btn-primary' : 'btn-outline-secondary'"
              @click="selectAddProduct(false)"
            >
              Tidak
            </button>
          </div>
        </div>

        <!-- Daftar produk tambahan -->
        <div v-if="showProductOptions === true" class="mb-3">
          <label class="form-label fw-semibold">Pilih Produk Lain:</label>
          <div class="d-flex flex-wrap gap-3">
            <div
              v-for="product in products"
              :key="product.id"
              class="card shadow-sm border-0"
              style="width: 120px; cursor: pointer;"
              @click="selectProduct(product)"
            >
              <img
                :src="getImgUrl(product.image)"
                class="card-img-top"
                alt="Gambar Produk"
                style="height: 80px; object-fit: cover;"
              />
              <div class="card-body p-2 text-center">
                <p class="card-text small fw-semibold mb-0">{{ product.name }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div class="modal-footer border-0 pt-0">
        <button type="button" class="btn btn-secondary" @click="closeModal">
          Batal
        </button>
        <button
          type="button"
          class="btn btn-primary"
          @click="confirmOrder"
          :disabled="!tableNumber || showProductOptions === null || selectedProducts.length === 0"
        >
          Konfirmasi
        </button>
      </div>
    </div>
  </div>
</div>
</div>
</template>

<script setup>
import { ref, computed } from 'vue'
import axios from 'axios'
import Modal from 'bootstrap/js/dist/modal'

// Data lokasi & produk
const locations = ref([
  { id: 1, name: 'Beanie Coffee Semarang', address: 'Jl. Pandanaran No. 45, Semarang' },
  { id: 2, name: 'Beanie Coffee Ungaran', address: 'Jl. Diponegoro No. 10, Ungaran' },
  { id: 3, name: 'Beanie Coffee Salatiga', address: 'Jl. Jenderal Sudirman No. 12, Salatiga' }
])

const products = ref([
  { id: 1, name: 'Caramelicious Coffee', price: 25000, image: 'caramel_coffee.jpg', isPopular: true, isNew: false },
  { id: 2, name: 'Hazelnut Heaven Coffee', price: 20000, image: 'hazelnut_coffee.jpg', isPopular: true, isNew: true },
  { id: 3, name: 'Maple Magic Coffee', price: 20000, image: 'maple_coffee.png', isPopular: false, isNew: true },
  { id: 4, name: 'Gayo Coffee', price: 25000, image: 'kopi_gayo.jpeg', isPopular: false, isNew: true },
  { id: 5, name: 'Espresso Coffee', price: 12000, image: 'kopi_espresso.jpg', isPopular: true, isNew: false },
  { id: 6, name: 'Cold Brew Coffee', price: 28000, image: 'kopi_cold brew.jpg', isPopular: true, isNew: false }
])

const popularProducts = computed(() => products.value.filter(p => p.isPopular))
const newProducts     = computed(() => products.value.filter(p => p.isNew))

// Modal state
const selectedProduct = ref(null)
const selectedProducts = ref([]) // Menyimpan produk yg dipilih
const orderModalRef = ref(null)
let bsModal = null

// Nomor meja
const tableNumber = ref('')

// Opsi tambah produk: true = ya, false = tidak, null = belum pilih
const showProductOptions = ref(null)

// Total harga produk yg dipilih
const totalPrice = computed(() =>
  selectedProducts.value.reduce((sum, p) => sum + p.price, 0)
)

// Utility path gambar
function getImgUrl(fileName) {
  return new URL(`../assets/${fileName}`, import.meta.url).href
}

// Buka modal
function openModal(product) {
  selectedProduct.value = product
  selectedProducts.value = [product]  // reset produk yg dipilih ke produk awal
  tableNumber.value = ''
  showProductOptions.value = null
  if (!bsModal) {
    bsModal = new Modal(orderModalRef.value)
  }
  bsModal.show()
}

// Tutup modal
function closeModal() {
  if (bsModal) bsModal.hide()
}

// ✅ Perbaikan di sini: izinkan produk yang sama ditambahkan lebih dari sekali
function selectProduct(product) {
  selectedProducts.value.push({ ...product }) // Salin agar dianggap objek baru meskipun ID sama
}

// Pilih opsi tambah produk (ya/tidak)
function selectAddProduct(choice) {
  showProductOptions.value = choice
  // Jika pilih "Tidak", hapus produk tambahan yang mungkin sudah dipilih sebelumnya
  if (choice === false) {
    // Sisakan hanya produk pertama yg dipilih (produk utama)
    if (selectedProducts.value.length > 1) {
      selectedProducts.value = [selectedProducts.value[0]]
    }
  }
}

// Fungsi hapus produk dari daftar selectedProducts berdasarkan index
function removeProduct(index) {
  selectedProducts.value.splice(index, 1)
  // Jika tidak ada produk tersisa, reset pilihan tambah produk
  if (selectedProducts.value.length === 0) {
    showProductOptions.value = null
  }
}

// Kirim order
async function confirmOrder() {
  if (!tableNumber.value) {
    alert('Silakan pilih nomor meja terlebih dahulu.')
    return
  }

  if (showProductOptions.value === null) {
    alert('Silakan pilih opsi apakah ingin tambah produk lain.')
    return
  }

  if (showProductOptions.value === true && selectedProducts.value.length === 0) {
    alert('Silakan pilih setidaknya satu produk tambahan.')
    return
  }

  if (selectedProducts.value.length === 0) {
    alert('Tidak ada produk yang dipilih.')
    return
  }

  try {
    await axios.post('http://localhost:8000/api/orders', {
      items: selectedProducts.value.map(p => ({
        name: p.name,
        price: p.price
      })),
      table_number: String(tableNumber.value)
    })
    closeModal()
    alert(`Berhasil order ${selectedProducts.value.length} produk di Meja ${tableNumber.value}!`)
  } catch (error) {
    handleError(error)
  }
}

function handleError(error) {
  if (error.response) {
    alert(`Error: ${error.response.data.message || 'Terjadi kesalahan'}`)
  } else if (error.request) {
    alert('Tidak ada respons dari server, coba cek koneksi.')
  } else {
    alert('Terjadi kesalahan saat mengirim data.')
  }
}
</script>

<style scoped>
body {
  padding-top: 80px;
}
.bg-light {
  background-color: #f8f9fa !important;
}

.modal-content {
  border-radius: 1rem;
  animation: fadeInDown 0.4s;
}

@keyframes fadeInDown {
  from {
    opacity: 0;
    transform: translateY(-10%);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>