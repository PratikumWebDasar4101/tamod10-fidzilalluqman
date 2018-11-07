<?php
session_start();
?>
<form method="post" action="koneksi.php?login=login">
    <input type="text" name="username"> Username<br>
    <input type="password" name="password" minlength="5"> Password<br>
    <br>
    <input type="submit" name="kirim" value="LOGIN"> 
</form>
<?php


?>