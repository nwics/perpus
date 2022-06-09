<?php

// require 'anggota.php';
require 'config.php';
    $id_anggota = $_GET['id_anggota'];
    $sqlDelete = "DELETE FROM anggota WHERE id_anggota='$id_anggota'";
    mysqli_query($conn, $sqlDelete);

    header("location: anggota.php");

?>

