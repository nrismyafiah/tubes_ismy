<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Monitoring Suhu dan Kelembapan</title>

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
    <button class="w-100 btn btn-lg btn-primary" style="font-size: 15px; background-color: blue; color: black" type="submit"> <a href="home.php">
    Back </a> </button>
    <div class="container" style="text-align: center; margin-top: 20px ">
       
      <h2>Monitoring Suhu dan Kelembapan <br> Secara Realtime</h2>

      <div style="display: flex;">

      <!-- menampilkan nilai suhu -->

      <div class="card text-center" style="width: 30%">
        <div class="card-header" style="font-size: 30px; font-weight: bold; background-color: green; color: white">
        Suhu
        </div>
      <div class="card-body">
       <h1> <span id="ceksuhu"> 0 </span> </h1>
      </div>
      </div>
      <!-- menampilkan nilai Kelembapan -->

      <div class="card text-center" style="width: 30%">
        <div class="card-header" style="font-size: 30px; font-weight: bold;background-color: green; color: white">
         Kelembapan
        </div>
      <div class="card-body">
       <h1> <span id="cekkelembapan"> 0 </span> </h1>
      </div>
      </div>
      <!--Akhir  menampilkan nilai Kelembapan -->

        <div class="card text-center" style="width: 40%">
        <div class="card-header" style="font-size: 30px; font-weight: bold;background-color: green; color: white">
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
  </body>
</html>