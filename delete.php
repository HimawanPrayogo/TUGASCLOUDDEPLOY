<?php
    // kode anda
    require 'koneksi.php';

    $sql = "DELETE FROM stockbarang WHERE idBarang='".$_GET['id']."'";
    
    $result = mysqli_query($conn, $sql);
    
    if($result){
        echo "Berhasil DELETE DATA";
    }else{
        echo "Gagal DELETE DATA";
    }
    $conn->close();

    header("location:index.php") //untuk langsung ketika di klik balik ke halaman header()
?>




<!-- <a href="index.php">KEMBALI</a> -->