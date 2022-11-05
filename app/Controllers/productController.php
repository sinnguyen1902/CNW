<?php 

namespace App\Controllers;

use App\Models\dangnhap;
use App\Models\cus_cart;
use App\Models\product;
use App\Models\brand;
use App\Models\category;

use Symfony\Component\Routing\RouteCollection;

class productController{
    public function createproduct(RouteCollection $routes)
	{

        session_start();
        $_SESSION['username'] = $_SESSION['username'];
        $_SESSION['id'] = $_SESSION['id'];
        $product = product::with('brand','category')->get();
        $brand = brand::all();
        $category = category::all();
        require_once APP_ROOT . '/views/admin/product.php';
	}

    public function addproduct(RouteCollection $routes)
	{ 
		//echo '1';
        if(isset($_POST['submit'])){
             $product = new product();
             $product->title = $_POST['product_name'];
             $product->brand_id = $_POST['product_brand'];
             $product->category_id = $_POST['product_category'];
             $product->des = $_POST['product_des'];
			 
			 //$filename = $_FILES["product_img"]["name"];
            if(isset( $_FILES["product_img"]["name"])){
            
            $file_name = $_FILES['product_img']['name'];
            $permited = array('jpg','jpeg','png','gif');
            $file_size = $_FILES['product_img']['size'];
            $file_temp = $_FILES['product_img']['tmp_name'];

            $div = explode('.',$file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()),0,10).'.'.$file_ext;

            $uploaded_image = "./uploads/".$unique_image;

            move_uploaded_file($file_temp,$uploaded_image);
            
            $product->img = $unique_image;
        }


		 	
			//echo($product);
             $product->save();
             header('Location:/createproduct');
        }
       
	}
    public function deleteproduct(RouteCollection $routes, $id){
        $product = product::find($id);
        product::where('id',$product->id)->delete();
        unlink('./uploads/'.$product->img);
        header('Location:/createproduct');
    }
    public function editproduct(RouteCollection $routes, $id){
        session_start();
        $_SESSION['username'] = $_SESSION['username'];
        $_SESSION['id'] = $_SESSION['id'];
        $product_e = product::find($id);
        $product = product::with('brand','category')->get();
        $brand = brand::all();
        $category = category::all();
        require_once APP_ROOT . '/views/admin/product.php';
    }

    public function updateproduct(RouteCollection $routes, $id)
	{ 
		//echo '1';
        if(isset($_POST['submit'])){
             $product = product::find($id);

             $product->title = $_POST['product_name'];
             $product->brand_id = $_POST['product_brand'];
             $product->category_id = $_POST['product_category'];
             $product->des = $_POST['product_des'];
			 
			 //$filename = $_FILES["product_img"]["name"];
            
             if(!empty( $_FILES['product_img']['name'])){
            
            $file_name = $_FILES['product_img']['name'];
            $permited = array('jpg','jpeg','png','gif');
            $file_size = $_FILES['product_img']['size'];
            $file_temp = $_FILES['product_img']['tmp_name'];

            $div = explode('.',$file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()),0,10).'.'.$file_ext;

            $uploaded_image = "./uploads/".$unique_image;

            move_uploaded_file($file_temp,$uploaded_image);
            unlink('./uploads/'.$product->img);
            $product->img = $unique_image;

        }else{
            $product->img = $product->img;
        }

			//echo($product);
              $product->save();
              header('Location:/createproduct');
        }
       
	}

    // cart admin

    public function cart(RouteCollection $routes){
        session_start();
        $_SESSION['username'] = $_SESSION['username'];
        $_SESSION['id'] = $_SESSION['id'];
        $cart = cus_cart::with('customer','product')->get();
        

        require_once APP_ROOT . '/views/admin/cart.php';
    }
	
}