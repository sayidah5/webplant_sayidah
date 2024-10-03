@extends('template.pasang')
@section('content')
    <div class="wave-container" style="margin-top: 0%;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#90EE90" fill-opacity="1" d="M0,256L30,213.3C60,171,120,85,180,64C240,43,300,85,360,85.3C420,85,480,43,540,21.3C600,0,660,0,720,16C780,32,840,64,900,90.7C960,117,1020,139,1080,144C1140,149,1200,139,1260,160C1320,181,1380,235,1410,261.3L1440,288L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
        </svg>
    </div>
    <div class="text-center" style="margin-top: -10%;">
        <h2 class="fw-bold">Profil Teman Tanaman</h2>
    </div>
    <div class="container" style="margin-top: 5%; margin-left: 12%;">
        <img src="https://st4.depositphotos.com/16806196/20781/i/450/depositphotos_207816866-stock-photo-two-young-farmers-researching-corn.jpg" alt="">
        <img src="https://st3.depositphotos.com/1570716/17308/i/450/depositphotos_173085014-stock-photo-workers-using-tablet.jpg" alt="">
    </div>
    <div class="container-text" style="margin-left: 14%; margin-top: 3%;">
        <div class="row">
            <p class="fs-4 text-lowercase">Teman Tanaman adalah website yang menyediakan informasi tentang berbagai jenis tanaman anda. Mulai dari <br> tanaman hias, dan tanaman buah, kami sajikan informasi lengkap mulai dari jenis menanam, cara menanam, <br> merawat, hingga manfaatnya. Dapatkan inspirasi dan pengetahuan baru tentang dunia tanaman bersama kami.</p>
        </div>
        <div class="text-center" style="margin-left: -80%; margin-top: 2%;">
            <h2 class="fw-bold">Visi Teman Tanaman :</h2>
            <div class="row" style="margin-left: 22%;">
                <p style="font-size: 20px;"> Menjadi sumber informasi terlengkap dan terpercaya tentang dunia tanaman bagi masyarakat luas.</p>
            </div>
            <h2 class="fw-bold">Misi Teman Tanaman :</h2>
            <div class="row" style="margin-left: 32%;">
                <p style="font-size: 20px;">Mempopulerkan pengetahuan tentang tanaman, menginspirasi minat berkebun, serta mendukung pelestarian lingkungan hidup.</p>
            </div>
        </div>
    </div>
    <div class="col-md-10" style="margin-left: 13%;">
    <h3>Misi kami adalah</h3>
    <ul style="font-size: 20px;">
        <li>Edukasi: Menyediakan artikel, panduan, dan tutorial tentang berbagai jenis tanaman, cara perawatan, serta tips berkebun yang praktis.</li>
        <li>Inspirasi: Menghadirkan ide-ide kreatif untuk mempercantik ruang hidup Anda dengan tanaman, baik di dalam rumah maupun di taman.</li>
    </ul>
    <div class="row">
        <h2>Bergabunglah dengan Kami</h2>
        <p style="font-size: 20px;">Kami mengundang Anda untuk menjelajahi website kami, membaca artikel-artikel yang kami tawarkan, dan bergabung dalam komunitas kami. Jangan ragu untuk berinteraksi melalui komentar atau media sosial. Setiap pertanyaan dan saran dari Anda sangat berarti bagi kami.

            Terima kasih telah mengunjungi Teman Tanaman. Mari bersama-sama menjadikan dunia ini lebih hijau dan indah dengan tanaman!

            Silakan sesuaikan nama website dan beberapa detail lainnya sesuai kebutuhan Anda!</p>

    </div>
    </div>
    <div class="container mt-2">
        <h1 class="mb-4" style="margin-left: 2%;">Kontak Kami</h1>
        <div class="row" style="margin-left: 1%;">
            <div class="col-lg-6">
                <h4>Informasi Kontak</h4>
                <ul class="list-unstyled">
                    <li style="font-size: 20px;"><i class="bi bi-geo-alt fs-1"></i> Alamat: Jl. Tanaman No.123, Amerisya usyara</li>
                    <li style="font-size: 20px;"><i class="bi bi-envelope fs-1"></i> Email: info@temantanaman.com</li>
                    <li style="font-size: 20px;"><i class="bi bi-telephone fs-1"></i> Telepon: +62 21 12345678</li>
                    <li style="font-size: 20px;"><i class="bi bi-instagram fs-1"></i> officialtemantanaman_</li>
                </ul>
            </div>
        </div>
    </div>
   <footer class="bg text-center text-lg-start mt-5" style="background-color: #50C878; ">
    <div class="container p-4">
        <div class="row">
            <!-- <div class="col-lg-4 col-md-6 mb-4 mb-md-0" style="margin-left: 20%;">
                <h4 class="text-uppercase text-white" >Navigasi</h4>
                <ul class="list-unstyled mb-0">
                    <li><a href="#" class="text-white">Home</a></li>
                    <li><a href="#" class="text-white">Kategori</a></li>
                    <li><a href="#" class="text-white">Tips Perawatan</a></li>
                    <li><a href="#" class="text-white">Tentang Kami</a></li>
                </ul>
            </div> -->
            <!-- <div class="col-lg-4 col-md-12 mb-4 mb-md-0 text-white">
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
          </div> -->
        </div>
    </div>
    <div class="text-center p-3 bg text-white" style="background-color:  #50C878; ">
       <h2>
        © 2024 Teman Tanaman. All rights reserved.
      </h2>

    </div>
</footer>
@endsection
