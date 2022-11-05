<?php
require_once 'header.php';
?>

<form action="/addcategory" method="post">
    <span class="input-group-text" id="addon-wrapping">Add category</span>
    <input type="text" name="category_name" class="form-control" placeholder="Username" aria-label="Username"
        aria-describedby="addon-wrapping">
    <button class="btn btn-success">ADD</button>
</form>
<h2>List category</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Title</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($category as $key => $category):?>
        <tr>
            <th scope="row"><?=$key?></th>
            <td><?=$category->title?></td>
            <td><a href="/editcategory">Edit</a>|<a href="/deletecategory">Delete</a></td>

        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php
require_once 'footer.php';
?>