<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/layouts/header.php' ?>


<?php require_once ROOT . '/Db.php'?>
<!-- start banner Area -->
<div class="banner-area img">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="active-banner-slider owl-carousel">
                    <?php foreach ($product1 as  $item): ?>
                    <!-- single-slide -->
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1><?= $item['name']; ?> New <br>Collection!</h1>
                                <p><?=  $item['description'] ?></p>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-bta addCart" href="/cart/add/<?=$item['id']?>" data-id="<?=$item['id']?>"><span class="lnr lnr-cross"></span></a>
                                    <a class="addCart" href="/cart/add/<?=$item['id']?>" data-id="<?=$item['id']?>"><span class="add-text text-uppercase">Add to Bag</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" style="height: 500px" src="/templates/img/upload/<?=$item['image']?>" alt="error">
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End banner Area -->

<!-- start features Area -->
<section class="features-area section_gap">
	<div class="container">
		<div class="row features-inner">
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/features/f-icon1.png" alt="">
					</div>
					<h6>Free Delivery</h6>
					<p>Free Shipping on all order</p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/features/f-icon2.png" alt="">
					</div>
					<h6>Return Policy</h6>
					<p>Free Shipping on all order</p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/features/f-icon3.png" alt="">
					</div>
					<h6>24/7 Support</h6>
					<p>Free Shipping on all order</p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/features/f-icon4.png" alt="">
					</div>
					<h6>Secure Payment</h6>
					<p>Free Shipping on all order</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end features Area -->

<!-- Start category Area -->
<section class="category-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-12">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/category/c1.jpg" alt="">
							<a href="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/category/c1.jpg" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">Sneaker for Sports</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/category/c2.jpg" alt="">
							<a href="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/category/c2.jpg" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">Sneaker for Sports</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/category/c3.jpg" alt="">
							<a href="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/category/c3.jpg" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">Product for Couple</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-8 col-md-8">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/category/c4.jpg" alt="">
							<a href="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/category/c4.jpg" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">Sneaker for Sports</h6>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-deal">
					<div class="overlay"></div>
					<img class="img-fluid w-100" src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/category/c5.jpg" alt="">
					<a href="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/category/c5.jpg" class="img-pop-up" target="_blank">
						<div class="deal-details">
							<h6 class="deal-title">Sneaker for Sports</h6>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End category Area -->

<!-- start product Area -->
<section class="owl-carousel active-product-area section_gap">
	<!-- single product slide -->
	<div class="single-product-slider">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Latest Products</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
               <?php
                   foreach ($product as $item):
               ?>

				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/upload/<?=$item['image']?>" alt="#">
						<div class="product-details">
							<h6> <?= $item['name'] ?></h6>
							<div class="price">
								<h6><?= $item['pice']?>$</h6>
							</div>
							<div class="prd-bottom">

								<a  href="/" class="social-info addCart" data-id="<?=$item['id']?>">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="/product/products/<?= $item['id']?>" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
                <?php
               endforeach;
               ?>
			</div>
		</div>
	</div>
	<!-- single product slide -->
	<div class="single-product-slider">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Coming Products</h1>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							dolore
							magna aliqua. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<?php foreach ($slider as $item): ?>
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/upload/<?=$item['image']?>" alt="">
						<div class="product-details">
							<h6><?= $item['name'] ?> New Hammer sole
								for Sports person</h6>
							<div class="price">
								<h6><?= $item['pice'] ?>$</h6>
							</div>
							<div class="prd-bottom">

								<a href="/" class="social-info addCart" data-id="<?=$item['id']?>">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="/product/products/<?= $item['id']?>" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<!-- end product Area -->

<!-- Start exclusive deal Area -->
<section class="exclusive-deal-area">
	<div class="container-fluid">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-6 no-padding exclusive-left">
				<div class="row clock_sec clockdiv" id="clockdiv">
					<div class="col-lg-12">
						<h1>Exclusive Hot Deal Ends Soon!</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
					<div class="col-lg-12">
						<div class="row clock-wrap">
							<div class="col clockinner1 clockinner">
								<h1 class="days">150</h1>
								<span class="smalltext">Days</span>
							</div>
							<div class="col clockinner clockinner1">
								<h1 class="hours">23</h1>
								<span class="smalltext">Hours</span>
							</div>
							<div class="col clockinner clockinner1">
								<h1 class="minutes">47</h1>
								<span class="smalltext">Mins</span>
							</div>
							<div class="col clockinner clockinner1">
								<h1 class="seconds">59</h1>
								<span class="smalltext">Secs</span>
							</div>
						</div>
					</div>
				</div>
				<a href="" class="primary-btn">Shop Now</a>
			</div>
			<div class="col-lg-6 no-padding exclusive-right">
				<div class="active-exclusive-product-slider">
                    <?php foreach ($product1 as  $item): ?>
					<div class="single-exclusive-slider">
						<img class="img-fluid" src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/upload/<?=$item['image']?>" alt="">
						<div class="product-details">
							<div class="price">
								<h6><?= $item['pice'] ?>$</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<h4><?= $item['name'] ?> New Hammer sole
								for Sports person</h4>
							<div class="add-bag d-flex align-items-center justify-content-center">
								<a class="add-btn" href="cart/index/<?= $item['id'] ?>"><span class="ti-bag"></span></a>
                                <a class="addCart" href="/" data-id="<?=$item['id']?>"><span class="add-text text-uppercase">Add to Bag</span></a>
							</div>
						</div>
					</div>
                    <?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End exclusive deal Area -->

<!-- Start brand Area -->
<section class="brand-area section_gap">
	<div class="container">
		<div class="row">
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/brand/1.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/brand/2.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/brand/3.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/brand/4.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/brand/5.png" alt="">
			</a>
		</div>
	</div>
</section>
<!-- End brand Area -->

<!-- Start related-product Area -->
<section class="related-product-area section_gap_bottom">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 text-center">
				<div class="section-title">
					<h1>Deals of the Week</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/r1.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/r2.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/r3.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/r5.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/r6.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/r7.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="single-related-product d-flex">
							<a href="#"><img src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/r9.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="single-related-product d-flex">
							<a href="#"><img src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/r10.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="single-related-product d-flex">
							<a href="#"><img src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/r11.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="ctg-right">
					<a href="#" target="_blank">
						<img class="img-fluid d-block mx-auto" src="<?$_SERVER['DOCUMENT_ROOT']?>/templates/img/category/c5.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End related-product Area -->
<!-- start footer Area -->
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/layouts/footer.php' ?>
<style>
     .img{
        background: url(/templates/img/banner/banner-bg.jpg) !important;
        background-size: cover;
        position: relative;
    }

</style>