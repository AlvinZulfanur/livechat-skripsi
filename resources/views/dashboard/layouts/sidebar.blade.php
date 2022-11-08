<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/hero*') ? 'active' : '' }}" href="/dashboard/hero">
              <span data-feather="file" class="align-text-bottom"></span>
              Hero
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/statistik*') ? 'active' : '' }}" href="/dashboard/statistik">
              <span data-feather="star" class="align-text-bottom"></span>
              Rating
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/fitur*') ? 'active' : '' }}" href="/dashboard/fitur">
              <span data-feather="file" class="align-text-bottom"></span>
              Keunggulan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/produk*') ? 'active' : '' }}" href="/dashboard/produk">
              <span data-feather="archive" class="align-text-bottom"></span>
              Produk
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/mitra*') ? 'active' : '' }}" href="/dashboard/mitra">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Mitra
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/edit*') ? 'active' : '' }}" href="/dashboard/edit">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Edit Profile
            </a>
          </li> --}}
        </ul>
      </div>
    </nav>