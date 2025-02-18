<?php
include '../../config/koneksi.php';

if (isset($_GET['id_jenis'])) {
    $id_jenis = $_GET['id_jenis'];
    $query = mysqli_query($coon, "SELECT * FROM jenis WHERE id_jenis='$id_jenis'");
    $result = mysqli_fetch_assoc($query);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_jenis = $_POST['id_jenis'];
    $nama_jenis = $_POST['nama_jenis'];

    $updateQuery = "UPDATE jenis SET nama_jenis='$nama_jenis' WHERE id_jenis='$id_jenis'";
    if (mysqli_query($coon, $updateQuery)) {
        header("Location: index.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Error updating record: " . mysqli_error($coon) . "</div>";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body { background: linear-gradient(135deg, #e0eafc, #cfdef3); }
        h1 { color: #333; text-shadow: 1px 1px 3px rgba(0,0,0,0.2); }
        .btn { transition: transform 0.2s; }
        .btn:hover { transform: scale(1.05); }
        .form-label { font-weight: bold; }
    </style>
</head>
<body>
<div class="container my-5 p-4 bg-white shadow rounded">
    <h1 class="mb-4 text-center"><i class="fas fa-edit"></i> Edit Data Barang</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="id_jenis" class="form-label">ID Jenis</label>
            <input type="text" class="form-control" id="id_jenis" name="id_jenis" value="<?php echo $result['id_jenis']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="nama_jenis" class="form-label">Nama Jenis</label>
            <input type="text" class="form-control" id="nama_jenis" name="nama_jenis" value="<?php echo $result['nama_jenis']; ?>" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Update</button>
            <a href="index.php" class="btn btn-secondary"><i class="fas fa-times"></i> Cancel</a>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
