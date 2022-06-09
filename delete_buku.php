<?php

// require 'anggota.php';
require 'config.php';
    $id_buku = $_GET['id_buku'];
    $sqlDelete = "DELETE FROM book WHERE id_buku='$id_buku'";
    mysqli_query($conn, $sqlDelete);

    header("location: buku.php");
?>

