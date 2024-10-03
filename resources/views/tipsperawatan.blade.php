@extends('template.pasang')
@section('content')
    <!-- Hero Section -->
    <div class="container-fluidtext-white text-center p-5" style="background-color: #90EE90;">
        <h1 class="text-white">Tips Perawatan Tanaman</h1>
        <h5 class="text-white">Pelajari cara merawat tanaman Anda dengan baik untuk tetap sehat dan segar!</h5>
    </div>

    <!-- Tips Section -->
    <div class="container mt-5" style="margin-left: 9.2%;">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://asset.kompas.com/crops/s7dFnM2__IINu1l3TMhJvK0r0eo=/0x0:1000x667/750x500/data/photo/2020/12/31/5fedd499f1a7a.jpg" class="card-img-top" alt="Watering">
                    <div class="card-body">
                        <h5 class="card-title">1. Penyiraman yang Tepat</h5>
                        <p class="card-text">Jangan menyiram tanaman terlalu banyak atau terlalu sedikit. Sesuaikan frekuensi penyiraman dengan kebutuhan tanaman Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://cdn.idntimes.com/content-images/post/20200531/is-sunlight-through-a-window-direct-sunlight-2-34d42545dc85b233e299a527a278e266_600x400.jpg" class="card-img-top" alt="Sunlight">
                    <div class="card-body">
                        <h5 class="card-title">2. Cahaya Matahari</h5>
                        <p class="card-text">Tempatkan tanaman di area yang mendapatkan cahaya matahari yang cukup, tetapi hindari sinar matahari langsung yang bisa membakar daun.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="width: 450px; height: 470px; margin-top: -31.5%; margin-left: 67%;">
                <div class="card">
                    <img src="https://healthygermany.com/wp-content/uploads/2024/01/26.jpg" class="card-img-top" alt="Fertilizing">
                    <div class="card-body">
                        <h5 class="card-title">3. Pemupukan Berkala</h5>
                        <p class="card-text">Berikan pupuk organik secara berkala untuk mendukung pertumbuhan tanaman secara optimal, dan atur takaran pemberian pupuk pada tanaman.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://asset-2.tstatic.net/jogja/foto/bank/images/tanaman-hias-chinese-money-plant.jpg" class="card-img-top" alt="Watering">
                    <div class="card-body">
                        <h5 class="card-title">4. Pot yang Sesuai</h5>
                        <p class="card-text">Pilih pot yang cukup besar agar akar tanaman memiliki ruang untuk tumbuh. Jika pot terlalu kecil, pertumbuhan tanaman bisa terhambat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://klikhijau.com/wp-content/uploads/2023/08/Pemangkasan.jpg" class="card-img-top" alt="Sunlight">
                    <div class="card-body">
                        <h5 class="card-title">5. Pangkas Daun dan Dahan yang Rusak</h5>
                        <p class="card-text">Pangkas daun dan dahan yang sudah kering dan rusak untuk merangsang pertumbuhan baru, dan menjaga penampilan tanaman agar tetap rapi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-left: 67%; margin-top: -28%;">
                <div class="card">
                    <img src="https://imgsrv2.voi.id/idi_D0Rk9Y3OD_sSDGs5niXDiMsgRJG1jc_6A8_lW7E/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8yNDg4MjIvMjAyMzAxMjkxMTAyLW1haW4uY3JvcHBlZF8xNjc0OTY1MDUyLmpwZw.jpg" class="card-img-top" alt="Sunlight">
                    <div class="card-body">
                        <h5 class="card-title">5. Perhatikan Hama dan Penyakit</h5>
                        <p class="card-text">Selalu cek tanaman anda. Jika ada tanda-tanda hama atau penyakit, segera atasi dengan insektisida alami atau memangkas bagian yang terinfeksi.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h1 class="mb-4">Rekomendasi Pupuk</h1>

        <!-- Card Deck for Fertilizer Recommendations -->
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-20">
          <div class="col" style="margin-left: -2%;">
            <div class="card h-100">
              <img src="img/ppk1.jpg" class="card-img-top" alt="Pupuk A">
              <div class="card-body">
                <h5 class="card-title">Pupuk Urea</h5>
                <p class="card-text">Pupuk urea sangat cocok untuk tanaman yang membutuhkan nitrogen dalam jumlah besar, seperti Tanamah Buah-Buahan.</p>
              </div>
              <div class="card-footer" style="margin-left: 30%;">
                <a href="https://shopee.co.id/PUPUK-UREA-UNTUK-PENYUBUR-TANAMAN-1-KG-i.902437658.18594334991?sp_atk=3c64a81e-7475-4c5f-9d9d-4d70a992c073&xptdk=3c64a81e-7475-4c5f-9d9d-4d70a992c073" class="btn" style="background-color: #2b792b; color: white">Kunjungi Shopee</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <img src="img/ppk2.jpg" class="card-img-top" alt="Pupuk B">
              <div class="card-body">
                <h5 class="card-title">Pupuk NPK</h5>
                <p class="card-text">Pupuk NPK adalah pupuk majemuk yang mengandung tiga unsur utama: Nitrogen (N), Phosphorus (P), dan Kalium (K). Pupuk ini cocok untuk hampir semua jenis tanaman karena kandungan tersebut sangat penting untuk pertumbuhan tanaman secara keseluruhan</p>
              </div>
              <div class="card-footer" style="margin-left: 30%;">
                <a href="https://shopee.co.id/Pupuk-NPK-16-16-16-pak-tani.-penyubur-buah-bunga-pertumbuhan-1kg.-i.113440082.27608652252?sp_atk=b6dcd050-a4d9-4911-bbcc-93ee77f18c9e&xptdk=b6dcd050-a4d9-4911-bbcc-93ee77f18c9e" class="btn" style="background-color: #2b792b; color: white">Kunjungi Shopee</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <img src="img/ppk3.webp" class="card-img-top" alt="Pupuk C">
              <div class="card-body">
                <h5 class="card-title">Pupuk Osmocote</h5>
                <p class="card-text">Pupuk Osmocote adalah pupuk pelepas lambat (slow-release) yang memberikan nutrisi secara bertahap sesuai kebutuhan tanaman, pupuk ini sangat cocok untuk tanaman hias dan tanaman buah</p>
              </div>
              <div class="card-footer" style="margin-left: 30%">
                <a href="https://shopee.co.id/Pupuk-osmocote-500gr-(13-13-13)-(17-11-10)-(6-13-25)-Pupuk-Majemuk-i.373210491.13543179567?sp_atk=99030df2-2e7d-4bd4-807b-0d3f49ce6f86&xptdk=99030df2-2e7d-4bd4-807b-0d3f49ce6f86" class="btn" style="background-color: #2b792b; color: white">Kunjungi Shopee</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Footer -->
    <footer class="bg text-center text-lg-start mt-5" style="background-color: #50C878; ">
        <div class="container p-4">
            <div class="row">
                {{-- <div class="col-lg-4 col-md-6 mb-4 mb-md-0" style="margin-left: 20%;">
                    <h4 class="text-uppercase text-white" >Navigasi</h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href="#" class="text-white">Kategori</a></li>
                        <li><a href="#" class="text-white">Tips Perawatan</a></li>
                        <li><a href="#" class="text-white">Tentang Kami</a></li>
                    </ul>
                </div> --}}
                {{-- <div class="col-lg-4 col-md-12 mb-4 mb-md-0 text-white">
                  <h4 class="text-uppercase">Ikuti Kami</h4>
                  <a href="https://instagram.com" class="text-white me-3">
                      <i class="bi bi-instagram" style="font-size: 1.5rem; font-size: 20px;"> @temantanaman</i>
                  </a>
                  <br>
                  <a href="mailto:info@tanaman.com" class="text-white me-3">
                      <i class="bi bi-envelope-fill" style="font-size: 1.5rem; font-size: 20px;"> temantanaman@gmail.com</i>
                  </a>
                  <br>
                  <a href="https://x.com" class="text-white me-3">
                      <i class="bi bi-twitter" style="font-size: 1.5rem; font-size: 20px;"> temantanaman_official</i>
                  </a>
                  <br>
                  <a href="https://youtube.com" class="text-white">
                      <i class="bi bi-youtube" style="font-size: 1.5rem; font-size: 20px;"> official_temantanaman</i>
                  </a>
              </div> --}}
            </div>
        </div>
        <div class="text-center p-3 bg text-white" style="background-color:  #50C878; ">
           <h2>
            © 2024 Teman Tanaman. All rights reserved.
          </h2>

        </div>
      </footer>
      @endsection
