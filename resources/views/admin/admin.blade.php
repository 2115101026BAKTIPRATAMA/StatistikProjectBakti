<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="ProjectStatistikBakti/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="ProjectStatistikBakti/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="ProjectStatistikBakti/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="ProjectStatistikBakti/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="ProjectStatistikBakti/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="ProjectStatistikBakti/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="ProjectStatistikBakti/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="ProjectStatistikBakti/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="ProjectStatistikBakti/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 

  <!-- Navbar -->
  @include('admin/header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('statistik')}}">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

     <section class="content">
      <div class="container-fluid">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Pengenalan Statistik
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                  </ul>
                </div>
              </div> 
             
              <div class="card-body">
                <div class="tab-content p-0">
                Statistika adalah ilmu yang mempelajari bagaimana merencanakan, mengumpulkan, menganalisis, menginterpretasi, dan mempresentasikan data. Singkatnya, statistika adalah ilmu yang berkenaan dengan data. Istilah 'statistika' (bahasa Inggris: statistics) berbeda dengan 'statistik' (statistic). Statistika merupakan ilmu yang berkenaan dengan data, sedang statistik adalah data, informasi, atau hasil penerapan algoritme statistika pada suatu data. Dari kumpulan data, statistika dapat digunakan untuk menyimpulkan atau mendeskripsikan data; ini dinamakan statistika deskriptif. Sebagian besar konsep dasar statistika mengasumsikan teori probabilitas. Beberapa istilah statistika antara lain: populasi, sampel, unit sampel, dan probabilitas.

Statistika banyak diterapkan dalam berbagai disiplin ilmu, baik ilmu-ilmu alam (misalnya astronomi dan biologi maupun ilmu-ilmu sosial (termasuk sosiologi dan psikologi), maupun di bidang bisnis, ekonomi, dan industri. Statistika juga digunakan dalam pemerintahan untuk berbagai macam tujuan; sensus penduduk merupakan salah satu prosedur yang paling dikenal. Aplikasi statistika lainnya yang sekarang popular adalah prosedur jajak pendapat atau polling (misalnya dilakukan sebelum pemilihan umum), serta hitung cepat (perhitungan cepat hasil pemilu) atau quick count. Di bidang komputasi, statistika dapat pula diterapkan dalam pengenalan pola maupun kecerdasan buatan.

Penggunaan istilah statistika berakar dari istilah istilah dalam bahasa latin modern statisticum collegium ("dewan negara") dan bahasa Italia statista ("negarawan" atau "politikus"). Gottfried Achenwall (1749) menggunakan Statistik dalam bahasa Jerman untuk pertama kalinya sebagai nama bagi kegiatan analisis data kenegaraan, dengan mengartikannya sebagai "ilmu tentang negara (state)". Pada awal abad ke-19 telah terjadi pergeseran arti menjadi "ilmu mengenai pengumpulan dan klasifikasi data". Sir John Sinclair memperkenalkan nama (Statistics) dan pengertian ini ke dalam bahasa Inggris. Jadi, statistika secara prinsip mula-mula hanya mengurus data yang dipakai lembaga-lembaga administratif dan pemerintahan. Pengumpulan data terus berlanjut, khususnya melalui sensus yang dilakukan secara teratur untuk memberi informasi kependudukan yang berubah setiap saat.

Pada abad ke-19 dan awal abad ke-20 statistika mulai banyak menggunakan bidang-bidang dalam matematika, terutama peluang. Cabang statistika yang pada saat ini sangat luas digunakan untuk mendukung metode ilmiah, statistika inferensi, dikembangkan pada paruh kedua abad ke-19 dan awal abad ke-20 oleh [Ronald Fisher] (peletak dasar statistika inferensi), Karl Pearson (metode regresi linear), dan William Sealey Gosset (meneliti problem sampel berukuran kecil). Penggunaan statistika pada masa sekarang dapat dikatakan telah menyentuh semua bidang ilmu pengetahuan, mulai dari astronomi hingga linguistika. Bidang-bidang ekonomi, biologi dan cabang-cabang terapannya, serta psikologi banyak dipengaruhi oleh statistika dalam metodologinya. Akibatnya lahirlah ilmu-ilmu gabungan seperti ekonometrika, biometrika (atau biostatistika), dan psikometrika.

Meskipun ada pihak yang menganggap statistika sebagai cabang dari matematika, tetapi sebagian pihak lainnya menganggap statistika sebagai bidang yang banyak terkait dengan matematika melihat dari sejarah dan aplikasinya. Di Indonesia, kajian statistika sebagian besar masuk dalam fakultas matematika dan ilmu pengetahuan alam, baik di dalam departemen tersendiri maupun tergabung dengan matematika.
                  
                </div>
              </div>    
            </div>
      </div>
    </setion>
             
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="ProjectStatistikBakti/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="ProjectStatistikBakti/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="ProjectStatistikBakti/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="ProjectStatistikBakti/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="ProjectStatistikBakti/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="ProjectStatistikBakti/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="ProjectStatistikBakti/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="ProjectStatistikBakti/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="ProjectStatistikBakti/plugins/moment/moment.min.js"></script>
<script src="ProjectStatistikBakti/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="ProjectStatistikBakti/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="ProjectStatistikBakti/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="ProjectStatistikBakti/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="ProjectStatistikBakti/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="ProjectStatistikBakti/dist/js/pages/dashboard.js"></script>
</body>
</html>
