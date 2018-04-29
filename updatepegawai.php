<?php
include "koneksi.php";


if (isset($_POST['kdpegawai'])){

	$kd_pegawai=$_POST['kdpegawai'];
	$nm_pegawai=$_POST['nmpegawai'];
	$jenis_kelamin=$_POST['jk'];
	$pendidikan=$_POST['pendidikan'];
	$no_telp=$_POST['notelp'];
	$alamat =$_POST['alamat'];
	$email  =$_POST['email'];
     
    
    $sql=" update pegawai set nm_pegawai='$nm_pegawai',jenis_kelamin='$jenis_kelamin',pendidikan='$pendidikan',no_telp='$no_telp',alamat='$alamat',email='$email' where kd_pegawai='$kd_pegawai'";

		if(mysqli_query($con,$sql)){
			echo "sukses";
		}else{
			echo "gagal".mysqli_error($con);
		}	
    

    
}
mysqli_close($con);

?>
