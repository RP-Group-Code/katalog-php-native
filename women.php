<?php
include('env/db.php');
$upload_dir = 'gambar_product/';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .joinus:hover {
            background-color: #fff !important;
            color: black !important;
            border-color: black !important;
        }
        a{
            text-decoration: none; 
            color: black;
        }
        
        ul a:hover{
            text-decoration: none; 
            color: #a88e68 !important;
        }
        a:hover{
            text-decoration: none; 
            color: #b0823a !important;
        }
        .gambarproduct:hover{
            width: 600px !important;
        }
    </style>
    <title>Document</title>
</head>

<body style="min-height: 1080PX; margin:0; padding:0!important;">
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid py-3" style="width: 1333px">
                <a class="navbar-brand me-5" href="clotch.php" style="font-family: 'Caveat', cursive;">Clotch Store</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="clotch.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Admin</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="women.php">Women</a></li>
                                <li><a class="dropdown-item" href="man.php">Man</a></li>
                                <li><a class="dropdown-item" href="kid.php">Kid</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="clotch.php">See All</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="icons me-3" style="cursor: pointer;">
                        <i class="fas fa-search fa-lg" style="color: white;"></i>
                    </div>

                    <div class="search-form" style="cursor: pointer;">
                        <i class="fas fa-shopping-cart fa-lg shop" style="color: white;"></i>
                    </div>

                </div>
            </div>
        </nav>
    </div>

    <div class="jumbotron jumbotron-fluid" style="background-color: aliceblue;  min-height: 920px; padding-top: 130px;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-3">
                    <div class="title-jumbotron pt-2">
                        <h1 style="font-family: 'Caveat', cursive; padding-top: 120px;">Clotch Store</h1>
                        <p class="lead">Clotch Store Palembang <b> RPGroup </b></p>
                    </div>

                    <div class="subtitle-jumbotron mt-5" style="line-height: 1; font-size: 65px; font-family: MaisonNeueExtended-ExtraBold;">
                        <b>
                            Layanan+ <br>
                            Service+ <br>
                            Trusted+ <br>
                        </b>
                    </div>
                    <div class="row d-flex justify-content-center mt-3">
                        <div class="col-md-5" style="padding: 0; margin: 0;">
                            <button class="joinus text-white btn mt-3" style="background-color: pink; font-size: 18px; margin: 0;"> Join Us</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 offset-md-4">
                    <svg class="home-svg text-center" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="fill: #ffc0cb; width:520px; margin-top: 70px;">

                        <mask id="mask0" mask-type="alpha">
                            <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                  130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                  165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                  129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                  -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            <image class="home-img" x="-45" y="-20" href="icon/Women-Banner.png" style="width: 280px;" />
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- <div class="container" style="margin-bottom: 100px;">
        <div class="content" align="center">
            <div class="card" style="margin-top: -50px; min-height:120px; border-radius: 20px; width:120px;">
                <h3>All Categories</h3>
            </div>
        </div>
    </div> -->
    <div class="container">
        <div class="content mt-5">
            <div class="header-catalog">
                <div class="row justify-content-center">
                    <div class="col-md-2 align-self-center">
                        <a href="clotch.php"> All </a>|<a href="women.php"> Women </a> |<a href="man.php"> Man </a> | <a href="kid.php"> Kid </a>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <section class="popup-cardproduct">
        <div class="container" style="border: none;">
            <div class="product mt-5">
                <div class="row justify-content-between" style="text-align:center;">
                    <?php

                    $sql = "select * from produk where kategori='women' ";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result)) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="col-md-4 px-5 py-5">
                                <div class="row">
                                    <div class="gambar" style="min-height: 550px;">
                                        <a href="show-katalog.php?id=<?php echo $row['id'] ?>">
                                            <img src="<?php echo $upload_dir . $row['image'] ?>" style="max-width: 100%; cursor: pointer;">
                                        </a>
                                    </div>
                                </div>
                                <div class="row justify-content-between" style="width: 325px; opacity: 70%;">
                                    <div class="col-md-2" style="margin: 0; padding: 0;">
                                        <span class="new" style="font-size: 12px">NEW</span>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="new" style="font-size: 12px"><?php echo $row['kategori'] ?> Bape</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="text-align: left;" class="col-md">
                                        <td><?php echo $row['titlep'] ?></td> <br>
                                    </div>
                                    <div class="col-md">
                                        <td>USD $<?php echo $row['harga'] ?></td>
                                    </div>
                                </div>

                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container-putih" style="padding-bottom: 40px; margin-top: 50px;">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-info">
                        <div class="row justify-content-between" style="padding-top: 120px;">
                            <div class="col-md-3">
                                <h3 style="font-family: 'Caveat', cursive;">Clotch Store</h3>
                                <h6 style="font-family: 'Caveat', cursive;">RP.Gropup</h6>
                                <div class="row mt-4">
                                    <small> @Eduwork Challange 2022 </small>
                                    <small> Website Katalog </small>
                                </div>
                            </div>
                            <div class="col-md-2 offset-md">
                                <div class="row">
                                    <svg class="home-svg text-center" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="fill: hsl(208, 100%, 90%); width:120px">
                                        <mask id="mask0" mask-type="alpha">
                                            <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                            130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                            97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                            0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z">
                                            </path>
                                        </mask>
                                        <g mask="url(#mask0)">
                                            <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                            165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                            129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                            -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z">
                                            </path>
                                            <image class="home-img" x="-25" y="-7" href="icon/katalogcv.png" style="width: 250px;"></image>
                                        </g>
                                    </svg>
                                </div>
                                <div class="row" style="align-content: center; padding-top: 15px;">
                                    <div class="col-md-2 px-2">
                                        <a class="" target="_blank" href="https://www.behance.net/marulicrew" style="cursor: pointer;" alt="behance">
                                            <img class="offset-md" src="icon/behance-logo.png" width="22" height="22" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-2 px-2">
                                        <a target="_blank" href="https://www.instagram.com/sangbertu/" alt="instagram" style="cursor: pointer">
                                            <img class="offset-md" src="icon/Instagram-Logo.svg" width="25" height="25" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-2 px-2">
                                        <a target="_blank" href="mailto:mhasurungan54@gmail.com" alt="gmail" style="cursor: pointer">
                                            <img class="offset-md" src="icon/Gmail.png" width="25" height="25" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer" style="background: blanchedalmond; margin-bottom: 0; padding-bottom: 0; height:90px;">
            <div class="container">
                <div class="footer-item">
                    <div class="conten-footer" style="padding: 35px">
                        <div class="text">
                            <div class="row">
                                <div class="col-md">
                                    <div class="copyright">©Copyright 2022 Ruli UI Design</div>
                                </div>
                                <div class="col-md offset-md-5">
                                    <div style="font-family: 'Caveat', cursive; font-weight: normal; font-size: 14px;" class="copyright">RP.Group Design &nbsp; &nbsp;
                                        <svg xmlns="http://www.w3.org/2000/svg " xmlns:xlink="http://www.w3.org/1999/xlink " width="15 " height="14 " viewBox="0 0 15 14 ">
                                            <defs>
                                                <clipPath id="clip-path ">
                                                    <ellipse id="Ellipse_9 " data-name="Ellipse 9 " cx="7.5 " cy="7 " rx="7.5 " ry="7 " transform="translate(837.741 4896.201) " fill="#fff "></ellipse>
                                                </clipPath>
                                            </defs>
                                            <g id="Mask_Group_1 " data-name="Mask Group 1 " transform="translate(-837.741 -4896.201) " clip-path="url(#clip-path) ">
                                                <g id="id " transform="translate(838.104 4896.146) ">
                                                    <path id="Path_2 " data-name="Path 2 " d="M0,0H15.032V7.285H0Z " transform="translate(0 0) " fill="#e70011 " fill-rule="evenodd "></path>
                                                    <path id="Path_3 " data-name="Path 3 " d="M0,10.875H15.032v8.967H0Z " transform="translate(0 -3.792) " fill="#fff " fill-rule="evenodd "></path>
                                                </g>
                                            </g>
                                        </svg> Indonesia, Palembang
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://kit.fontawesome.com/4c68d22cde.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>