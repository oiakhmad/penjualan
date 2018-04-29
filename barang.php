<!DOCTYPE html>
<html>
<head>
	<title>Barang</title>
	<meta charset = " utf-8 " /> 
  <script type="text/javascript" src="jquery.js"></script>
  <script >
  	$(document).ready(function(){
  		LoadData();
     $("#form").on('submit',function(e){
     	e.preventDefault();
     	$.ajax({
     		type:$(this).attr('method'),
     		url :$(this).attr('action'),
     		data :$(this).serialize(),
     		success:function(data){
     			LoadData();
     			Resetform();
     			alert(data)
     		}
     	})
     })
  	
  	})
function UpdateBarang(){
	$('.updatebarang').click(function(e){
		e.preventDefault();
		$('[name=kdbarang]').val($(this).attr('kd_barang'));
		$('[name=nmbarang]').val($(this).attr('nm_barang'));
		$('[name=harga]').val($(this).attr('harga'));
		$('[name=stok]').val($(this).attr('stok'));
		$('form').attr('action',$(this).attr('href'));
	})
}  	
function LoadData(){
	$.get('databarang.php',function(data){
		$('#conten').html(data);
		UpdateBarang();
		Hapusbarang();
	})	
}

function Resetform(){
	$('form').attr('action','simpanbarang.php');
	$('[type=text]').val('');
}

function Hapusbarang(){	
	    $('.hapusbarang').click(function(e){
                   e.preventDefault();
                   $.ajax({
                        type:'GET',
                        url: $(this).attr('href'),
                        success:function(data){
                        LoadData();
                        }
                    });       
            })           
	}
	    

// function Delete(id){
// 	if(confirm("Apakah anda yakin data ini akan dihapus ?")){
// 		$.ajax{
// 			url:'hapuspegawai.php',
// 			type:"POST",
// 			data:"kdbarang ="+id,
// 			success:function(data){
// 				if(data==1){
// 				 alert ("sukses");
// 				}else{
// 					alert ("gagal");
// 				}
// 			}
// 		}
// 	}

// }
  </script>



</head>
<body>
<div id="conten"></div>
<form id="form" action="simpanbarang.php" method="POST">
	<table>
		<caption>Input Barang</caption>
		<tr>
			<th>Kode Barang</th>
			<td><input type="text" name="kdbarang"></td>
			</tr>
		<tr>
			<th>Nama Barang</th>
			<td><input type="text" name="nmbarang"></td>
		</tr>
		<tr>
			<th>Harga</th>
			<td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<th>Stok</th>
			<td><input type="text" name="stok"></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="submit" value="kirim"></td>
		</tr>
	</table>
</form>
</body>
</html>