<?php
include('koneksi.php');
?>
<form method="post">
    <table align="center">
        <tr>
            <td colspan="2"><h2>Halaman Login</h2></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Masuk"> | <a href="register.php"><input type="button" value="Daftar"></a></td>
        </tr>
    </table>
</form>

<?php
    if (isset($_POST['username'])) {
        $username   = $_POST['username'];
        $password   = md5($_POST['password']);

        $sql = "SELECT * FROM akun 
                WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn,$sql);
        
        if (mysqli_num_rows($result) == 0 ) {
            ?>
                <script>
                    alert("GAGAL LOGIN!");
                </script>
            <?php
        }else {
            ?>
                <script>
                    alert("LOGIN BERHASIL!");
                    location = "dashboard.php";
                </script>
            <?php
        }
    }
?>