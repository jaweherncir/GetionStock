<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  
  <!-- Google Font: Source Sans Pro -->
  <!-- Font Awesome -->
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
    input:invalid {
  border: 2px dashed red;
}

input:valid {
  border: 2px solid black;
}
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php  require_once "navbar.php" ;?>

  <!-- Main Sidebar Container -->
  <?php  require_once "header.php" ;?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Clients</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Liste clients</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
       <!-- /.card -->

       <div class="card">

        <div class="card-header" style="background-color: rgb(4, 25, 253);">
      
        </div>
        <div class="card-header" >
            <a class="btn btn-app bg-success" data-toggle="modal" data-target="#modalSubscriptionForm">
                <span class="badge bg-purple">891</span>
                <i class="fas fa-users" ></i> Ajouter  client
              </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th><center>ClientID</center></th>
              <th><center>Nom</center></th>
              <th><center>Prénom</center></th>
              <th><center>Adresse</center></th>
            
              <th><center>Téléphone</center></th>
              <th><center>Email</center></th>
              <th></th>
              <th></th>
            </tr>
            </thead>
            <tbody>
       
           
            <tr>
              <td><center>client1</center></td>
              <td><center>Ali</center></td>
              <td><center>Ncir</center></td>
              <td><center>Tunise</center></td>
              
              <td><center>20113786</center></td>
              <td><center><button type="button" class="btn btn-primary" disabled="true">jaweherncir@gmail.com</button></center></td>
              <td><center>
                <i class="fa fa-pencil" aria-hidden="true" style="color: rgb(84, 156, 11);width: 10px;"
                data-toggle="modal" data-target="#modifier"
                >
                </i></center></td>
             
              <td><center><i class="fa fa-trash" aria-hidden="true" 
              style="color: rgb(240, 7, 7);width: 10px;"
              data-toggle="modal" data-target="#supprimer"
              ></i></center></td>
            </tr>
     
            </tbody>
            <tfoot>
            <tr>
              <th><center>ClientID</center></th>
              <th><center>Nom</center></th>
              <th><center>Prénom</center></th>
              <th><center>Adresse</center></th>
              <th><center>Téléphone</center></th>
              <th><center>Email</center></th>
              <th></th>
              <th></th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

















        
      </div><!-- /.container-fluid -->




      
    </section>
    <!-- /.content new client -->
<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center" style="background-color: rgb(4, 25, 253);">
        <h4 class="modal-title w-100 font-weight-bold">Nouvelle Client</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">


        <form>
                <div class="md-form mb-5">
                  <i class="fas fa-user prefix grey-text"></i>
                  <label data-error="wrong" data-success="right" for="form3" >Nom</label>
                  <input type="text" id="form3" class="form-control validate"required>
                
                
              
                  <i class="fas fa-user prefix grey-text"></i>
                  <label data-error="wrong" data-success="right" for="form3">Prénom</label>
                  <input type="text" id="form3" class="form-control validate"required>
                
            
            
                  <i class="fa-solid fa-location-dot"></i>
                  <label data-error="wrong" data-success="right" for="form3">Adresse</label>
                  <input type="text" id="form3" class="form-control validate"required>
                
              
                  <i class="fas fa-phone prefix grey-text"></i>
                  <label data-error="wrong" data-success="right" for="form3">Téléphone</label>
                  <input type="text" id="form3" class="form-control validate"required>
                
            
          
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <label data-error="wrong" data-success="right" for="form2">Email</label>
                  <input type="email" id="form2" class="form-control validate"required>
                
                </div>
        </form>



      </div>
      
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-primary">Ajouter </button>
          </div>
    </div>
  </div>
    </div>
<!-- /.content modifier client -->
    <div class="modal fade" id="modifier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center" style="background-color: rgb(84, 156, 11);">
              <h4 class="modal-title w-100 font-weight-bold">Mofication</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-3">
              <div class="md-form mb-5">
                <i class="fas fa-user prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="form3">Nom</label>
                <input type="text" id="form3" class="form-control validate">
              
              
            
                <i class="fas fa-user prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="form3">Prénom</label>
                <input type="text" id="form3" class="form-control validate">
              
          
          
                <i class="fa-solid fa-location-dot"></i>
                <label data-error="wrong" data-success="right" for="form3">Adresse</label>
                <input type="text" id="form3" class="form-control validate">
              
            
                <i class="fas fa-phone prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="form3">Téléphone</label>
                <input type="text" id="form3" class="form-control validate">
              
          
        
                <i class="fas fa-envelope prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="form2">Email</label>
                <input type="email" id="form2" class="form-control validate">
              
              </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-success">Valider </button>
            </div>
          </div>
        </div>
    </div>
<!-- /.content delete client -->
<div class="modal fade" id="supprimer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center" style="background-color:  rgb(176, 25, 5);">
              <h4 class="modal-title w-100 font-weight-bold">Suppression</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-3">
              <div class="md-form mb-5">
             
                <center><label data-error="wrong" data-success="right" for="form3">vous êtes sûr!!!!</label></center>
               
              
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-danger">Valider </button>
            </div>
          </div>
        </div>
    </div>


  </div>


  <?php  require_once "footer.php" ;?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->


<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>
</html>
