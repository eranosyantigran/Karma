<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/layouts/header.php' ?>

<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Administration</h1>
                <nav class="d-flex align-items-center">
                    <a href="/">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="/admin/index">Story</a>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
                  <h1>Story</h1>
            <div class="col-lg-12">
                <div class="login_form_inner">
                    <table>
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Count</th>
                            <th scope="col">Description</th>
                            <th scope="col">Answer</th>

                        </tr>
                        </thead>
                        <?php  while ($row = $story->fetch()) { ?>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="media-body">
                                            <p><?= $row['name']?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <p style="color: #0b0b0b; margin-top: 15px"><?php echo $row['pice'];?>$</p>
                                    </div>
                                </td>
                                <td>
                                    <h5><?= $row['product_count']?></h5>
                                </td>
                                <td>
                                    <h5><?php echo $row['description'];?></h5>
                                </td>
                                <td>
                                    <?php echo $row['status'];?>
                                </td>

                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
</section>

<style>
    table , th ,tr ,td{
        border: 1px solid;

    }
    table{
        width: 100%;
    }
    th ,tr ,td{
        margin: 20px;
    }
    table{
        margin: 0 auto;
    }
    td{
        font-size: 16px;
        color:black ;

    }

</style>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/layouts/footer.php' ?>
