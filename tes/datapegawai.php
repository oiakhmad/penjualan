<?php
include "koneksi.php";

$sql="select kd_pegawai , nm_pegawai from pegawai";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0){

while ($row =mysqli_fetch_assoc($result)){
	echo $row['kd_pegawai'],"",$row['nm_pegawai']."<br/>";
}

}

?>