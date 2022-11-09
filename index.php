<?php
include('env/db.php');
$upload_dir = 'gambar_product/';

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $sql = "select * from produk where id = " . $id;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $image = $row['image'];
    unlink($upload_dir . $image);
    $sql = "delete from produk where id=" . $id;
    if (mysqli_query($conn, $sql)) {
      header('location:index.php');
    }
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Katalog Clotch</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
</head>

<body style="background: #E7E8EA">
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
      <div class="col-md-12">
        <div class="card mt-5">
          <div class="card-header">
            <div class="row">
              <div class="col-md-5">
                <h3 class="title-header">Product List</h3>
              </div>
              <div class="col-md offset-md-6">
                <a class="title-header-button"><a class="btn btn-primary" href="create.php"><i class="fas fa-store-alt"> <b><i class="fas fa-plus"></i></b></i></a></a>
              </div>
            </div>
          </div>

          <div class="card-body">
            <table id="data_table" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr align="center">
                  <th>ID</th>
                  <th>Gambar</th>
                  <th>Title</th>
                  <th>Subtitle</th>
                  <th>Harga</th>
                  <th>Kategori</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $urut   = 1;

                $sql = "select * from produk";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result)) {
                  while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                      <th scope="row"><?php echo $urut++ ?></th>
                      <td><img src="<?php echo $upload_dir . $row['image'] ?>" height="70"></td>
                      <td align="center"><?php echo $row['titlep'] ?></td>
                      <td align="center"><?php echo $row['subtitlep'] ?></td>
                      <td align="center">$<?php echo $row['harga'] ?></td>
                      <td align="center"><?php echo $row['kategori'] ?></td>
                      <td align="center" class="text-center">
                        <a href="show.php?id=<?php echo $row['id'] ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-info"><i class="fa fa-user-edit"></i></a>
                        <a href="index.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i></a>
                      </td>
                    </tr>
                <?php
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
<script>
  $(function() {
    $('#data_table').DataTable()
  })
</script>

</html>