<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aplikasi Kost</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">PENGGUNA</li>
          <li class="nav-item">
            <a href="/admin" class="nav-link {{ (str_contains($judul, 'Administrator'))? "active" : "" }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Administrator
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pemilik" class="nav-link {{ (str_contains($judul, 'Pemilik'))? "active" : "" }}">
              <i class="nav-icon fas fa-crown"></i>
              <p>
                Pemilik
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/penyewa" class="nav-link {{ (str_contains($judul, 'Penyewa'))? "active" : "" }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Penyewa
              </p>
            </a>
          </li>
          <li class="nav-header">PROPERTI</li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link {{ (str_contains($judul, 'Biaya Tambahan'))? "active" : "" }}">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                Biaya Tambahan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link {{ (str_contains($judul, 'Fasilitas'))? "active" : "" }}">
              <i class="nav-icon fas fa-toolbox"></i>
              <p>
                Fasilitas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link {{ (str_contains($judul, 'Kamar'))? "active" : "" }}">
              <i class="nav-icon fas fa-bed"></i>
              <p>
                Kamar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link {{ (str_contains($judul, 'Kost'))? "active" : "" }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Kost
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link {{ (str_contains($judul, 'Peraturan'))? "active" : "" }}">
              <i class="nav-icon fas fa-info"></i>
              <p>
                Peraturan
              </p>
            </a>
          </li>
          <li class="nav-header">AKUN</li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="fa fa-sign-out"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>