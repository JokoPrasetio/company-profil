<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard/tentangKami" class="nav-link {{ Request::is('dashboard/tentangKami*') ? 'active' : '' }}" aria-current="page">
           Tentang Kami
          </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard/visiMisi" class="nav-link {{ Request::is('dashboard/visiMisi*') ? 'active' : '' }}" aria-current="page">
            Visi dan Misi
          </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard/produkKami" class="nav-link {{ Request::is('dashboard/produkKami*') ? 'active' : '' }}" aria-current="page">
            Produk Kami
          </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard/kontakKami" class="nav-link {{ Request::is('dashboard/kontakKami*') ? 'active' : '' }}" aria-current="page">
            Kontak
          </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard/timKami" class="nav-link {{ Request::is('dashboard/timKami*') ? 'active' : '' }}" aria-current="page">
            Tim Kami
          </a>
        </li>
      </ul>
    </div>
  </nav>