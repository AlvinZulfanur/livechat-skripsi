<!-- Navbar -->
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