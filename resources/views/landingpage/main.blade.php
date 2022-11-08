<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KARTANU</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <!-- Navbar -->
    @include('landingpage.navbar')
    <!-- End Navbar -->
    <!-- Jumbotron -->
    <div id="jumbotron" class="d-flex align-items-center">
      <div class="col-lg-6">
        <div class="ms-5">
          <h1 class="heading">KARTANU (Kartu Tanda Anggota Nahdlatul Ulama)</h1>
          <p class="p-1">Kartanu adalah akronim dari Kartu Tanda Anggota Nahdlatul Ulama. Kartu ini merupakan kartu identitas yang dimiliki oleh setiap warga NU. </p>
        </div>
        <div class="ms-5">
          <a href="/"><img src="img/download-google-play.png" alt="" width="150"></a>
          <a href="/"><img src="img/download-app-store.png" alt="" width="160"></a>
        </div>
      </div>
      <div class="row d-flex" data-aos="fade-left" data-aos-duration="1700">
        <div class="col-lg-6">
          <div class="image">
            <img src="img/KARTANU-UI.png" width="600"  alt="Tampilan depan kartanu">
          </div>
        </div>
      </div>
    </div>
    <!-- End Jumbotron -->
     <!-- Statistik -->
     <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="statistik">
            <div>
              <h5>Sudah diunduh</h5>
              <p>100.000+</p>
            </div>
            <div>
              <h5>Rating Pengguna</h5>
              <p>4,7/5</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Statistik -->
    <!-- Fitur -->
    <div id="fitur" class="container mt-3">
      <div class="row">
        <h3 class="text-center my-3"><span>Kenapa Harus #PunyaKARTANU</span></h3>
        <div class="col-lg-4 my-2 text-center">
          <div class="card rounded-4" data-aos="zoom-in" data-aos-duration="1700" data-offset="500" >
            <div class="card-body">
              <h5 class="card-title"><img src="img/Dompet.png" alt=""></i></h5>
              <h6 class="card-subtitle mb-2">Alat Pembayaran</h6>
              <p class="card-text">Alat untuk segala pembayaran meliputi
                Pembayaran Listrik, BPJS, PDAM
                Pembelian Pulsa, Paket Internet, Telkom
                dll.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 my-2 text-center">
          <div class="card rounded-4"  data-aos="zoom-in" data-aos-duration="1700" data-offset="500">
            <div class="card-body">
              <h5 class="card-title"><img src="img/Tangan.png" alt=""></i></h5>
              <h6 class="card-subtitle mb-2">Tabungan Masa Depan</h6>
              <p class="card-text">Berbagai macam bentuk tabungan seperti Tazak, Takur, Tawaf, Tahur, Kolam dan Tabungan infaq & Sodaqoh.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 my-2 text-center">
          <div class="card rounded-4"  data-aos="zoom-in" data-aos-duration="1700" data-offset="500">
            <div class="card-body">
              <h5 class="card-title"><img src="img/Orang.png" alt=""></i></h5>
              <h6 class="card-subtitle mb-2">Database Warga NU</h6>
              <p class="card-text">Tempat menyimpan berbagai
                Data Warga NU seperti identitas,
                profesi, pendidikan, penghasilan,
                dan induk organisasi.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 my-2 text-center">
          <div class="card rounded-4"  data-aos="fade-right" data-aos-duration="1700" data-offset="500">
            <div class="card-body">
              <h5 class="card-title"><img src="img/Al-quran.png" alt=""></i></h5>
              <h6 class="card-subtitle mb-2">Amaliyah NU</h6>
              <p class="card-text">Segala kebutuhan ibadah seperti
                Tahlil, Sholawat, Baca Al-Quran,
                Arah Kiblat untuk sholat. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 my-2 text-center">
          <div class="card rounded-4"  data-aos="fade-left" data-aos-duration="1700" data-offset="500">
            <div class="card-body">
              <h5 class="card-title"><img src="img/Toko.png" alt=""></i></h5>
              <h6 class="card-subtitle mb-2">Toko KARTANU</h6>
              <p class="card-text">Tempat Jual Beli antara
                Warga NU sebagai upaya
                terciptanya Kemandirian Ummat.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 my-2 text-center">
          <div class="card rounded-4"  data-aos="fade-left" data-aos-duration="1700" data-offset="500">
            <div class="card-body">
              <h5 class="card-title"><img src="img/icon news.png" alt=""></i></h5>
              <h6 class="card-subtitle mb-2">Kanal Portal Berita</h6>
              <p class="card-text">aplikasi KARTANU juga menyediakan portal berita yang terintegrasi dengan NU Online </p>
            </div>
          </div>
        </div>
        </div>
      </div>
    <!-- End Fitur -->
    <!-- Produk -->
    <div id="produk" class="container mt-3">
      <h3 class="text-center mb-4"><span>Fitur utama #KARTANU</span></h3>
      <div class="row">
        <div class="col-lg-12">
          <div id="card-1" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1200">
            <div>
              <img src="img/SENSUS-WARGA-NAHDLIYIN.png" width="200" alt="">
            </div>
            <div>
              <h6>Daftar Anggota KARTANU</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non massa proin imperdiet mattis tincidunt amet. 
              </p>
              <button class="btn btn-success">Download</button>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div id="card-1" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1200">
            <div>
              <h6>Belanja berbagai
                kebutuhan</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non massa proin imperdiet mattis tincidunt amet. 
              </p>
              <button class="btn btn-success">Download</button>
            </div>
            <div>
              <img src="img/TOKO-NU.png" width="200" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div id="card-1" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1200">
            <div>
              <img src="img/KARTANU-SALDO.png" width="200" alt="">
            </div>
            <div>
              <h6>Pembayaran dan isi
              saldo</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non massa proin imperdiet mattis tincidunt amet. 
              </p>
              <button class="btn btn-success">Download</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button id="btn-ftr" class="btn btn-outline-success">Lihat Fitur Lainnya</button>
    <!-- End Produk -->
    <!-- Merchant -->
    <div id="container">
      <h3 class="text-center mt-5"><span> Merchant Kami</span></h3>
      <div id="merchant">
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"><img src="img/bni.png" alt=""></div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"><img src="img/bri.png" alt=""></div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"><img src="img/mandiri.png" alt=""></div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"><img src="img/dana.png" alt=""></div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"><img src="img/gopay.png" alt=""></div>
      </div>
    </div>
    <!-- End Merchant -->
    <!-- Footer -->
    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Fitur</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Produk</a></li>
        </ul>
        <p class="text-center">&copy; 2022 KARTANU.id</p>
        <img class="text-center" src="img/LOGO KARTANU.png" alt="">
      </footer>
    </div>
    <!-- End Footer -->
    @include('landingpage.chatbot')
    <script src="js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="script.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>