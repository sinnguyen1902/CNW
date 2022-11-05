<?php 

namespace App\Controllers;

use App\Models\dangnhap;
use App\Models\category;

use Symfony\Component\Routing\RouteCollection;

class categoryController{
    public function createcategory(RouteCollection $routes)
	{

        session_start();
        $_SESSION['username'] = $_SESSION['username'];
        $_SESSION['id'] = $_SESSION['id'];
        $category = category::all();
        require_once APP_ROOT . '/views/admin/category.php';
	}

    public function addcategory(RouteCollection $routes)
	{
        if(isset($_POST['category_name'])){
            //$category_name = $_POST['category_name'];
            //echo $category_name;
             $category = new category();
             $category->title = $_POST['category_name'];
            $category->save();
            header('Location:/createcategory');
        }
       
	}
	
}