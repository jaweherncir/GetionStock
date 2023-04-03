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
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php  require_once "navbar.php" ;?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Administrateur</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Amado Ibrahim</a>
        </div>
      </div>



      <?php  require_once "header.php" ;?>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Stock</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Mon Stock</a></li>
              <li class="breadcrumb-item active">Gestion De Stock</li>
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

        <div class="card-header" style="background-color: rgb(176, 25, 5);">
      
        </div>
        <div class="card-header" >
            <a  href="nouvelleProduit.php"class="btn btn-app bg-success">
                <span class="badge badge-danger">300</span>
                <i class="fas fa-barcode"></i> Nouvelle Produit
              </a>
           
        </div>
        <!-- /.card-header -->
        <div class="card-body" >
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Designation de produit</th>
              
              <th>Quantité</th>
              <th>Référence</th>
              <th>Prix unitaire</th>
              <th>Date D'importation</th>
              <th>Date D'exportation</th>
              <th></th>
              <th></th>
            </tr>
            </thead>
            <tbody>
       
           
            <tr>
              <td>Misc</td>
              <td><center><button type="button" class="btn btn-danger" disabled="true">50</button></center></td>
              <td>PSP</td>
              <td>-</td>
              <td><center><button type="button" class="btn btn-warning" disabled="true">02/02/2022</button></center></td>
              <td>-</td>
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
              <th>Designation de produit</th>
              
              <th>Quantité</th>
              <th>Référence</th>
              <th>Prix unitaire</th>
              <th>Date D'importation</th>
              <th>Date D'exportation</th>
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
    <!-- /.content modifier produit -->
    <div class="modal fade" id="modifier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center"style="background-color: rgb(84, 156, 11);">
                <h4 class="modal-title w-100 font-weight-bold">Modifier Produit</h4>
                <a href="newStock.php">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </a>
              </div>
              
              <div class="modal-body mx-3">

              <form action="#" method="POST">

              
                        <div class="md-form mb-5">
                       
                          <label data-error="wrong" data-success="right" for="form3" >Nom Produit</label>
                          <input type="text" id="form3" class="form-control validate"required>
                        
                        
                      
                  
                          <label data-error="wrong" data-success="right" for="form3">Description Produit</label>
                          <input type="text" id="form3" class="form-control validate"required>
                        
                          <label data-error="wrong" data-success="right" for="form3">Produit Unit</label>
                          <input type="text" id="form3" class="form-control validate"required>
                    
                    
                          <label data-error="wrong" data-success="right" for="form3">Prix Produit</label>
                          <input type="text" id="form3" class="form-control validate"required>
                        
                      
                          
                          <label data-error="wrong" data-success="right" for="form3"> Quantité Produit </label>
                          <input type="text" id="form3" class="form-control validate"required>
                        
                    
                          <label data-error="wrong" data-success="right" for="form2">Categorie</label>
                          <input type="text" id="form2" class="form-control validate"required>
                         
                          <label data-error="wrong" data-success="right" for="form2">Produit stockeé</label>
                          <input type="text" id="form2" class="form-control validate"required>
                          <label data-error="wrong" data-success="right" for="form2">Autre detail</label>
                          <input type="text" id="form2" class="form-control validate"required>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-success">Ajouter </button>
                  </div>
                </form>


            </div>
            
              
              
                
            </div>
          </div>
        </div>
    



    </div>
    <!-- /.content delete Produit -->
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
            <form action="#" method="POST">
                    <div class="md-form mb-5">
                    
                        <center><label data-error="wrong" data-success="right" for="form3">vous êtes sûr!!!!</label></center>
                      
                      
                      </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-danger">Valider </button>
                    </div>
               </form>
          </div>
        </div>
</div>




  </div>


  <!-- /.control-sidebar -->
  <?php  require_once "footer.php" ;?>
 

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
