<?php 

namespace App\Controllers;
use App\Models\customer;
use App\Models\cus_cart;
use App\Models\dangnhap;
use App\Models\product;
use App\Models\brand;
use App\Models\category;

use Symfony\Component\Routing\RouteCollection;

class indexController{
	
	public function index(RouteCollection $routes)
	{
        $this->aulogin();

        $product = product::with('brand','category')->orderby('id','desc')->take(4)->get();
        
        $product_all = product::with('brand','category')->get();
        $slider =  product::all()->random(2);
        $category = category::all();
        
        $cate_home = category::with('product')->orderby('id', 'desc')->get();


        // foreach($cate_home as $cate_home){
        //     $c = 0;
        //     foreach($cate_home->product as $product){
        //         if($product->id){
        //         $c = $c + 1;
        //         }
        //     }
        //     echo $c;

        // }
        

        require_once APP_ROOT . '/views/home.php';
	}
    
    public function viewdetail(RouteCollection $routes , $id)
	{
       
        $this->aulogin();
        $slider =  product::all()->random(2);

        $product = product::with('brand','category')->orderby('id','desc')->take(4)->get();
        
        $product_all = product::with('brand','category')->get();
        
        $category = category::all();
        $cate_home = category::all();
        //details
        
        $viewdetail = product::where('id',$id)->first();

        require_once APP_ROOT . '/views/viewdetail.php';
	}
    
	

    public function addtocart(RouteCollection $routes)
	{
        $this->aulogin();
        $slider =  product::all()->random(2);

        
        $product = product::with('brand','category')->orderby('id','desc')->take(4)->get();
        
        $product_all = product::with('brand','category')->get();
        
        $category = category::all();
        $cate_home = category::all();
        //cart
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $product_cart = product::where('id',$id)->first();
    }
        
