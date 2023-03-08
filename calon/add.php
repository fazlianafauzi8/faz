<html>
<body>
	<head>
		<title>Tambah Rekod</title>
		<style>
	 #header {width:100%; height:60px; border:1px solid #333; background-color: beige; }
	</style>
	</head>
	
<?php
include('config.php');

if(isset($_POST['submit'])){
// Lengkapkan kod selepas baris ini//
 






//lengkapkan kod tamat di sini//
echo "<script>alert('Berjaya Daftar maklumat $nama_pelajar');
	window.location='senarai_pelajar.php'</script>";
}
?>

<body bgcolor="#ddd">
<center>
	<div id="header">
	 <h1> Kelab Rekreasi Junjong </h1>
		<br><br>
<div style="border-radius: 8px ; border: 1px solid black; width: 500px; margin-top: 30px; background-color: white;">
	
<form method="post" action="">
 <h3><u>TAMBAH REKOD PELAJAR</u><h3>
 <table border=0 cellpadding=10 cellspacing=0>
   <tr>
     <td>ID PELAJAR</td>
   <td>:</td>
   <td><input type="text" name="id" size="5"></td>
   </tr>
   <tr>
     <td>NAMA PELAJAR</td>
   <td>:</td>
   <td><input type="text" name="nama_pelajar" size="35"></td>
   </tr>
   <tr>
     <td>NO KAD PENGENALAN</td>
   <td>:</td>
   <td><input type="text" name="no_kp" size="14"></td>
   </tr>
   
     <td style="text-align: center;"  colspan="3">
     <input type="submit" name="submit" value=" Hantar "> &nbsp&nbsp&nbsp
     <input type="reset" name="reset" value=" Reset ">
   </td>
   </tr>
 </table>
</form>
</div>
</center>
</body>

</html>