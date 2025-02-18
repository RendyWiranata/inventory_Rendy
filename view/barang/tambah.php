<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f7fc;
            font-family: Arial, sans-serif;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 4px;
            border: 1px solid #ddd;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .mb-3 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h1>Tambah Data Barang</h1>
            <form action="simpan.php" method="POST">
                <div class="mb-3">
                    <label for="id_barang" class="form-label">ID Barang</label>
                    <input type="number" class="form-control" name="id_barang" id="id_barang" required>
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" name="stock" id="stock" required>
                </div>
                <div class="mb-3">
                    <label for="id_jenis" class="form-label">ID Jenis</label>
                    <input type="number" class="form-control" name="id_jenis" id="id_jenis" required>
                </div>
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" id="nama_barang" required>
                </div>
                <button type="submit">Simpan</button>
            </form>
        </div>
    </div>

</body>
</html>