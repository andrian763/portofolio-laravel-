<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portofolio Saya</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-gray-200 font-sans scroll-smooth">

  <!-- Navbar -->
  <nav class="fixed w-full bg-gray-800 shadow z-50">
    <div class="max-w-6xl mx-auto flex justify-between items-center p-4">
      <h1 class="font-bold text-xl text-indigo-400">My Portofolio</h1>
      <ul class="flex gap-6">
        <li><a href="#about" class="hover:text-indigo-400">About</a></li>
        <li><a href="#projects" class="hover:text-indigo-400">Projects</a></li>
        <li><a href="#contact" class="hover:text-indigo-400">Contact</a></li>
      </ul>
    </div>
  </nav>

<!-- Hero -->
<section class="h-screen flex flex-col justify-center items-center text-center pt-20 bg-gray-900 bg-cover bg-center bg-no-repeat relative" style="background-image: url('/images/data-science.avif');">
  <div class="absolute inset-0 bg-black/40"></div>
  <div class="relative z-10 max-w-3xl w-full mx-4 px-8 py-10 bg-white/10 backdrop-blur-md border border-white/20 rounded-3xl shadow-lg">
    <h1 class="text-5xl md:text-6xl font-bold mb-4 text-white drop-shadow-lg">Hi, I'm <span class="text-indigo-300">Andrian Simanjuntak</span></h1>
    <p class="text-xl text-gray-200 mb-6 drop-shadow-lg">Data Science | Data Analysis | UI/UX | Web Development Programming</p>
    <a href="#projects" class="inline-block bg-indigo-600 text-white py-3 px-6 rounded-full hover:bg-indigo-700 transition">Lihat Proyek Saya</a>
  </div>
</section>

<!-- About -->
<section class="relative py-16 px-8 text-white overflow-hidden bg-black" id="about">
  <!-- Background image -->
  <div class="absolute inset-0 flex justify-center items-center">
    <img src="/images/banner-hero.jpg" alt="About Background" class="w-full h-full object-contain">
    <div class="absolute inset-0 bg-black/60"></div> <!-- Overlay -->
  </div>

  <!-- Konten dengan background elegan -->
  <div class="relative z-10 max-w-4xl mx-auto bg-black/60 backdrop-blur-md p-8 rounded-3xl shadow-2xl">
    <h2 class="text-4xl font-bold mb-8 text-indigo-400">Tentang Saya</h2>
    <div class="space-y-6">
      <div class="flex items-start gap-4">
        <span class="text-indigo-300 text-2xl">🎓</span>
        <div>
          <h3 class="text-xl font-semibold">Pendidikan</h3>
          <p class="text-gray-200">Mahasiswa S1 Sains Data di Universitas Negeri Surabaya, diperkirakan lulus tahun 2027. Aktif dalam organisasi kampus salah satunya Himpunan Mahasiswa Sains Data Universitas Negeri Surabaya.</p>
        </div>
      </div>

      <div class="flex items-start gap-4">
        <span class="text-indigo-300 text-2xl">💻</span>
        <div>
          <h3 class="text-xl font-semibold">Keahlian</h3>
          <p class="text-gray-200">Pengembangan frontend dan backend sederhana, pembelajaran mesin dasar, design prototype aplikasi, serta analisa pengolahan dan keputusan dalam pengambilan data.</p>
        </div>
      </div>

      <div class="flex items-start gap-4">
        <span class="text-indigo-300 text-2xl">🚀</span>
        <div>
          <h3 class="text-xl font-semibold">Pengalaman</h3>
          <p class="text-gray-200">Pernah membuat beberapa proyek tugas kuliah berbasis web, termasuk sistem inventaris sederhana, dan aktif sebagai anggota serta panitia di beberapa acara Himpunan Mahasiswa Sains Data Universitas Negeri Surabaya.</p>
        </div>
      </div>

      <div class="flex items-start gap-4">
        <span class="text-indigo-300 text-2xl">🎯</span>
        <div>
          <h3 class="text-xl font-semibold">Tujuan</h3>
          <p class="text-gray-200">Mengembangkan kemampuan di bidang web development dan data science untuk berkontribusi di perusahaan teknologi atau riset setelah lulus.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Projects -->
