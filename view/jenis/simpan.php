<?php 
include '../../config/koneksi.php';

$id_jenis = $_POST['id_jenis'];
$nama_jenis = $_POST['nama_jenis'];

$query = mysqli_query($coon,"INSERT INTO jenis VALUES('$id_jenis','$nama_jenis')
");
echo "<script>alert('data berhasil di simpan'); window.location.href='index.php';
</script>";
?>