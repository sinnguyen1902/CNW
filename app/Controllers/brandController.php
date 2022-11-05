<?php 

namespace App\Controllers;

use App\Models\dangnhap;
use App\Models\brand;

use Symfony\Component\Routing\RouteCollection;

class brandController{
    public function createbrand(RouteCollection $routes)
	{

        session_start();
        $_SESSION['username'] = $_SESSION['username'];
        $_SESSION['id'] = $_SESSION['id'];
        $brand = brand::all();
        require_once APP_ROOT . '/views/admin/brand.php';
	}

    public function addbrand(RouteCollection $routes)
	{
        if(isset($_POST['brand_name'])){
            //$brand_name = $_POST['brand_name'];
            //echo $brand_name;
             $brand = new brand();
             $brand->title = $_POST['brand_name'];
            $brand->save();
            header('Location:/createbrand');
        }
       
	}
	
}