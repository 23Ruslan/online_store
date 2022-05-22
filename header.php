<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <link rel="stylesheet" href="./style_switchable_sidebar_navigation.css">
    <link rel="stylesheet" href="./style.css">
        <style>
body {
  background-image: url(assets/delivery.jpg);/* source: https://www.cafe-future.ru/upload/medialibrary/9bd/9bd1d9a03a5fd96a71b425818a78b1ba.jpg */
  background-blend-mode: lighten;
  background-color: #96b0e3;
  background-size: cover;
}
    </style><?php
    require ('functions.php');
    ?>
</head>
<body>
<header id="header1" style="-webkit-animation: change-background 5s linear infinite;-moz-animation: change-background 5s 
linear infinite;-o-animation: change-background 5s linear infinite;animation: change-background 5s linear infinite;">
    <div class="strip d-flex justify-content-between px-3 py-2">
        <div class="font-rale font-size-14">
            <a href="cart.php#wishlist" class="px-3 border-right text-dark">Wishlist —<?php echo ' '.count($product->getData('wishlist')); ?></a>
            <a href="login1.php" class="px-3 border-right border-left text-dark">Login for user</a>
            <a href="loginForAdmin.php" class="px-3 border-right border-left text-dark">Administrator login</a>
            <a href="logout.php" class="px-3 border-left text-dark">Logout for user or administrator</a>
        </div>
    </div>
    <nav class="color-second-bg navbar navbar-expand-lg" style="background: #55b07c;">
                <!-- Unicode 'TRIGRAM FOR HEAVEN' (U+2630) -->
        <a class="navbar-brand" href="index.php"> &#160 &#160 &#160<em style=
"-webkit-animation: blinker 3s linear infinite;-moz-animation: blinker 3s linear infinite;-o-animation: 
blinker 3s linear infinite;animation: blinker 3s linear infinite;"><b>Laptop store</b></em></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php#top-sale">Top Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#blogs">Our blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#new-phones">NEW</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login1.php"><em> &#160 &#160 &#160 &#160 &#160 &#160 Hello!<?php echo $_COOKIE['user'] ?? "";?></em></a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-rale" style="margin: auto; padding: auto;">
            Shopping cart:
                <a href="cart.php" class="rounded color-primary-bg">
                    <span class="font-size-16 text-yellow"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-2 py-3 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart'));?></span>
                </a>
            </form>
        </div>
    </nav>

    <input type="checkbox" id="nav-toggle" hidden>
    <nav class="nav">
        <!-- меткатка, имеющая id чекбокса в атрибуте for . Unicode 'TRIGRAM FOR HEAVEN' (U+2630) -->
        <label for="nav-toggle" class="nav-toggle">menu</label>
        <h2 class="logo">  <a class="navbar-brand" href="index.php"> <em><b>Laptop Store</b></em></a>  </h2>
        <ul>
        <li><a href="index.php#top-sale">Top Items</a>
        <li><a href="index.php#blogs">Our Blogs</a>
        <li><a href="index.php#new-phones">NEW</a>
        <li><a href="login1.php"><em> Hello! <?php echo ' '; echo $_COOKIE['user'] ?? "";?></em></a>
        <li><a href="cart.php#wishlist">wishlist —<?php echo ' '.count($product->getData('wishlist')); ?></a>
        <li><a href="login1.php">Login for user</a>
        <li><a href="loginForAdmin.php">Administrator login</a>
        <li><a href="logout.php">Logout for user or administrator</a> 
        </ul>
    </nav>
</header>
<main id="main-site">