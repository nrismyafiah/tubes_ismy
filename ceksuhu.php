<?php  
	//buatlah koneksi ke database
	$konek = mysqli_connect("localhost", "root", "", "dbmonitoring1");

	//baca data dari sensor tb_sensor
	$sql = mysqli_query($konek, "select * from tb_sensor1 order by id desc"); // data terakhir akan berada diatas

	//baca data paling atas
	$data = mysqli_fetch_array($sql);
	$suhu = $data['suhu'];

	//uji, apabila nilai suhu belum ada, maka anggap suhu = 0
	if( $suhu == "") $suhu = 0;

	//cetak nilai suhu
	echo $suhu ;
?>