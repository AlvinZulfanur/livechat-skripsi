<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
    <title>KARTANU</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="/img/KARTANU.ico">
    {{-- @vite('resources/css/app.css') --}}
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="ee005141-2bdb-43e2-bb64-e20fd6b7ad45";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>
<body>
    <!-- Navbar -->
    @include('landingpage.navbar')
    <!-- End Navbar -->
    <!-- Jumbotron -->
    @include('landingpage.jumbotron')
    <!-- End Jumbotron -->
     <!-- Statistik -->
     @include('landingpage.statistik')
    <!-- End Statistik -->
    <!-- Fitur -->
    <div id="fitur" class="container mt-3">
      @include('landingpage.fitur')
      </div>
    <!-- End Fitur -->
    <!-- Produk -->
    <div id="produk" class="container mt-3">
      <h3 class="text-center mb-4"><span>Produk Utama #KARTANU</span></h3>
      @include('landingpage.produk')
    </div>
    <button id="btn-ftr" class="btn btn-outline-success">Lihat Fitur Lainnya</button>
    <!-- End Produk -->
    <!-- Merchant -->
    <div id="container">
      <h3 class="text-center mt-5"><span> Mitra Kami</span></h3>
      <div id="merchant">
        @foreach ($mitras as $mitra)
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"><img width="75" src="{{ asset('storage/' . $mitra->photo) }}" alt=""></div>
        @endforeach
        {{-- <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"><img src="img/bri.png" alt=""></div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"><img src="img/mandiri.png" alt=""></div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"><img src="img/dana.png" alt=""></div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"><img src="img/gopay.png" alt=""></div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"><img width="75" src="img/Alfamart.png" alt=""></div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"><img width="75" src="img/Indomaret.png" alt=""></div> --}}
      </div>
    </div>
    <!-- End Merchant -->
    {{-- video --}}
    <div class="title">
      <h3 class="text-center my-3"><span>Tutorial #PunyaKARTANU</span></h3>
    </div>
    <div class="video mt-4 col-md-12 text-center">
      <iframe width="80%" height="400" src="https://www.youtube.com/embed/q2zhHMTgfi0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    {{-- end video --}}
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
    <!-- chatbox -->
    {{-- @include('landingpage.chatbot') --}}
    {{-- <input type="checkbox" id="click">
      <label for="click">
      <i class="bi-chat-fill"></i>
      </label>
      <div class="wrapper">
         <div class="head-text">
            Let's chat
         </div>
         <div class="chat-box">
            <div class="desc-text">
               Silahkan isi form dibawah ini
            </div>
            <form action="/home" method="post">
              @csrf
               <div class="field">
                  <input type="text" class="input-value" placeholder="Username" required>
               </div>
               <div class="field start-chat">
                  <button type="submit" class="button-start">Start Chat</button>
               </div>
            </form>
         </div>
      </div> --}}
      <!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6307905254f06e12d890c03e/1gbaonhhl';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> --}}
<!--End of Tawk.to Script-->
   </body>
    <!-- End chatbox -->
    <script src="js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="/script.js"></script>
  <script>
    AOS.init();
  </script>
   {{-- @vite('resources/js/app.js') --}}
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                Echo.channel('livechat')
                .listen('NewMessage', (e) => {
                console.log(e);
                });
        });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</body>
</html>