<?php
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "koneksi.php";


if (isset($_POST['kdpegawai'])){

	$kd_pegawai=$_POST['kdpegawai'];
	$nm_pegawai=$_POST['nmpegawai'];
	$jenis_kelamin=$_POST['jk'];
	$pendidikan=$_POST['pendidikan'];
	$no_telp=$_POST['notelp'];
	$alamat =$_POST['alamat'];
	$email  =$_POST['email'];

    
    $chekkd= mysqli_num_rows(mysqli_query($con,"select kd_pegawai from pegawai where kd_pegawai='$kd_pegawai'"));
    $chekemail= mysqli_num_rows(mysqli_query($con,"select email from pegawai where  email='$email'"));
   
     if ($chekemail >0){
    	echo "Email Yang Anda Inputkan Sudah Ada";
    die();	
    }
    if ($chekkd >0){
    	echo "Kode Pegawai  sudah ada";
    	die();
	}else {
		$sql="insert into pegawai values('$kd_pegawai','$nm_pegawai','$jenis_kelamin','$pendidikan','$no_telp','$alamat','$email')";
  	

		if(mysqli_query($con,$sql)){
			echo "sukses";
		}else{
			echo "gagal".mysqli_error($con);
		}
			}
		    
    	   // 	 echo "<script>window.alert('nama atau email yang anda masukan sudah ada')
        // window.location='Pegawai.php'</script>";
    	// echo "<script>alert('nama atau email yang anda masukan sudah ada');
     //    window.location='Pegawai.php'</script>";
    	
    	//echo "<script>Window.alert('kode Pegawai atau email yang anda masukkan sudah ada') window.location='Pegawai.php'</script>";
    

}
mysqli_close($con);

?>
