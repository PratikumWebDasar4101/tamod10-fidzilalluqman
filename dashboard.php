<?php
session_start();
?>

<table align="center" width="70%">
	<form action="dashboard.php" method="POST">
		<tr>
			<th>Search</th>
		</tr>
		<tr align="center">
			<td><input type="text" name="search" placeholder="Nama"></td>
		</tr>
		<tr align="center">
			<td><input type="submit" name="kirim"></td>
		</tr>
	</form>
</table>
<br>
<br>
<a href="newData.php">Tambah data</a> <br><br>
<a href="lihatData.php">Lihat Profil</a> <br><br>
<a href="login.php?logout=exit">Log Out</a>
<table border="1" align="center" width="70%">
	<tr>
		<th>Nim</th>
		<th>Nama</th>
		<th>Tanggal Lahir</th>
		<th>Email</th>
		<th>Kelas</th>
		<th>Hobi</th>
		<th>Genre Film</th>
		<th>Tempat Wisata</th>
		<th>Action</th>
	</tr>
	<?php 
		@$search = $_POST['search'];
		require_once ("koneksi.php");
		$result = $proses->view();
			
		if (mysqli_num_rows($result)>0) {
			while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $row['nim']?></td>
				<td><?php echo $row['nama']?></td>
				<td><?php echo $row['tgl_lahir']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['kelas']?></td>
				<td><?php echo $row['hobi']?></td>
				<td><?php echo $row['genre']?></td>
				<td><?php echo $row['wisata']?></td>
				<td><a href="koneksi.php?delete=<?php echo $row['nim']; ?>"> Hapus</a> | <a href="edit.php?nim=<?php echo $row['nim']; ?>"> Edit</a></td>
			</tr>
			<?php
			}
		} else{
			echo "0 results";
		}
 	?>
 </table>