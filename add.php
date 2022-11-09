<?php
require_once('env/db.php');
$upload_dir = 'gambar_product/';

if (isset($_POST['Submit'])) {
	$title = $_POST['title'];
	$subtitle = $_POST['subtitle'];
	$harga = $_POST['harga'];
	$kategori = $_POST['kategori'];

	$imgName = $_FILES['image']['name'];
	$imgTmp = $_FILES['image']['tmp_name'];
	$imgSize = $_FILES['image']['size'];

	if (empty($title)) {
		$errorMsg = 'Please input title';
	} elseif (empty($subtitle)) {
		$errorMsg = 'Please input subtitle';
	} elseif (empty($harga)) {
		$errorMsg = 'Please input harga';
	} elseif (empty($kategori)) {
		$errorMsg = 'Please input kategori';
	} else {

		$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

		$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

		$imgproduk = time() . '_' . rand(1000, 9999) . '.' . $imgExt;

		if (in_array($imgExt, $allowExt)) {

			if ($imgSize < 5000000) {
				move_uploaded_file($imgTmp, $upload_dir . $imgproduk);
			} else {
				$errorMsg = 'Image too large';
			}
		} else {
			$errorMsg = 'Please select a valid image';
		}
	}


	if (!isset($errorMsg)) {
		$sql = "insert into produk(titlep, subtitlep, harga, image, kategori)
					values('" . $title . "', '" . $subtitle . "', '" . $harga . "', '" . $imgproduk . "', '" . $kategori . "')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			$successMsg = 'New record added successfully';
			header('Location: index.php');
		} else {
			$errorMsg = 'Error ' . mysqli_error($conn);
		}
	}
}
