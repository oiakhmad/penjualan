<?php
include "koneksi.php";
?>
<table border="1">
	<tr>
		<th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Harga</th>
		<th>Stok</th>
		<th>Aksi</th>
	</tr>
<?php
$sqltampil ="select * from barang ";
$result=mysqli_query($con,$sqltampil);
if (mysqli_num_rows($result) > 0 ){
	while ( $row=mysqli_fetch_assoc($result)){

	echo "<tr id='brs_$row[kd_barang]' > 
		  <td>$row[kd_barang]</td>
		  <td>$row[nm_barang]</td>
		  <td>$row[harga]</td>
		  <td>$row[stok]</td>
		  <td><a class ='updatebarang' href='updatebarang.php ?".$row['kd_barang']."' kd_barang='".$row['kd_barang']."' nm_barang='".$row['nm_barang']."' harga ='".$row['harga']."' stok ='".$row['stok']."' >update </a>||
		  <a class='hapusbarang' href='hapuspegawai.php?kd_barang=".$row['kd_barang']."'>Hapus</a>
		  </td></tr>";

		
	}	
}
?>
</table>