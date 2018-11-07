<?php 
session_start();
require_once ('koneksi.php');
    $nim     = $_GET['nim'];
    $sql = $proses -> select_data($nim);
    $row    = mysqli_fetch_assoc($sql);

    $daftar_hobi = explode(", ", $row['hobi']);
    $daftar_genre = explode(", ", $row['genre']);
    $daftar_wisata = explode(", ", $row['wisata']);

 ?>
 <h2>Edit Data</h2>
    <form method="POST" action="koneksi.php?edit=<?php echo $row['nim']; ?>">
        <table>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?php echo $row['nim'] ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $row['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir'] ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input type="email" name="email" value="<?php echo $row['email'] ?>"><br>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" value="<?php echo $row['kelas'] ?>"></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td> 
                    <input type="checkbox" name="hobi[]" value="makan" <?php if(array_search("makan", $daftar_hobi) > -1 ) { echo "checked"; }?>>Makan<br>
                    <input type="checkbox" name="hobi[]" value="minum" <?php if(array_search("minum", $daftar_hobi) > -1 ) { echo "checked"; }?>>Minum<br>
                    <input type="checkbox" name="hobi[]" value="tidur" <?php if(array_search("tidur", $daftar_hobi) > -1 ) { echo "checked"; }?>>Tidur<br> 
                </td>
            </tr>
            <tr>
                <td>Genre Film</td>
                <td>:</td>
                <td> 
                    <input type="checkbox" name="genre[]" value="horror" <?php if(array_search("horror", $daftar_genre) > -1 ) { echo "checked"; }?>> Horror<br>
                     <input type="checkbox" name="genre[]" value="action" <?php if(array_search("action", $daftar_genre) > -1 ) { echo "checked"; }?> > Action<br>
                     <input type="checkbox" name="genre[]" value="Isekai" <?php if(array_search("Isekai", $daftar_genre) > -1 ) { echo "checked"; }?>> Isekai<br> 
                </td>
            </tr>
            <tr>
                <td>Tempat Wisata</td>
                <td>:</td>
                <td> <input type="checkbox" name="wisata[]" value="Jogjakarta" <?php if(array_search("Jogjakarta", $daftar_wisata) > -1 ) { echo "checked"; }?>> Jogjakarta<br>
                     <input type="checkbox" name="wisata[]" value="Samarinda" <?php if(array_search("Samarinda", $daftar_wisata) > -1 ) { echo "checked"; }?>> Samarinda<br>
                     <input type="checkbox" name="wisata[]" value="Palembang" <?php if(array_search("Palembang", $daftar_wisata) > -1 ) { echo "checked"; }?>> Palembang<br> 
                </td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="kirim"></td>
            </tr>
        </table>
    </form>

   