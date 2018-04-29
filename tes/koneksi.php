<?php
$servername ="localhost";
$username   ="root";
$password   ="";
$database   ="transaksi";
$con=mysqli_connect($servername,$username,$password,$database);
if (!$con){
	dei("Koneksi Error".mysqli_connect_error($con));
}

?>
