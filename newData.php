<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="koneksi.php?tambah=input" method="POST">
		<table>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input type="email" name="email"><br>
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td> <input type="checkbox" name="hobi[]" value="makan"> Makan<br>
 					 <input type="checkbox" name="hobi[]" value="minum"> Minum<br>
 					 <input type="checkbox" name="hobi[]" value="tidur"> Tidur<br> 
 				</td>
			</tr>
			<tr>
				<td>Genre Film</td>
				<td>:</td>
				<td> <input type="checkbox" name="genre[]" value="horror"> Horror<br>
 					 <input type="checkbox" name="genre[]" value="action"> Action<br>
 					 <input type="checkbox" name="genre[]" value="Isekai"> Isekai<br> 
 				</td>
			</tr>
			<tr>
				<td>Tempat Wisata</td>
				<td>:</td>
				<td> <input type="checkbox" name="wisata[]" value="Jogjakarta"> Jogjakarta<br>
 					 <input type="checkbox" name="wisata[]" value="Samarinda"> Samarinda<br>
 					 <input type="checkbox" name="wisata[]" value="Palembang"> Palembang<br> 
 				</td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="kirim"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 

?>
