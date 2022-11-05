<?php
require_once 'header.php';
?>
<?php if(isset($product_e)):?>
<form action="/updateproduct/<?=$product_e->id?>" method="post" enctype="multipart/form-data">
    <?php else:?>
    <form action="/addproduct" method="post" enctype="multipart/form-data">
        <?php endif;?>

        <span class="input-group-text" id="addon-wrapping">Product title</span>

        <?php if(isset($product_e)):?>
        <input type="text" name="product_name" class="form-control" value="<?= $product_e->title?>"
            aria-describedby="addon-wrapping">
        <?php else:?>
        <input type="text" name="product_name" class="form-control" aria-describedby="addon-wrapping">
        <?php endif;?>




        <span class="input-group-text" id="addon-wrapping">Brand</span>
        <select name="product_brand" class="form-select" aria-label="Default select example">

            <?php foreach ($brand as $brand): ?>
            <option <?php if(isset($product_e) && ($product_e->brand_id == $brand->id) ){echo "selected";}?>
                value="<?= $brand->id?>"><?=$brand->title?></option>
            <?php endforeach; ?>
        </select>

        <span class="input-group-text" id="addon-wrapping">Category</span>
        <select name="product_category" class="form-select" aria-label="Default select example">

            <?php foreach ($category as $category): ?>
            <option <?php if(isset($product_e) && ($product_e->category_id == $category->id) ){echo "selected";}?>
                value="<?= $category->id?>"><?=$category->title?></option>
            <?php endforeach; ?>
        </select>

        <span class="input-group-text" id="addon-wrapping">Product des</span>

        <?php if(isset($product_e)):?>
        <input type="text" name="product_des" class="form-control" value="<?=$product_e->des?>"
            aria-describedby="addon-wrapping">
        <?php else:?>
        <input type="text" name="product_des" class="form-control" aria-describedby="addon-wrapping">
        <?php endif;?>


        <span class="input-group-text" id="addon-wrapping">Product img</span>
        <?php if(isset($product_e)):?>

        <input type="file" name="product_img" class="form-control" aria-describedby="addon-wrapping">
        <img width="200px" hight="200px" src="/uploads/<?php echo $product_e->img?>" alt=""><br>
        <?php else:?>
        <input type="file" name="product_img" class="form-control" aria-describedby="addon-wrapping">
        <?php endif;?>

        <?php if(isset($product_e)):?>
        <button class="btn btn-success" name="submit">UPDATE</button>
        <?php else:?>
        <button class="btn btn-success" name="submit">ADD</button>
        <?php endif;?>

    </form>


    <h2>List product</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">Title</th>
                <th scope="col">Brand</th>
                <th scope="col">Category</th>
                <th scope="col">Image</th>
                <th scope="col">Des</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($product as $key => $product):?>
            <tr>
                <th scope="row"><?=$key?></th>
                <td><?=$product->title?></td>
                <td><?=$product->brand->title?></td>
                <td><?=$product->category->title?></td>

                <td><img width="100px" hight="100px" src="/uploads/<?php echo $product->img?>" alt=""></td>
                <td><?=$product->des?></td>
                <td><a href="/editproduct/<?= $product->id?>">Edit</a>|<a
                        href="/deleteproduct/<?= $product->id?>">Delete</a></td>

            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <?php
require_once 'footer.php';
?>