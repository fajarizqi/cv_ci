<?php 


$koneksi = mysqli_connect("localhost", "root", "", "cv");
	
if(mysqli_connect_errno()){
	printf ("Gagal terkoneksi : ".mysqli_connect_error());
	exit();
}

?>