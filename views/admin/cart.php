<?php
require_once 'header.php';
?>
<h2>List Cart Order</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Name</th>
            <th scope="col">Product Name</th>
            <th scope="col">Image</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Total</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($cart as $key => $cart):?>
        <tr>
            <th scope="row"><?=$key?></th>
            <td><?=$cart->customer->name?></td>
            <td><?=$cart->product->title?></td>
            <td><img width="100px" hieght="100px" src="/uploads/<?=$cart->product->img?>" alt=""></td>
            <td><?=$cart->quantity_product?></td>
            <td><?=number_format($cart->product->price,0)?></td>
            <td><?= number_format($cart->quantity_product*$cart->product->price,0)?></td>
            <td><a href="/editbrand">Edit</a>|<a href="/deletebrand">Delete</a></td>

        </tr>
        <?php endforeach;?>
    </tbody>
</table>

<?php
require_once 'footer.php';
?>