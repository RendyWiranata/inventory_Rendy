<?php 
include '../../config/koneksi.php';
if($_GET){
    $id_barang = (int) $_GET['id_barang'];

    
    mysqli_query($coon, "DELETE FROM barang WHERE id_barang = '$id_barang'");
    header("Location: index.php");

}
?>

