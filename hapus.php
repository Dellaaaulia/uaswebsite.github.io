<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>