<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
if (!empty($username) && !empty($password)) 
	{
	$sql = mysqli_query($konek, "SELECT * FROM loginku WHERE username='$username' AND password='$password'");
	$result = mysqli_num_rows($sql);
	if ($result) 
		{ 
		echo "Anda berhasil masuk!";
		echo "Klik <a href='home.php'> disini </a> untuk melanjutkan";
		} 
		else 
		{ 
			echo "username dan Password salah";
		}
	}
?>