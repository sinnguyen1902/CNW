<?php require 'header.php'; ?>


<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Checkout</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Checkout Start -->

<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div class="mb-4">
                <h4 class="font-weight-semi-bold mb-4">Login</h4>
                <form action="/login_cus" method="post">

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" type="email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Password</label>
                            <input class="form-control" name="password" type="password">
                        </div>
                        <div class="col-md-6 form-group">
                            <button class="btn btn-block btn-primary font-weight-bold my-1 py-1">Login</button>
                        </div>
                </form>

                <!--
                    <div class="col-md-6 form-group">
                        <label>Mobile No</label>
                        <input class="form-control" type="text" placeholder="+123 456 789">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Address Line 1</label>
                        <input class="form-control" type="text" placeholder="123 Street">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Address Line 2</label>
                        <input class="form-control" type="text" placeholder="123 Street">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Country</label>
                        <select class="custom-select">
                            <option selected>United States</option>
                            <option>Afghanistan</option>
                            <option>Albania</option>
                            <option>Algeria</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>City</label>
                        <input class="form-control" type="text" placeholder="New York">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>State</label>
                        <input class="form-control" type="text" placeholder="New York">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>ZIP Code</label>
                        <input class="form-control" type="text" placeholder="123">
                    </div> -->
                <!-- <div class="col-md-12 form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="newaccount">
                            <label class="custom-control-label" for="newaccount">Create an account</label>
                        </div>
                    </div> -->
                <!-- <div class="col-md-12 form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="shipto">
                            <label class="custom-control-label" for="shipto" data-toggle="collapse"
                                data-target="#shipping-address">Ship to different address</label>
                        </div>
                    </div> -->
            </div>
        </div>
        <div class="mb-4">
            <h4 class="font-weight-semi-bold mb-4">Register</h4>
            <form action="/register" method="post">

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" type="email">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" type="password">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" type="type">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Phone</label>
                        <input class="form-control" name="phone" type="type">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Address/Shipping</label>
                        <input class="form-control" name="address" type="type">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Zipcode</label>
                        <input class="form-control" name="zipcode" type="type">
                    </div>
                    <div class="col-md-6 form-group">
                        <button class="btn btn-block btn-primary font-weight-bold my-1 py-1">Register</button>
                    </div>
            </form>

        </div>
    </div>
    <!-- <div class="collapse mb-4" id="shipping-address">
                <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>First Name</label>
                        <input class="form-control" type="text" placeholder="John">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Last Name</label>
                        <input class="form-control" type="text" placeholder="Doe">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="text" placeholder="example@email.com">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Mobile No</label>
                        <input class="form-control" type="text" placeholder="+123 456 789">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Address Line 1</label>
                        <input class="form-control" type="text" placeholder="123 Street">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Address Line 2</label>
                        <input class="form-control" type="text" placeholder="123 Street">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Country</label>
                        <select class="custom-select">
                            <option selected>United States</option>
                            <option>Afghanistan</option>
                            <option>Albania</option>
                            <option>Algeria</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>City</label>
                        <input class="form-control" type="text" placeholder="New York">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>State</label>
                        <input class="form-control" type="text" placeholder="New York">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>ZIP Code</label>
                        <input class="form-control" type="text" placeholder="123">
                    </div>
                </div>
            </div> -->
</div>
<div class="col-lg-4">
    <div class="card border-secondary mb-5">
        <div class="card-header bg-secondary border-0">
            <h4 class="font-weight-semi-bold m-0">Order Total</h4>
        </div>
        <div class="card-body">

            <h5 class="font-weight-medium mb-3">Products</h5>
            <?php $total = 0;?>
            <?php if(!empty($_SESSION['cart'])) :?>

            <?php foreach ($_SESSION['cart'] as $key => $value):?>
            <?php if(!empty($value['id'])):?>
            <div class="d-flex justify-content-between">
                <p><?=$value['title']?></p>
                <p><?= number_format($value['quantity'] * $value['price'],0).''.'VND'?></p>
                <?php $total = $total + $value['quantity'] * $value['price'];?>
            </div>
            <?php endif;?>
            <?php endforeach;?>
            <?php endif;?>
            <hr class="mt-0">
            <div class="d-flex justify-content-between mb-3 pt-1">
                <h6 class="font-weight-medium">Subtotal</h6>
                <h6 class="font-weight-medium"><?=number_format($total,0)?></h6>
            </div>
            <div class="d-flex justify-content-between">
                <h6 class="font-weight-medium">Shipping</h6>
                <h6 class="font-weight-medium">FREE</h6>
            </div>
        </div>
        <div class="card-footer border-secondary bg-transparent">
            <div class="d-flex justify-content-between mt-2">
                <h5 class="font-weight-bold">Total</h5>
                <h5 class="font-weight-bold"><?=number_format($total,0)?></h5>
            </div>
        </div>

    </div>
    <div class="card border-secondary mb-5">
        <div class="card-header bg-secondary border-0">
            <h4 class="font-weight-semi-bold m-0">Payment</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="payment" id="paypal">
                    <label class="custom-control-label" for="paypal">Trả khi nhận hàng</label>
                </div>
            </div>
            <!--  <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                            <label class="custom-control-label" for="directcheck">Direct Check</label>
                        </div>
                    </div>-->
            <div class="">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                    <label class="custom-control-label" for="banktransfer">Online</label>
                </div>
            </div>
        </div>
        <?php if(!empty($_SESSION['customer_id'])):?>
        <div class="card-footer border-secondary bg-transparent">
            <a href="/checkoutcart" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place Order</a>
        </div>
        <?php else: ?>
        <div class="card-footer border-secondary bg-transparent">
            <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Login Or
                Register</button>
        </div>
        <?php endif;?>
    </div>
</div>
</div>
</div>
<!-- Checkout End -->

<?php require 'footer.php'; ?>