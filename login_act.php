<?php 
session_start();
include 'admin/config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$pas=md5($pass);
$query=mysqli_query($koneksi ,"select * from tbl_petugas where nama_petugas='$uname' and pass='$pas'")or die(mysqli_connect_error());
if(mysqli_num_rows($query)==1){
	$_SESSION['uname']=$uname;
	
	header("location:admin/index.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysqli_connect_error());
	// mysqli_connect_error();
}
// echo $pas;
 ?>