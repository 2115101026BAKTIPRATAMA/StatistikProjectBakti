<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="ProjectStatistikBakti/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Statistik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="ProjectStatistikBakti/dist/img/bakti.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Bakti Pratama</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-header">Menu Utama</li>
          <li class="nav-item ">
            <a href="{{url('statistik')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           
              
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Administrator
                <i class="fas fa-angle-left right"></i>
              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://adminlte.io/themes/v3/pages/examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar User</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Pengolahan Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('DataTunggal')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Tunggal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('DistribusiF')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Distribusi Frekwensi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('DeskripsiData')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Deskripsi Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('DataBergolong')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Bergolong</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Tabel Referensi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('chikuadrat')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Z Chi-Kuadrat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('Lilliefors')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Z Lilliefors</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Korelasi 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('ProductMoment')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Moment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('PointBiseral')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Point Biseral</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- <li class="nav-header">EXAMPLES</li> -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Perhitungan Normalitas
                <i class="fas fa-angle-left right"></i>
              </p>
           
            </a>
            
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{url('NormalitasCHIKuadrat')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Normalitas Chi-Kuadrat</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{url('NormalitasCHIKuadratB')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Normalitas Chi-Kuadrat</p>
                          <p>Baru</p>
                  
                </a>
                </li>
                <li class="nav-item">
                <a href="{{url('NormalitasLilliefors')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Normalitas Lilliefors</p>
                </a>
                </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Export Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.export')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ekport Data Bergolong</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ekport Chi-Kuadrat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ekport Lilliefors</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Contoh Form Ajax
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('DataTunggalAjax')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Data Tunggal Ajax
                   
                  </p>
                </a>
                </li>
                  <li class="nav-item">
                    <a href="{{url('Form')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Form Tabel</p>
                    </a>
                  </li>
              </ul>
              </li>
          <li class="nav-header">Link</li>
          <li class="nav-item">
            <a href="https://undiksha.ac.id/" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Undiksha</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://ftk.undiksha.ac.id/" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>FTK</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://undiksha.ac.id/akademik/fakultas/fakultas-teknik-dan-kejuruan/ilmu-komputer/" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informatika/Prodi ILKOM</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>