<?php 
$koneksi = mysqli_connect("localhost", "root", "", "SPT");

if (mysqli_connect_error()) {
	echo "Gagal Konek : ".mysqli_connect_errno();
}

 ?>