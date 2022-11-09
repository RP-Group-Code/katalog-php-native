<?php
include('update.php')
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Catalog</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
      <a class="navbar-brand" href="index.php">Catalog Edit</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="btn btn-outline-danger" href="index.php"><i class="fa fa-sign-out-alt"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Edit Data Product </h3>
          </div>
          <div class="card-body">
            <form class="" action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter title" value="<?php echo $row['titlep']; ?>">
              </div>
              <div class="form-group">
                <label for="subtitle">Subtitle</label>
                <input type="text" class="form-control" name="subtitle" placeholder="Enter Mobile Number" value="<?php echo $row['subtitlep']; ?>">
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" name="harga" placeholder="Enter harga" value="<?php echo $row['harga']; ?>">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <label for="Category">Category Produk</label>
                    <select class="form-control" name="kategori" id="kategori" value="<?php echo $row['kategori']; ?>">
                      <option value="">- Select Category Product -</option>
                      <option value="women" <?php if ($row['kategori'] == "women") echo "selected" ?>>women</option>
                      <option value="man" <?php if ($row['kategori'] == "man") echo "selected" ?>>man</option>
                      <option value="kid" <?php if ($row['kategori'] == "kid") echo "selected" ?>>kid</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="image">Choose Image</label>
                <div class="col-md-12">
                  <img src="<?php echo $upload_dir . $row['image'] ?>" width="100">
                  <input type="file" class="form-control" name="image" value="<?php echo $row['image'] ?>">
                  <i style="font-size:14px; color: red;">Abaikan jika tidak ingin merubah gambar product !!</i>

                </div>
              </div>
              <div class="form-group mt-5">
                <button type="submit" name="Submit" class="btn btn-primary waves">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
</body>

</html>