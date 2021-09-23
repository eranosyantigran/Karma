<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/layouts/header.php' ?>

    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Administration</h1>
                    <nav class="d-flex align-items-center">
                        <a href="/">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="/admin/index">Administration</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login_form_inner">
                        <h3>Admin</h3>

                        <form class="row login_form" action="/admin/index" enctype="multipart/form-data" method="post" id="contactForm">
                            <?php if (isset($errors) && is_array($errors)): ?>
                                <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li> - <?php echo $error; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="pice" placeholder="Pice">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="description" placeholder="Description" ">
                            </div>
                            <div class="col-md-12 form-group"> <p style="text-align: left">is_top</p>
                                <lable style="position: absolute; left: 20px;" >1</lable> <br>
                                <input type="radio" style="width: 20px;height: 20px ;
                                                    position: absolute;right: 50%;margin-top: -20px;left: 50%;"
                                       id="name" value="1" name="is_top" placeholder="Is_slide" ">
                                <lable style="position: absolute; left: 20px;">0</lable>
                                <input type="radio"  style="width: 20px;height: 20px ;z-index: 10;
                                                    position: absolute;right: 50%;margin-top: 5px;left: 50%;"
                                       id="name" value="0" name="is_top" placeholder="Is_slide"">
                            </div>
                            <div class="col-md-12 form-group"> <p style="text-align: left">is_slide</p>
                            <lable style="position: absolute; left: 20px;" >1</lable> <br>
                                <input type="radio" style="width: 20px;height: 20px ;
                                                    position: absolute;right: 50%;margin-top: -20px;left: 50%;"
                                       id="name" value="1" name="is_slide" placeholder="Is_slide" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                            <lable style="position: absolute; left: 20px;">0</lable>
                                <input type="radio"  style="width: 20px;height: 20px ;z-index: 10;
                                                    position: absolute;right: 50%;margin-top: 5px;left: 50%;"
                                       id="name" value="0" name="is_slide" placeholder="Is_slide" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">

                            </div>
                            <div class="col-md-12 form-group">
                                <input type="file"  class="form-control" style="margin-top: 20px" id="name" name="image" placeholder="Image"">
                            </div>
                            <div class="col-md-12 form-group"> <p style="text-align: left">status</p>
                                <lable style="position: absolute; left: 20px;" >1</lable> <br>
                                <input type="radio"  style="width: 20px;height: 20px ;
                                                    position: absolute;right: 50%;margin-top: -20px;left: 50%;"
                                       id="name" value="1" name="status" placeholder="Is_slide" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                                <lable style="position: absolute; left: 20px;">0</lable>
                                <input type="radio"  style="width: 20px;height: 20px ;z-index: 10;
                                                    position: absolute;right: 50%;margin-top: 5px;left: 50%;"
                                       id="name" value="0" name="status" placeholder="Is_slide" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">

                            </div>

                            <div class="col-md-12 form-group" style="margin-top: 20px">
                                <button type="submit" name="submit" value="submit" class="primary-btn">Push</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="login_form_inner">
                        <h3>Orders</h3>

                        <table>
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Answer</th>

                                </tr>
                            </thead>
                            <?php  while ($row = $adminka->fetch()) { ?>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p><?= $row['user_name']?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5><?= $row['login']?></h5>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                            <p style="color: #0b0b0b; margin-top: 15px"><?php echo $row['pice'];?>$</p>
                                        </div>
                                    </td>
                                    <td>
                                        <h5><?php echo $row['name'];?></h5>
                                    </td>
                                    <td style="display: flex; justify-content: space-between; border: none">

                                        <?php  if ($row['status_id'] == '4' ){
                                            echo '  <a href="/admin/status/1/'.$row['id'].'">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    <a href="/admin/status/2/'.$row['id'].'">
                                                        <i class="fas fa-upload"></i> Set
                                                    </a>
                                                    <a href="/admin/status/3/'.$row['id'].'">
                                                        <i class="fas fa-download"></i> Get
                                                    </a>';
                                        } else if ($row['status_id'] == '1'){
                                            echo 'Delete';
                                        }else  if ($row['status_id'] == '2'){
                                            echo '  <a>
                                                    <i class="fas fa-upload"></i> Set
                                                    </a>
                                                    <a href="/admin/status/3/'.$row['id'].'">
                                                        <i class="fas fa-download"></i> Get
                                                    </a>';
                                        }else if ($row['status_id'] == '3'){
                                            echo ' Get';
                                        }?>
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
