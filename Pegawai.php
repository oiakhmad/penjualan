
<html>
<head>
    <title>Pegawai</title>
    
    <meta charset = " utf-8 " /> 

    <script type="text/javascript" src="jquery.js"></script>
    <script >    
    
    $(document).ready(function(){
        LoadDatapegawai();
       $('form').on('submit',function(e){
         e.preventDefault();
           $.ajax({
                type:$(this).attr('method'),
                url :$(this).attr('action'),
                data:$(this).serialize(),
                success:function(data){
                    alert (data);
                    // jika ingin memperbaiki masalah yang tidak kelas kelar di code lakukan pertahan, priksa dibagian mana yang ungsinya bisa di
                    //jilankan dan yang tidak bisa di jalankan
                    //alert(data);

                    if (data=="data sudah ada"){
                        ResetForm();
                    }else if(data=="Email Yang Anda Inputkan Sudah Ada"){
                        ResetForm();
                    }
                    else{
                        LoadDatapegawai();
                        ResetForm();
                    }

                  
               // location.reload();
                }
            });
       })
    })

    function LoadDatapegawai(){
        $.get('datapegawai.php',function(data){
            $('#conten').html(data);
                HapusPegawai();
                UpdatePegawai();

        })
    }
    
    function UpdatePegawai(){
         $('.updatepegawai').click(function(e){
                e.preventDefault();
                $('[name=kdpegawai]').val($(this).attr('kd_pegawai'));
                $('[name=nmpegawai]').val($(this).attr('nm_pegawai'));
                $('[name=notelp]').val($(this).attr('no_telp'));
                $('[name=alamat]').val($(this).attr('alamat'));
                $('[name=email]').val($(this).attr('email'));
                $('form').attr('action',$(this).attr('href'));
              // alert ($(this).attr('jenis_kelamin'));// untuk mengecek apakah datanya  itu bisa tampil dengan benar atau tidak
                
                var gender=$(this).attr('jenis_kelamin');
                var pendi =$(this).attr('pendidikan');
       
                if ( pendi == "SMK"){
                    document.getElementById("pendidikan").value = "SMK";
                }else if(pendi == "MAN"){
                    document.getElementById("pendidikan").value = "MAN";
                }else{
                    document.getElementById("pendidikan").value = "SMA";
                }

                if ( gender == "Laki - Laki"){
                    document.getElementById("lk").checked = true;
                }else {
                        document.getElementById("pr").checked = true;
                }       

         })
      
          
    }
    function HapusPegawai(){
        $('.hapuspegawai').click(function(e){
                   e.preventDefault();
                   $.ajax({
                        type:'GET',
                        url: $(this).attr('href'),
                        success:function(){
                        LoadDatapegawai();
                        }
                    });       
            })    

        
    }
    function ResetForm(){ 
        $('form').attr('action','simpanpegawai.php');
        $('[type=text').val('');
        $('[name=kdpegawai').focus();
        $('input[name=jk]').attr('checked',false);
        document.getElementById("alamat").value = "";
        document.getElementById("pendidikan").value = "";
        document.getElementById("jeniskelamin").checked = false;
        //$('input[r]').prop('checked', false);
        // document.getElementById("jeniskelamin").removeAttr("checked");
    }
    </script>
    </head>
    <body>

    <div id="conten"></div>
   <hr/>
    <form action="simpanpegawai.php" method="POST">    
        <table>
            <caption >Input Data Pegawai</caption>
        <tr>
            <th>Kode Pegawai </th>
            <td><input type=text name="kdpegawai" /></td>
            </tr>
            <tr>
            <th>Nama Pegawai </th>
                <td><input type=text name="nmpegawai"/></td>
            </tr>
            <tr>
            <th>Jenis Kelamin</th>
                <td>
                    <input type="radio" name ="jk" id="lk" value="Laki - Laki"/>Laki Laki 
                    <input type="radio" name ="jk"  id= "pr" value="Perempuan"/>Perempuan
                </td>
            </tr>
            <tr>
            <th>Pendidikan </th>
            <td><select class="pen" name="pendidikan" id="pendidikan">
                <option value=""></option>
                <option value ="SMK" >SMK</option>
                <option value ="MAN" >MAN</option>
                <option value ="SMA" >SMA</option>
                </select></td>
            </tr>
            <tr>
                <th>No Telp</th>
            <td><input type="text" name ="notelp"  /></td>
            </tr>
            <tr>
            <th>Alamat</th>
                <td><textarea rows="5" name="alamat" id="alamat"></textarea></td>
            </tr>
            <tr><th>Email</th>
                <td><input type="text" name="email"/></td>
            </tr>
        <tr> <td></td>
             <td>
                <input type="submit" name="submit" value="submit"/>
             </td>
        </tr>
        </table>
        
        </form>
    </body>
</html>