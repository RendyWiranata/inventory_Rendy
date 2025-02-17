<?php 
include '../../config/koneksi.php';
$id_barang = $_POST['id_barang'];
$stock = $_POST['stock'];
$id_jenis = $_POST['id_jenis'];
$nama_barang = $_POST['nama_barang'];

$query = mysqli_query($coon,"INSERT INTO barang VALUES('$id_barang','$stock','$id_jenis','$nama_barang')
");
echo "<script>alert('data berhasil di simpan'); window.location.href='index.php';
</script>";
?>