<section class="relative py-16 bg-cover bg-center bg-no-repeat" style="background-image: url('/images/projecttt.png');" id="projects">
  <div class="absolute inset-0 bg-black/70"></div> <!-- Overlay agar konten tetap terbaca -->

  <div class="relative z-10 max-w-7xl mx-auto px-6">
    <h2 class="text-4xl font-bold mb-12 text-center text-indigo-400">Project</h2>
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
    
<!-- Project Card 1 -->
<div class="relative group bg-gray-700/80 p-6 rounded-3xl shadow-lg overflow-hidden transform transition duration-500 hover:-translate-y-2">
  <img src="/images/Tampilan.png" alt="Project 1" class="rounded-2xl mb-4 w-full object-cover h-48 transition duration-500 group-hover:scale-105">
  <h3 class="text-2xl font-semibold mb-2 text-indigo-300">Pemrograman Dasar</h3>
  <p class="text-gray-300 mb-4">Aplikasi ini dirancang untuk membantu simulasi sistem kasir di sebuah kafe sederhana bernama "Kafe Barokah". Pengguna dapat memilih makanan, minuman, dan camilan dari menu yang tersedia, menghitung total harga secara otomatis, serta mencetak struk pembelian.</p>
  <a 
    href="https://github.com/andrian763/Pemrograman-Dasar" 
    target="_blank" 
    rel="noopener noreferrer" 
    class="inline-block text-indigo-400 font-semibold hover:underline"
  >
    Klik disini &rarr;
  </a>
  <div class="absolute inset-0 bg-gradient-to-t from-indigo-500 to-transparent opacity-0 group-hover:opacity-10 transition duration-500 rounded-3xl pointer-events-none"></div>
</div>

    
<!-- Project Card 2 -->
<div class="relative group bg-gray-700/80 p-6 rounded-3xl shadow-lg overflow-hidden transform transition duration-500 hover:-translate-y-2">
  <img src="/images/PMDGAMBAR.png" alt="Project 1" class="rounded-2xl mb-4 w-full object-cover h-48 transition duration-500 group-hover:scale-105">
  <h3 class="text-2xl font-semibold mb-2 text-indigo-300">Pembelajaran Mesin Dasar </h3>
  <p class="text-gray-300 mb-4"> Proyek pembelajaran mesin dasar ini secara manual mengimplementasikan algoritma Support Vector Machine (SVM) untuk memprediksi risiko stroke. Model ini tidak menggunakan library siap pakai seperti sklearn.svm, melainkan dibangun dari awal, dan dilengkapi dengan antarmuka pengguna interaktif berbasis Streamlit untuk mempermudah prediksi risiko stroke berdasarkan data kesehatan pasien.</p>
  <a 
    href="https://github.com/andrian763/Pembelajaran-Mesin-Dasarr" 
    target="_blank" 
    rel="noopener noreferrer" 
    class="inline-block text-indigo-400 font-semibold hover:underline"
  >
    Klik disini &rarr;
  </a>
  <div class="absolute inset-0 bg-gradient-to-t from-indigo-500 to-transparent opacity-0 group-hover:opacity-10 transition duration-500 rounded-3xl pointer-events-none"></div>
</div>

<!-- Project Card 3 -->
<div class="relative group bg-gray-700/80 p-6 rounded-3xl shadow-lg overflow-hidden transform transition duration-500 hover:-translate-y-2">
  <img src="/images/LAPORR.png" alt="Project 1" class="rounded-2xl mb-4 w-full object-cover h-48 transition duration-500 group-hover:scale-105">
  <h3 class="text-2xl font-semibold mb-2 text-indigo-300">Interaksi Manusia dan Komputer</h3>
  <p class="text-gray-300 mb-4">Lapor Wapres adalah prototipe aplikasi web dan seluler yang dibuat untuk meningkatkan partisipasi masyarakat dalam menyampaikan keluhan dan aspirasi terkait kebijakan dan fasilitas publik di Indonesia. Aplikasi ini dikembangkan sebagai proyek mata kuliah Interaksi Manusia dan Komputer (IMK) di Universitas Negeri Surabaya..</p>
  <a 
    href="https://www.behance.net/gallery/228670443/LAPOR-WAPRES" 
    target="_blank" 
    rel="noopener noreferrer" 
    class="inline-block text-indigo-400 font-semibold hover:underline"
  >
    Klik disini &rarr;
  </a>
  <div class="absolute inset-0 bg-gradient-to-t from-indigo-500 to-transparent opacity-0 group-hover:opacity-10 transition duration-500 rounded-3xl pointer-events-none"></div>