        if(isset($_POST['quantity'])){
                $quantity = $_POST['quantity'];
        }else{
                $quantity = '1';
        }
    
    
        if (isset($_SESSION["cart"]) && isset($product_cart)){
            $item_array_id = array_column($_SESSION["cart"],"id");
            if (!in_array($product_cart->id,$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'id' => $product_cart->id,
                    'title' => $product_cart->title,
                    'price' => $product_cart->price,
                    'quantity' => $quantity,
                    'img' => $product_cart->img,
                );
                $_SESSION["cart"][$count] = $item_array;
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
            }
        }elseif(isset($product_cart->id)){
            $item_array = array(
                    'id' => $product_cart->id,
                    'title' => $product_cart->title,
                    'price' => $product_cart->price,
                    'quantity' => $quantity,
                    'img' => $product_cart->img,
            );
            $_SESSION["cart"][0] = $item_array;
        }
       require_once APP_ROOT . '/views/cart.php';
	}


    public function addtocart1(RouteCollection $routes, $id)
	{
        $this->aulogin();
        $slider =  product::all()->random(2);

        
        $product = product::with('brand','category')->orderby('id','desc')->take(4)->get();
        
        $product_all = product::with('brand','category')->get();
        
        $category = category::all();
        $cate_home = category::all();
        //cart
            $product_cart = product::where('id',$id)->first();
        
            $quantity = '1';
    
    
        if (isset($_SESSION["cart"]) && isset($product_cart)){
            $item_array_id = array_column($_SESSION["cart"],"id");
            if (!in_array($product_cart->id,$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'id' => $product_cart->id,
                    'title' => $product_cart->title,
                    'price' => $product_cart->price,
                    'quantity' => $quantity,
                    'img' => $product_cart->img,
                );
                $_SESSION["cart"][$count] = $item_array;
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
            }
        }elseif(isset($product_cart->id)){
            $item_array = array(
                    'id' => $product_cart->id,
                    'title' => $product_cart->title,
                    'price' => $product_cart->price,
                    'quantity' => $quantity,
                    'img' => $product_cart->img,
            );
            $_SESSION["cart"][0] = $item_array;
        }
       require_once APP_ROOT . '/views/cart.php';
	}



    public function deletecart(RouteCollection $routes , $id)
	{
        $this->aulogin();
        $slider =  product::all()->random(2);

            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["id"] == $id){
                    unset($_SESSION["cart"][$keys]);
                    
                    header("Location:/addtocart");
                }
            }
        

        
	}
    public function category(RouteCollection $routes , $id)
	{
        $this->aulogin();
        
        
        $slider =  product::all()->random(2);
        
        $category = category::all();
        // checkout Cart
        $product_cate = product::where('category_id', $id)->orderby('id','desc')->get();
        require_once APP_ROOT . '/views/shop.php';
        

        
	}
    public function checkout(RouteCollection $routes)
	{
        $this->aulogin();
        $slider =  product::all()->random(2);
        $product_all = product::with('brand','category')->get();
        $category = category::all();

        require_once APP_ROOT . '/views/checkout.php';
        
	}



    // login and register
    
    public function register(RouteCollection $routes)
	{
        
        $product = product::with('brand','category')->orderby('id','desc')->take(4)->get();
        $slider =  product::all()->random(2);
        
        $product_all = product::with('brand','category')->get();
        $category = category::all();
        $cate_home = category::all();
        $total = 0;
        // register
        if(isset($_POST['email']) && isset($_POST['name']) 
        && isset($_POST['password']) && isset($_POST['phone']) 
        && isset($_POST['address']) &&isset($_POST['zipcode'])){
            $customer = new customer();
            $customer->email = $_POST['email'];
            $customer->password = $_POST['password'];
            $customer->name = $_POST['name'];
            $customer->phone = $_POST['phone'];
            $customer->zipcode = $_POST['zipcode'];
            $customer->save();

        }
        
        header("Location:/checkout");
        
	}
    
    public function login_cus(RouteCollection $routes)
	{
        session_start();
        
        $product = product::with('brand','category')->orderby('id','desc')->take(4)->get();
        
        $product_all = product::with('brand','category')->get();
        $slider =  product::all()->random(2);
    
        $category = category::all();
        $cate_home = category::all();
        $total = 0;
        // login
        if(isset($_POST['email'])  && isset($_POST['password'])){
            $customer = customer::where('email', $_POST['email'])->where('password', $_POST['password'])->first();
            $_SESSION['customer_id'] = $customer->id;
            $_SESSION['customer_name'] = $customer->name;
        }
        
        header("Location:/checkout");
        
	}
    public function aulogin() {
        session_start();
        if(isset($_SESSION['customer_id']) && isset($_SESSION['customer_name'])){
        
        $_SESSION['customer_id'] = $_SESSION['customer_id'];
        $_SESSION['customer_name'] = $_SESSION['customer_name'];
        }
    }

    public function logout_cus(RouteCollection $routes)
	{
        session_start();
        $product = product::with('brand','category')->orderby('id','desc')->take(4)->get();
        $slider =  product::all()->random(2);
        
        $product_all = product::with('brand','category')->get();
        
        $category = category::all();
        $cate_home = category::all();
        $total = 0;
        // logout_cus
        $_SESSION['customer_id'] = '';
        $_SESSION['customer_name'] = '';
        
        header("Location:/checkout");
        
	}
    public function checkoutcart(RouteCollection $routes)
	{
        $this->aulogin();
        $product = product::with('brand','category')->orderby('id','desc')->take(4)->get();
        $product_all = product::with('brand','category')->get();
        $slider =  product::all()->random(2);
        
        $category = category::all();
        $cate_home = category::all();
        $total = 0;
        // checkout Cart
        if(isset($_SESSION['cart']) && isset($_SESSION['customer_id'])){
            
            foreach($_SESSION['cart'] as $key => $value){
            $cus_cart = new cus_cart();
            $cus_cart->customer_id = $_SESSION['customer_id'];
            $cus_cart->quantity_product = $value['quantity'];
            $cus_cart->product_id = $value['id'];
            $cus_cart->save();
            }
            session_start();
            $item_array = array(
                'id' => '',
                'title' => '',
                'price' => '',
                'quantity' => '',
                'img' => '',);
            $_SESSION["cart"][0] = $item_array;
            
        }
        header("Location:/checkout");
        
        
	}
    public function shop(RouteCollection $routes)
	{
        $this->aulogin();
        $product = product::with('brand','category')->orderby('id','desc')->take(4)->get();
        $product_all = product::with('brand','category')->get();
        $slider =  product::all()->random(2);
        
        $category = category::all();
        $cate_home = category::all();
        $total = 0;
        // checkout Cart
        
        require_once APP_ROOT . '/views/shop.php';
         
	}
    public function search(RouteCollection $routes)
	{
        $this->aulogin();
        $product = product::with('brand','category')->orderby('id','desc')->take(4)->get();
        $slider =  product::all()->random(2);
        $category = category::all();
        // checkout Cart
        if(isset($_POST['search'])){
            $search = product::where('title','like','%'.$_POST['search'].'%')->get();
        }
        //echo $search;
       require_once APP_ROOT . '/views/shop.php';
         
	}
	
}