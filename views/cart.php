<?php require 'header.php'; ?>
<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php
                        $total =  0;
                    ?>
                    <?php if(!empty($_SESSION['cart'])):?>

                    <?php foreach($_SESSION['cart'] as $key => $cart):?>
                    <?php if(!empty($cart['id'])):?>

                    <tr>
                        <td class="align-middle"><img src="/uploads/<?=$cart['img']?>" alt="" style="width: 50px;">
                            <?=$cart['title']?></td>
                        <td class="align-middle"><?=$cart['price']?></td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm bg-secondary text-center"
                                    value="<?=$cart['quantity']?>">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <?php echo number_format($cart['quantity']*$cart['price'],0) .'.'.'VND'; ?></td>
                        <?php $total = $total + $cart['quantity']*$cart['price'];?>
                        <td class="align-middle"><a href="/deletecart/<?=$cart['id']?>"
                                class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a></td>
                    </tr>
                    <?php endif;?>
                    <?php endforeach;?>
                    <?php endif;?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-5" action="">
                <!-- <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Apply Coupon</button>
                    </div>
                </div> -->
            </form>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Tóm tắt giỏ hàng</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Tổng</h6>
                        <h6 class="font-weight-medium"><?php echo number_format($total,0).''.'VND';?></h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">Miễn phí</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Tổng</h5>
                        <h5 class="font-weight-bold"><?php echo number_format($total,0).''.'VND';?></h5>
                    </div>
                    <a href="/checkout" class="btn btn-block btn-primary my-3 py-3">Tới trang thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cart End -->

<?php require 'footer.php'; ?>