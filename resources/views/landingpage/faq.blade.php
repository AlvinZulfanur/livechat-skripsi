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
  <nav class="navbar bg-white shadow-sm fixed-top">
      <div class="container">
          <img src="img/LOGO KARTANU.png" alt="" width="5%" height="5%">
        <div class="text-black list-unstyled d-flex align-items-center justify-content-around  gap-3">
          <li><a id="nav" class="text-decoration-none nav-link {{ Request::is('/home') ? 'active' : '' }}" href="/">Home</a></li>
          <li><a id="nav" class="text-decoration-none" href="#fitur">Fitur</a></li>
          <li><a id="nav" class="text-decoration-none" href="#produk">Produk</a><li>
          <li><a id="nav" class="text-decoration-none" href="/faq">FAQ</a><li>
        </div>
        <div>
          <button class="btn btn-success rounded-3">Download</button>
        </div>
      </div>
  </nav>
  {{-- Faq --}}
      <div class="accordion" style="margin-top: 5%" id="accordionExample">
      <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Apa itu KARTANU?
      </button>
     </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        KARTANU merupakan sebuah platform yang diprakarsai langsung oleh PBNU, sebagai bentuk realiasi transformasi teknologi dalam pendataan warga Nahdliyyin.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Bagaimana cara mendapatkan KARTANU?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ol>
          <li>
            Pilih “Pendaftaran KARTANU” di Home Aplikasi.
          </li>
          <li>
            Isi Formulir Data NU.
          </li>
          <li>
            Isi Formulir Data Pribadi.
          </li>
          <li>
            Isi Form Alamat.
          </li>
          <li>
            Lampirkan Dokumen KTP, KTP+Swafoto.
          </li>
          <li>
            Baca secara seksama “Baiat Anggota NU” dan klik Lanjutkan.
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Apakah pembuatan KARTANU berbayar?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Pembuatan KARTANU melalui Aplikasi sama sekali tidak dipungut biaya.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Bagaimana mekanisme pencetakan KARTANU?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Untuk Pencetakan KARTANU dapat dilakukan di Pengurus Cabang Nahdlatul Ulama sesuai dengan domisili yang didaftarkan.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Apakah KARTANU dapat digunakan untuk membayar KRL, Jalan Tol?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Untuk saat ini KARTANU hanya digunakan sebagai Kartu Identitas warga NU.
      </div>
    </div>
  </div>
</div>
  {{-- Faq --}}
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #10965e;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://twitter.com/infokartanu_id?t=I4JF5qHjilMzIBMRaEjr8w&s=09"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-twitter"></i
      ></a>
      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://www.instagram.com/infokartanu/"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-instagram"></i
      ></a>
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://www.youtube.com/channel/UCO0De1cS6h9cl2DY0RKobXQ"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-youtube"></i
      ></a>
      <!-- Linkedin -->
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->
  <!-- Copyright -->
  <div class="text-center text-white p-3" style="background-color: #0dad6bfd;">
    © 2022 Copyright:
    <p class="text-white">PT Tujjar Gung Persada</p>
  </div>
  <!-- Copyright -->
</footer>
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



