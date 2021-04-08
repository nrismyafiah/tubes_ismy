<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
<button class="w-100 btn btn-lg btn-primary" style="font-size: 15px; background-color: blue; color: black" type="submit"> <a href="home.php">
    Back </a> </button>

<div class="container" style="text-align: center; margin-top: 20px ">
<h3> Tabel Suhu dan Kelembapan </h3>

<div class="card text-center" style="text-align: center; margin-top: 20px; width: 100%">
<div style="display: flex;">
<table border="3" style="text-align: center; width: 100%" ">
	<tr>
		<th> No </th>
		<th> Waktu </th>
		<th> Suhu </th>
		<th> Kelembapan </th>
	</tr>

	<?php

	include "koneksitabel.php";
	$no=1;
	$sql = mysqli_query($konek, "SELECT * FROM tb_sensor1");
	while ($tampil = mysqli_fetch_array($sql)){
		echo "
		<tr>
			<td>$no</td>
			<td>$tampil[waktu]</td>
			<td>$tampil[suhu]</td>
			<td>$tampil[kelembapan]</td>

		</tr>
		";

		$no++;	
	}
	?>
	 </div>
</table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
