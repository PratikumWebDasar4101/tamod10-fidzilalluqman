<?php 

?>
<br>
<a href="dashboard.php">Home</a>
<br>
<br>
 <table border="1" width="40%" style="text-align: center;">
 	
 	<tr>
 		<th>Username</th>
 		<th>Password</th>
 	</tr>

 	<?php
		require_once ("koneksi.php");
		$result = $proses->viewprofile();
 		if (mysqli_num_rows($result)>0) {
 			while ($row = mysqli_fetch_assoc($result)) {
 				?>
 				<tr>
 				<td><?php echo $row['username']?></td>
 				<td><?php echo $row['password']?></td>
 				</tr>
 				<?php
 			}
 		}else{
 			echo "0 results";
 		}
 		
 	?>
 </table>