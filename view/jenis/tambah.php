<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #a8edea, #fed6e3);
            font-family: 'Poppins', sans-serif;
            color: #333;
        }
        .container {
            max-width: 650px;
            margin-top: 60px;
        }
        .form-container {
            background-color: #fff;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        h1 {
            text-align: center;
            color: #444;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 35px;
        }
        label {
            font-weight: 600;
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid #ccc;
            transition: box-shadow 0.3s;
        }
        .form-control:focus {
            box-shadow: 0 0 8px rgba(52, 152, 219, 0.5);
        }
        button {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            border-radius: 8px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            color: white;
            border: none;
            transition: transform 0.3s, background 0.3s;
        }
        button:hover {
            background: linear-gradient(90deg, #764ba2, #667eea);
            transform: translateY(-3px);
        }
        .mb-3 {
            margin-bottom: 25px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h1><i class="fas fa-box-open"></i> Tambah Data Barang</h1>
            <form action="simpan.php" method="POST">
                <div class="mb-3">
                    <label for="id_jenis" class="form-label">ID Jenis</label>
                    <input type="number" class="form-control" name="id_jenis" id="id_jenis" required>
                </div>
                <div class="mb-3">
                    <label for="nama_jenis" class="form-label">Nama Jenis</label>
                    <input type="text" class="form-control" name="nama_jenis" id="nama_jenis" required>
                </div>
                <button type="submit"><i class="fas fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
