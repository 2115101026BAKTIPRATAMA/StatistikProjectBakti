<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Distribusi Frekuensi</title>

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
            <h1 class="m-0">Distribusi Frekuensi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

     <section class="content">
      <div class="container-fluid">
      <!-- START DATA -->
      <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{url('DistribusiF/create')}}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">Data</th>
                            <th class="col-md-4">Frekuensi</th>
                            
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = $data->firstItem()?>
                        @foreach ($data as $item)
                        <tr>
                        <td>{{$i}}</td>
                            <td>{{$item->data}}</td>
                            <td>{{$item->Frekuensi}}</td>
                            
                            <td>
                                <a href='{{url('DistribusiF/'.$item->data.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                                <a href='' class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr>
                        <?php $i++?>
                        @endforeach
                    </tbody>
                </table>
                {{$data->withQueryString()->links()}}
          </div>
          <!-- AKHIR DATA -->
              
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
