<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Monitoring</title>

  <!-- Bootstrap core CSS -->
  <link href="startbootstrap-simple-sidebar-master/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="startbootstrap-simple-sidebar-master/css/simple-sidebar.css" rel="stylesheet">

    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <!-- Load Otomatis -->
    <script type="text/javascript">
      
      $(document).ready( function() {

        setInterval( function() {
          $("#ceksuhu").load('ceksuhu.php');
          $("#cekkelembapan").load('cekkelembapan.php');
          $("#waktu").load('waktu.php');
        }, 1000);

      } );
    </script>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Sistem Monitoring </div>
      <div class="list-group list-group-flush">
        <a href="dashboard.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="Tabel.php" class="list-group-item list-group-item-action bg-light">Tabel</a>
        <a href="grafik.php" class="list-group-item list-group-item-action bg-light">Grafik</a>
        <a href="index.php" class="list-group-item list-group-item-action bg-light">log Out</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
    <div class="container" style="text-align: center; margin-top: 50px ">
       
      <h2>Monitoring Suhu dan Kelembapan <br> Secara Realtime</h2>

      <div style="display: flex;">

      <!-- menampilkan nilai suhu -->

      <div class="card text-center" style="width: 30.3%">
        <div class="card-header" style="font-size: 30px; font-weight: bold; background-color: black; color: white">
        Suhu
        </div>
      <div class="card-body">
       <h1> <span id="ceksuhu"> 0 </span> </h1>
      </div>
      </div>
      <!-- menampilkan nilai Kelembapan -->

      <div class="card text-center" style="width: 30.3%">
        <div class="card-header" style="font-size: 30px; font-weight: bold;background-color: black; color: white">
         Kelembapan
        </div>
      <div class="card-body">
       <h1> <span id="cekkelembapan"> 0 </span> </h1>
      </div>
      </div>

            <div class="card text-center" style="width: 30.3%">
        <div class="card-header" style="font-size: 30px; font-weight: bold;background-color: black; color: white">
         Update terakhir
        </div>
      <div class="card-body">
       <h1> <span id="waktu"> 0 </span> </h1>
      </div>
      </div>
      <!--Akhir  menampilkan nilai Kelembapan -->

      </div>

      <!--gambar -->
      <div class="container" style="padding-top: 20px ">
        <img src="images/suhupng.png" width="350" height="200">
      </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="startbootstrap-simple-sidebar-master/vendor/jquery/jquery.min.js"></script>
  <script src="startbootstrap-simple-sidebar-master/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
