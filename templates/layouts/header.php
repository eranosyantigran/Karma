<?php require_once ROOT. '/models/Cart.php';
 require_once ROOT. '/models/User.php';
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="/templates/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Karma Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?$_SERVER["DOCUMENT_ROOT"]?>/templates/css/linearicons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?$_SERVER["DOCUMENT_ROOT"]?>/templates/css/themify-icons.css">
	<link rel="stylesheet" href="<?$_SERVER["DOCUMENT_ROOT"]?>/templates/css/bootstrap.css">
	<link rel="stylesheet" href="<?$_SERVER["DOCUMENT_ROOT"]?>/templates/css/owl.carousel.css">
	<link rel="stylesheet" href="<?$_SERVER["DOCUMENT_ROOT"]?>/templates/css/nice-select.css">
	<link rel="stylesheet" href="<?$_SERVER["DOCUMENT_ROOT"]?>/templates/css/nouislider.min.css">
	<link rel="stylesheet" href="<?$_SERVER["DOCUMENT_ROOT"]?>/templates/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?$_SERVER["DOCUMENT_ROOT"]?>/templates/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?$_SERVER["DOCUMENT_ROOT"]?>/templates/css/magnific-popup.css">
	<link rel="stylesheet" href="<?$_SERVER["DOCUMENT_ROOT"]?>/templates/css/main.css">
</head>

<body>
<header class="header_area sticky-header">
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light main_box">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="/"><img src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/logo.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							   aria-expanded="false">Shop</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
								<li class="nav-item"><a class="nav-link" href="/product/products">Product Details</a></li>
								<li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
								<li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
								<li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
							</ul>
						</li>
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							   aria-expanded="false">Blog</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
								<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
							</ul>
						</li>
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							   aria-expanded="false">Pages</a>
							<ul class="dropdown-menu">
                                <?php  if (!isset($_SESSION['user'])) {
                                    echo '<li class="nav-item"><a class="nav-link" href="/login/login">Login</a></li> ';
                                }
                                ?>

								<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        <?php if(isset($_SESSION['user']) and $_SESSION['user'] == 'admin'){

                                echo '<li class="nav-item"><a class="nav-link" href="/admin/index">Admin</a></li>
                                       <li class="nav-item"><a class="nav-link" href="/cabinet/logout">Log out</a></li>';
                        }else if (isset($_SESSION['user'])){
                            echo '<li class="nav-item"><a class="nav-link" href="/cabinet/cabinet">Account</a></li> 
                                  <li class="nav-item"><a class="nav-link" href="/story/story/'.$_SESSION['user'].'">Story</a></li>
                                  <li class="nav-item"><a class="nav-link" href="/cabinet/logout">Log out</a></li>';
                        }
                        ?>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item">
                            <a href="/cart/" class="cart">
                                <span class="ti-bag"></span>
                                (<span class="bagCount"><?= Cart::countItem(); ?></span>)
                            </a>
                        </li>
						<li class="nav-item">
							<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div class="search_input" id="search_input_box">
		<div class="container">
			<form class="d-flex justify-content-between">
				<input type="text" class="form-control" id="search_input" placeholder="Search Here">
				<button type="submit" class="btn"></button>
				<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
			</form>
		</div>
	</div>
</header>
