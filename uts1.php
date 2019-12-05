<?php
//connection database
include "connection.php";

//menangkap data yang dikirim dari form
$nik = $_POST ['nik'];
$nama = $_POST ['nama'];
$cuti = $_POST ['cuti'];

//menginput data ke database
mysqli_query ($connection, "insert into t_cutii values ('','$nim','$nama','$cuti')");

?>

<Form Method="POST" action=""><!---Form untuk kirim data ke db-->
<table border="1">
	<tr>
		<td>nim</td>
		<td><input name="nim" type="text"></td>
	</tr>
	<tr>
		<td>nama</td>
		<td><input name="nama" type="text"></td>
	</tr>
	<tr>
		<td>cuti</td>
		<td><input name="cuti" type="number"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
		</tr>
</table>
</form>		