<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Administrator</title>
  <link rel="icon" href="{{ asset('logofhupr.png') }}" type="image/icon type">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('template/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('template/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('template/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Administrator</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('logofhupr.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8;">
      <span class="brand-text font-weight-light">Administrator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-address-card"></i>
              <p>
                Profil
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/tentangkami" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tentang Kami</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kagama" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>K. Agama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kdalamnegeri" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>K. Dalam Negeri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kwirausaha" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>K. Kewirausahaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kkomunikasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>K. K., Media dan Informasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kkpolitik" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>K. K. Politik dan Hukum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kkajian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>K. K. Strategis dan Advokasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kksosial" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>K. K. Sosial dan L. H.</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kluarnegeri" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>K. Luar Negeri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kpemuda" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>K. Pemuda dan Olahraga</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kperempuan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>K. P. Perempuan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/ksdm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>K. Pengembangan SDM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/ksekretariat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>K. Sekretariat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/unitpenerangan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit Penerangan Internal</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/berita" class="nav-link">
              <i class="nav-icon far fa-newspaper"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/donasi" class="nav-link">
              <i class="nav-icon fas fa-donate"></i>
              <p>
                Donasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/gdesign" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Grand Design
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/kajian" class="nav-link">
              <i class="nav-icon fab fa-researchgate"></i>
              <p>
                Kajian
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/regulasi" class="nav-link">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                Regulasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/ukm" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                UKM
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/webinar" class="nav-link">
              <i class="nav-icon fas fa-book-reader"></i>
              <p>
                Webinar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/logout" class="nav-link alert_notif">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('template/dist/js/demo.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('template/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('template/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('template/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('template/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>

{{-- ckeditor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>

<!-- PAGE SCRIPTS -->
<script src="{{ asset('template/dist/js/pages/dashboard2.js') }}"></script>

<script>
  ClassicEditor.create(document.querySelector('#editor'), {
    removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'MediaEmbed'],
  })
  .catch( error => {
    console.error( error );
  } );

  ClassicEditor.create(document.querySelector('#editor1'), {
    removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'MediaEmbed'],
  })
  .catch( error => {
    console.error( error );
  } );
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<?php if(@$_GET['login']){ ?>
  <script>
    Swal.fire({            
      icon: 'success',                   
      title: 'Sukses',    
      text: 'Berhasil Login',                        
      timer: 3000,                                
      showConfirmButton: false
      })
  </script>
  <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_GET['login']); } ?>

<script>
  $('.alert_notif').on('click',function(){
    var getLink = $(this).attr('href');
    Swal.fire({
      title: "Yakin untuk Log Out?",            
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      confirmButtonText: 'Ya',
      cancelButtonColor: '#3085d6',
      cancelButtonText: "Batal"
    }).then(result => {
    //jika klik ya maka arahkan ke proses.php
      if(result.isConfirmed){
        window.location.href = getLink
      }
    })
      return false;
    });
</script>
</body>
</html>
