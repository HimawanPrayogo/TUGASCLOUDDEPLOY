<?php
    // $conn = mysqli_connect("127.0.0.1","root","","progweb") or die ("Koneksi ke DB gagal");


    $servername = getenv('DB_HOST');
    $username = getenv('DB_USERNAME');
    $password = getenv('DB_PASSWORD');
    $db = "progweb"

    // $conn = mysqli_connect($servername,$username,$password,$db) or die ("Koneksi ke DB gagal");

    $conn = mysqli_connect("tugas-mariadb-1","root","123","progweb") or die ("Koneksi ke DB gagal");
?>


