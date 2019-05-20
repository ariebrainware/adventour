<link rel="stylesheet" href="../css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" href="design/patch.css" type="text/css">
<script src="jQuery-Validation-Engine-master/js/jquery-1.8.2.min.js"></script>
<script src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js"></script>
<script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-id.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script>
$('document').ready(function(){
	$('#register_user').validationEngine();
	
});
</script>
 <header class="batas">
       <title> ::: B'ware CORP ::: </title>
        Tour and Travel
 </header>
  <center>
    <form action="script_PA.php" method="post" id="register_user">
        <table>
            <tbody>
                <tr>
                    <td colspan="2" align='center'><h1> Buat Akun Baru </h1> </td>
                </tr>
                    
                <tr>
                    <td><input type="text" name="nama_depan" value="" placeholder="Nama depan" class="validate[required,custom[onlyLetterSp]]"> 
                                    <input type="hidden" name="mode" value="baru"></td>
                    <td><input type="text" name="nama_belakang" value="" placeholder="Nama belakang"class="validate[onlyLetterSp]"> </td>
                </tr>
                
                <tr>
                    <td><input type="text" name="alamat" value="" placeholder="Alamat" class="validate[required]"> </td>
                    <td><input type="text" name="kode_pos" value="" placeholder="Kode Pos"
                    class="validate[required,custom[onlyNumberSp]]"></td>
                </tr>
                                
                <tr>
                    <td><input type="text" name="no_telp" value="" placeholder="Nomor Telpon" class="validate[custom[onlyNumberSp]]"></td>
                    <td><input type="text" name="email" value="" placeholder="Alamat Email" class="validate[required,custom[email]]"></td> 
                </tr>
               
                <tr>
                    <td><input type="text" name="username" value="" placeholder="Username" 
                    class="validate[required,ajax[ajaxUserCallPhp]]"> </td>
                    <td><input type="password" name="password" value="" placeholder="Kata Sandi" maxlength="32"> </td>
                </tr>
         
                <tr>
                    <td><input type="radio" name="jenis_kelamin" value="Pria"> Pria
                        <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita</td>
                     
                </tr>
          </tbody>
	</table>
   
 <table>
     <tr>
		<td colspan="3" align='center'><input type="submit" value="Daftar">
			<input type="reset" value="Reset"></td>                 
     </tr>  
</table>

    </form>
  </center>
<footer class="batas">
       <table class="kaki"  align="center">
          <tr align="center">
            <td> <a href=""> Menu     </a> </td>
            <td> <a href=""> Beranda  </a> </td>
            <td> <a href=""> Kebijakan</a> </td>
            <td> <a href=""> Tentang  </a> </td>
            <td> <a href=""> Bantuan  </a> </td>
          </tr>
		</table>
</footer> 
