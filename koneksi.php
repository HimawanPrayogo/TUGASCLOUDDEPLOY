<?php

    $servername = getenv('DB_HOST');
    $username = getenv('DB_USERNAME');
    $password = getenv('DB_PASSWORD');
    $db = "progweb";

    $conn = mysqli_connect($servername,$username,$password,$db) or die ("Koneksi ke DB gagal");

?>


