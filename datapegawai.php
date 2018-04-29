<?php
include "koneksi.php";
?>
<table border="1">
<tr><th>Kode Pegawai</th><th>Nama Pegawai</th><th>Jenis Kelamain </th><th>Pendidikan</th><th>No Telp</th><th>Alamat</th><th>Email</th><th colspan="2">Opsi</th></tr>
<?php
$tampilsql="select * from pegawai";
$result=mysqli_query($con,$tampilsql);
if (mysqli_num_rows($result) > 0 ){
 while ($row =mysqli_fetch_assoc($result)){
    echo "
 	        <tr id='brs_$row[kd_pegawai]'>
 	        <td>$row[kd_pegawai]</td>
			<td>$row[nm_pegawai]</td>
			<td>$row[jenis_kelamin]</td>
			<td>$row[pendidikan]</td>
			<td>$row[no_telp]</td>
			<td>$row[alamat]</td> 
			<td>$row[email]</td>
			<td><a  class='updatepegawai' href='updatepegawai.php?kd_pegawai=".$row['kd_pegawai']."' kd_pegawai='".$row['kd_pegawai']."' nm_pegawai='".$row['nm_pegawai']."' jenis_kelamin='".$row['jenis_kelamin']."'  pendidikan='".$row['pendidikan']."' no_telp='".$row['no_telp']."'  alamat='".$row['alamat']."' email='".$row['email']."'>Update</a>
			|<a  class='hapuspegawai' href='hapuspegawai.php?kd_pegawai=".$row['kd_pegawai']."'>Hapus</a></td>  
			</tr>";
 	
			
 }
}
?>
</table>
