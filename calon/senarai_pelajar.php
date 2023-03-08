<?php
include('config.php');
?>
<head>
	<title>Senarai Pelajar</title>
	<style>
	 #header {width:100%; height:60px; border:1px solid #333; background-color: beige; 
	 	text-align: center;}
	</style>
</head>
<body>
	<div id="header">
		<h1> Kelab Rekreasi Junjong </h1>
<hr>
<table align="center">
	<center><h2>Kelab Rekreasi Junjong</h2><center>
<p align="center">Senarai Nama Pelajar</p>
	<td align="center" bgcolor="grey">Id Pelajar</td>
	<td align="center" bgcolor="grey">Nama Pelajar</td>
	<td align="center" bgcolor="grey">No Kad Pengenalan</td>
	<td align="center" bgcolor="grey">Tindakan</td>

<?php	
$result=mysqli_query($link,"SELECT * FROM data");
//Lengkapkan kod selepas baris ini//
while ($res = mysqli_fetch_array($result)) {
	








	
//kod tamat disini
echo "<td> <a href='delete.php?id=$array[id]'>padam</a>";
echo"</tr>";
}
echo "</table>";
?>

<hr>
<h3><center><a href="add.php">Tambah Rekod</a></center></h3>
</table>
</body>
</head>