</div>
</section>

<!-- Contact -->
<section class="relative bg-cover bg-center bg-no-repeat py-16" style="background-image: url('/images/images.png');" id="contact">

  <div class="relative z-10 max-w-4xl mx-auto p-8 text-center text-white">
    <h2 class="text-4xl font-bold mb-8 text-indigo-400">Let's Connect!</h2>

    <!-- Info Kontak -->
    <div class="bg-black bg-opacity-50 backdrop-blur-md p-6 rounded-2xl shadow-2xl space-y-4 mb-8 max-w-md mx-auto">
      <p class="text-gray-200 text-left">
        📧 <span class="font-semibold text-indigo-300">Email:</span><br>
        <a href="mailto:andrian.simanjuntak763@gmail.com" class="text-indigo-400 underline break-all">
          andriansimanjuntak763@gmail.com
        </a>
      </p>
      <p class="text-gray-200 text-left">
        📱 <span class="font-semibold text-indigo-300">WhatsApp:</span><br>
        <a href="https://wa.me/081331684076" target="_blank" class="text-indigo-400 underline">
          081331684076
        </a>
      </p>
      <p class="text-gray-200 text-left">
        💼 <span class="font-semibold text-indigo-300">LinkedIn:</span><br>
        <a href="https://www.linkedin.com/in/andrian-simanjuntak-b67907333/" target="_blank" class="text-indigo-400 underline break-all">
         https://www.linkedin.com/in/andrian-simanjuntak-b67907333/
        </a>
      </p>
      <p class="text-gray-200 text-left">
        📂 <span class="font-semibold text-indigo-300">GitHub:</span><br>
        <a href="https://github.com/andrian763" target="_blank" class="text-indigo-400 underline break-all">
          https://github.com/andrian763
        </a>
      </p>
    </div>

    <!-- Pesan sukses -->
    @if(session('success'))
      <div class="bg-green-600 text-white p-4 rounded-xl mb-6">
        {{ session('success') }}
      </div>
    @endif

    <!-- Form Kontak -->
    <form action="{{ route('contact.store') }}" method="POST" class="bg-black bg-opacity-60 backdrop-blur-md p-6 rounded-2xl shadow-2xl space-y-4 max-w-xl mx-auto">
    @csrf
    <div>
        <label for="name" class="block text-gray-200 mb-1 text-left">Nama Anda</label>
        <input type="text" id="name" name="name" placeholder="Masukkan nama..." class="w-full p-3 rounded-lg bg-gray-700 bg-opacity-70 text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-400" required>
    </div>
    <div>
        <label for="message" class="block text-gray-200 mb-1 text-left">Pesan Anda</label>
        <textarea id="message" name="message" rows="4" placeholder="Tuliskan pesan Anda..." class="w-full p-3 rounded-lg bg-gray-700 bg-opacity-70 text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-400" required></textarea>
    </div>


      <!-- Rating -->
      <div>
        <label class="block text-gray-200 mb-1 text-left">Rating Portofolio Saya</label>
        <div class="flex flex-wrap gap-2">
          @for($i = 1; $i <= 5; $i++)
          <div class="flex items-center">
            <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}" class="accent-indigo-400" required>
            <label for="star{{ $i }}" class="text-gray-200 ml-1">{{ str_repeat('⭐', $i) }}</label>
          </div>
          @endfor
        </div>
      </div>

      <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-full hover:bg-indigo-700 transition">
        Kirim Pesan
      </button>
    </form>
  </div>
</section>

<footer class="text-center py-6 text-gray-400">
  &copy; 2025 Andrian Simanjuntak. All rights reserved.
</footer>

</body>
</html>
