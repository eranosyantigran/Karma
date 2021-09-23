<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/layouts/header.php' ?>

<?php require_once ROOT . '/Db.php'?>


    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                    <?php if ($productsInCart): ?>
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  foreach ($products as $product): ?>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="/templates/img/upload/<?=$product['image']?>" alt="">
                                    </div>
                                    <div class="media-body">
                                        <p><?= $product['name']?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5><?= $product['pice']?>$</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <p style="color: #0b0b0b; margin-top: 15px"><?php echo $productsInCart[$product['id']];?></p>
                                </div>
                            </td>
                            <td>
                                <h5><?php echo $productsInCart[$product['id']] * $product['pice'];?>$</h5>
                            </td>
                            <td><a href="/cart/delete/<?=$product['id']?>"><i class="fas fa-minus-circle" style="cursor: pointer"></i></a></td>
                        </tr>
                        <?php endforeach; ?>

                        <tr class="bottom_button">
                            <td>
                            <?php  if (isset($_SESSION['user'])) {
                                echo ' <a class="gray_btn" href="/by/index/'.$_SESSION['user'].'">By</a>';
                            }else{
                                echo ' <a class="gray_btn" href="/login/login">By</a>';
                            }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5><?php echo $totalPrice;?>$</h5>
                            </td>
                        </tr>
                        </tbody>
                    <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>
    </section>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/layouts/footer.php' ?>