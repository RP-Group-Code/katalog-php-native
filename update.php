<?php

  include('env/db.php');

  $upload_dir = 'gambar_product/';

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from produk where id=".$id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }else {
      $errorMsg = 'Could not Find Any Record';
    }
  }

  if(isset($_POST['Submit'])){
		$title = $_POST['title'];
		$subtitle = $_POST['subtitle'];
		$harga = $_POST['harga'];
		$kategori = $_POST['kategori'];

		$imgName = $_FILES['image']['name'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

		if($imgName){

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$imgproduk = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					unlink($upload_dir.$row['image']);
					move_uploaded_file($imgTmp ,$upload_dir.$imgproduk);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		}else{

			$imgproduk = $row['image'];
		}

		if(!isset($errorMsg)){
			$sql = "update produk set titlep = '".$title."', subtitlep = '".$subtitle."', harga = '".$harga."', image = '".$imgproduk."', kategori = '".$kategori."' where id=".$id;
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record updated successfully';
				header('Location:index.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}

	}
