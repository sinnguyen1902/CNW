<?php
require_once 'header.php';
?>

<form action="/addbrand" method="post">
    <span class="input-group-text" id="addon-wrapping">Add brand</span>
    <input type="text" name="brand_name" class="form-control" placeholder="Username" aria-label="Username"
        aria-describedby="addon-wrapping">
    <button class="btn btn-success">ADD</button>
</form>
<h2>List brand</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Title</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($brand as $key => $brand):?>
        <tr>
            <th scope="row"><?=$key?></th>
            <td><?=$brand->title?></td>
            <td><a href="/editbrand">Edit</a>|<a href="/deletebrand">Delete</a></td>

        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php
require_once 'footer.php';
?>