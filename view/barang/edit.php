<?php
include '../../config/koneksi.php';

if (isset($_GET['id_barang'])) {
    $id_barang = $_GET['id_barang'];
    $query = mysqli_query($coon, "SELECT * FROM barang WHERE id_barang='$id_barang'");
    $result = mysqli_fetch_assoc($query);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stock = $_POST['stock'];
    $id_jenis = $_POST['id_jenis'];
    $nama_barang = $_POST['nama_barang'];

    $updateQuery = "UPDATE barang SET stock='$stock', id_jenis='$id_jenis', nama_barang='$nama_barang' WHERE id_barang='$id_barang'";
    if (mysqli_query($coon, $updateQuery)) {
        header("Location: index.php"); // Redirect ke halaman utama setelah update
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($coon);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Edit Data Barang</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="<?php echo $result['stock']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="id_jenis" class="form-label">ID Jenis</label>
            <input type="text" class="form-control" id="id_jenis" name="id_jenis" value="<?php echo $result['id_jenis']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $result['nama_barang']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>