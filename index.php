<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Laundry Bersih - Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <img src="img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">Laundry Bersih</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForms" aria-expanded="true"
          aria-controls="collapseForms">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Form</span>
        </a>
        <div id="collapseForms" class="collapse" aria-labelledby="heading" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Form</h6>
            <a class="collapse-item" href="f_jasa.php">Form tambah jasa</a>
            <a class="collapse-item" href="f_masuk.php">Form Job Masuk</a>
            
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tables</h6>
            <a class="collapse-item" href="datajasa.php">Table Jasa</a>
            <a class="collapse-item" href="datamasuk.php">Table Masuk</a>
            <a class="collapse-item" href="datasabun.php">Table Sabun</a>
          </div>
        </div>
      </li>
      
      
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            
            
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Admin</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.html">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <?php
            include 'libs/conn.php';
            
            $data = MySQLi_query($mysqli,"SELECT COUNT(status) from t_masuk where status='Dalam Proses'");
            $d = mysqli_fetch_array($data)

            
            ?>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Dalam Proses</div>
                      <div class="h2 mb-0 font-weight-bold text-gray-800"><?php echo $d['COUNT(status)']; ?></div>
                      <td> </td>

                    </div>
                    
                  </div>
                </div>

                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Siap Diambil</div>
                      <div class="h2 mb-0 font-weight-bold text-gray-800"><?php echo $d['COUNT(status)']; ?></div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-success"></i>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            
          
            <!-- Sabun -->
            <div class="col-xl-8 col-lg-7 mb-4">
              <div class="card mb-4">
                
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Sabun</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Sabun (ml)</th>
                        <th>Softener (ml)</th>
                        <th>Parfum (ml)</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <?php
  

  include 'libs/conn.php';
  $no = 1;
  $data = MySQLi_query($mysqli,"SELECT * from t_sabun");
  while ($d = mysqli_fetch_array($data)){
  ?>
  <tr>
    <td><?php echo $d['sabun']; ?></td>
    <td><?php echo $d['softener']; ?></td>
    <td><?php echo $d['parfum']; ?></td>
    
    <td><a href="e_sabun.php?id=<?php echo $d['sabun']?>" class="btn1">Edit</a>
    

  </tr>
<?php }
?>


                  
                    
                  </table>
                </div>
              
                <a class="m-0 float-right btn btn-danger btn-sm" href="f_masuk.php">Input Pesanan <i
                      class="fas fa-chevron-right"></i></a>
              </div>
            </div>



            <!-- Siap ambil -->
            <div class="col-lg-12">
              <div class="card mb-4">
                
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Jasa Siap Diambil</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>ID TRANS</th>
                        <th>Tanggal Masuk</th>
                        <th>Nama</th>
                        <th>Jasa</th>
                        <th>Berat/Jumlah</th>                    
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                <?php
  

  include 'libs/conn.php';
  $no = 1;
  $data = MySQLi_query($mysqli,"SELECT * from t_masuk where status='Siap Ambil'");
  while ($d = mysqli_fetch_array($data)){
  ?>
  <tr>
    <td><?php echo $d['id_trans']; ?></td>
    <td><?php echo $d['tgl_masuk']; ?></td>
    <td><?php echo $d['nama']; ?></td>
    <td><?php echo $d['jasa']; ?></td>
    <td><?php echo $d['berat']; ?></td>
    <td><?php echo $d['total']; ?></td>
    <td><?php echo $d['status']; ?></td>
    <td><a href="act/u_sudahambil.php?id=<?php echo $d['id_trans']?>" class="btn2" > >> Sudah Diambil</a></td>
    

  </tr>
<?php }
?>

                  </table>
                </div>
              </div>
              </div> 
              </div>
            </div>
            
            
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; 2020 - developed by
              <b><a href="" >Ahmad Rizqi F</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
</body>

</html>