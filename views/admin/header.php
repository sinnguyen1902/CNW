<?php
$name = $_SESSION['username'];
$id = $_SESSION['id'];
if($id){
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container col-8">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/loginadmin">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo '/createbrand'?>">Add Brand</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo '/createcategory'?>">Add Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo '/createproduct'?>">Add product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo '/cart'?>">Cart</a>
                    </li>
                    <li class="nav-item">
                        <p class="nav-link"><?php echo $name?></p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo '/logout'?>">Logout</a>
                    </li>

                </ul>

            </div>
        </nav>


        <?php
}else{
    header("location:/loginadmin");
}
?>