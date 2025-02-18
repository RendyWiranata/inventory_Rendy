<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storage Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        nav {
            background-color: #343a40 !important;
        }
        .navbar-brand, .nav-link {
            color: #f8d7da !important;
        }
        .nav-link:hover {
            color: #ffc107 !important;
        }
        h1 {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
            text-shadow: 2px 2px #ff6347;
        }
        table {
            margin-top: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        th, td {
            text-align: center;
            vertical-align: middle;
        }
        .btn {
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        .btn:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fa-solid fa-box"></i> Storage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../jenis/index.php">Jenis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.tiktok.com/@kelyarbin/video/7313155491885042950?is_from_webapp=1&sender_device=pc&web_id=7472273383096141319"><i class="fa-solid fa-link"></i> Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another Action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">More Options</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-warning" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <div class="container">
    <h1><i class="fa-solid fa-warehouse"></i> Data Stock</h1>
  <table class="table table-striped table-hover">
    <thead class="table-dark">
    <tr>
        <th>ID Barang</th>
        <th>Stock</th>
        <th>ID Jenis</th>
        <th>Nama Barang</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
       include '../../config/koneksi.php';
       $query=mysqli_query($coon, "SELECT * FROM barang");
       if(mysqli_num_rows($query) > 0){
        while($result=mysqli_fetch_assoc($query)){
            ?>
            <tr>
            <td><?php echo $result['id_barang']?></td>
            <td><?php echo $result['stock']?></td>
            <td><?php echo $result['id_jenis']?></td>
            <td><?php echo $result['nama_barang']?></td>
            <td>
            <a class="btn btn-success me-2" href="edit.php?id_barang=<?php echo $result['id_barang']; ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            <a class="btn btn-danger" href="hapus.php?id_barang=<?php echo $result['id_barang']; ?>" onclick="return confirmDelete()"><i class="fa-solid fa-trash"></i> Hapus</a>
            </td>
            </tr>
            <?php
        }
       }else{
        echo "<tr><td colspan='5' class='text-center'>Data kosong</td></tr>";
       }
       ?>
    </tbody>
  </table>
  <div class="text-center mt-4">
    <button class="btn btn-dark" onclick="pindahHalaman()"><i class="fa-solid fa-plus"></i> Tambah Data</button>
  </div>
</div>

<script>
    function pindahHalaman(){
        window.location.href = "tambah.php";
    }
    function confirmDelete() {
        return confirm("Are you sure you want to delete this item?");
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
