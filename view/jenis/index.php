<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a style="color: darkorange;" class="navbar-brand" href="#">Storage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color: gray;" class="nav-link active" aria-current="page" href="../barang/index.php">Barang</a>
        </li>
        <li class="nav-item">
          <a style="color: blue;" class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<script>function pindahHalaman(){
        window.location.href = "tambah.php";
    }
   </script>

    <div class="container">
    <H1 style="color: coral;"> DataStock </H1>
  <table class="table table-bordered">
    <tr>
        <th style="color: crimson;">nama_jenis</th>
        <th style="color: crimson;">id_jenis</th>
        <th style="color: darkgreen;">edit</th>
    </tr>
    <?php
       include '../../config/koneksi.php';
       $query=mysqli_query($coon, "SELECT * FROM jenis");
       if(mysqli_num_rows($query) > 0){
        while($result=mysqli_fetch_assoc($query)){
            ?>
            <tr>
            <td><?php echo $result['id_jenis']?></td>
            <td><?php echo $result['nama_jenis']?></td>
           
            <td>
            <a class="btn btn-outline-success" href="edit.php?id_jenis=<?php echo $result['id_jenis']; ?>"><i class="fa-solid fa-pen-to-square"></i>edit</a>
                

            </td>
            </tr>
            <?php
        }
       }else{   
        echo "data kosong";
       }
       ?>
  </table>
  <button class="btn btn-outline-dark" onclick="pindahHalaman()">Tambah data</button>
  </div>
</body>
</html>