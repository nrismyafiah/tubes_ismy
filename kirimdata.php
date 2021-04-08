<?php 
	$konek = mysqli_connect("localhost", "root", "", "dbmonitoring1");//nama database yang kita gunakan

	//baca data yang dikirim dari esp32
	$suhu = $_GET['t'];
	$kelembapan = $_GET['h'];

	//simpan ke tabel tb_sensor

	//auto increment = 1 / mengembalikan ID menjadi 1 apabila dikosongkan
	mysqli_query($konek, "ALTER TABLE tb_sensor1 AUTO_INCREMENT=1");

	//simpaan data sensor ke tabel tb_sensor
	$simpan = mysqli_query($konek, "insert into tb_sensor1(suhu, kelembapan)values( '$suhu', '$kelembapan')");

	//uji simpan untuk memberikan respon
	if($simpan)
		echo "Berhasil dikirim";
	else
		echo "Gagal Terkirim";
?>