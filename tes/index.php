<!DOCTYPE html>
<html>
<head>
	<title>tes</title>
	<script type="text/javascript" src="../jquery.js"></script>
	  <script >  

	//   	$(document).ready(function(){
	// 	LoadData();

	// 	$('form').on('submit',function(e){
	// 		e.preventDefault();
	// 		$.ajax({
	// 			type:$(this).attr('method'),
	// 			url: $(this).attr('action'),
	// 			data: $(this).serialize(),
	// 			success:function(){
	// 				LoadData();
	// 				ResetForm();
	// 			}
	// 		});
	// 	})
	// })

  
    $(document).ready(function(){
    LoadDatapegawai();
     
       $('form').on('submit',function(e){
            e.preventDefault();
           $.ajax({
                type:$(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success:function(){
                     LoadDatapegawai();
                }
            });
         })
    })

    function LoadDatapegawai(){
        $.get('datapegawai.php',function(data){
            $('#conten').html(data)
        })
    }

	</script>
</head>
<body>
<div id="conten">
	
</div>

<form action="simpanpegawai.php" method ="POST">
	<input type ="text" name ="kodepegawai" placeholder="Kode Pegawai" />
	<input type = "text" name ="namapegawai" placeholder="Nama Pegawai" />
	<input type = "submit" name = "submit" value="submit"/>
<hr/>

</form>

</body>
</html>