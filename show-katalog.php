<?php
require_once('env/db.php');
$upload_dir = 'gambar_product/';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "select * from produk where id=" . $id;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    $errorMsg = 'Could not Find Any Record';
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Show Katalog</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>

  <style>
      .keranjang:hover{
          background-color: #fff !important;
          color: black !important;
          border-color: black !important;
      }
  </style>

</head>

<body>

  <div class="content">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid py-3" style="width: 1333px">
        <a class="navbar-brand me-5" href="clotch.php" style="font-family: 'Caveat', cursive;">Clotch Store</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="clotch.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <div class="container">
    <div class="row justify-content-center">
        <div class="row pt-5">
            <div class="col-md">
                <small style="opacity: 0.8;">Clotch Store / Dashboard / Kid</small> 
            </div>
            <div class="col-md-4 offset-md-2">
            </div>
        </div>
      <div class="card mt-5">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <img src="<?php echo $upload_dir . $row['image'] ?>" height="450" width="420">
            </div>
            <div class="col-md mr-5 pt-4">
              <div class="row" style="margin: 0; padding: 0;">
                <i class="fas fa-star col-md-1" style="margin: 0; padding: 0;"></i>
                <i class="fas fa-star col-md-1" style="margin: 0; padding: 0;"></i>
                <i class="fas fa-star col-md-1" style="margin: 0; padding: 0;"></i>
                <i class="fas fa-star col-md-1" style="margin: 0; padding: 0;"></i>
                <div class="views col-md-3">1270 Vlews</div>
              </div>
              <div class="row">
                <span class="mt-2" style="font-size: 32px; font-weight: bold;"><?php echo $row['titlep'] ?></span>
              </div>
              <div class="row">
                <span class="mt-1" style="font-size: 22px; font-weight: normal;"><?php echo $row['subtitlep'] ?></span>
              </div>
              <div class="row">
                <span class="mt-5" style="font-weight: bold; font-size: 22px">$<?php echo $row['harga'] ?></span>
              </div>
              <div class="row">
                <span class="mt-1" style="font-weight: normal; font-size: 18px">Free Ongkir Pemesanan Diatas $250</span>
              </div>
              <div class="row">
                  <div class="col-md mt-3">
                      <button class="keranjang btn text-white" style="font-size: 16px; background-color: #2C2F33; width: 300px;">Tambah Ke keranjang </button>
                  </div>
              </div>
            </div>

          </div>
          <!-- <a class="btn btn-outline-danger" href="index.php"><i class="fa fa-sign-out-alt"></i><span>Back</span></a> -->
        </div>
      </div>
    </div>

  </div>


  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
  <script src="https://kit.fontawesome.com/4c68d22cde.js" crossorigin="anonymous"></script>
</body>

</html>