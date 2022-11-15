<?php 
use app\Controllers\indexController;
use app\Controllers\dangnhapController;
use app\Controllers\brandController;
use app\Controllers\categoryController;
use app\Controllers\productController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
//$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));
//$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('loginadmin', new Route(constant('URL_SUBFOLDER') . '/loginadmin', array('controller' => 'dangnhapController', 'method'=>'loginadmin')));
$routes->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'dangnhapController', 'method'=>'login')));
$routes->add('logout', new Route(constant('URL_SUBFOLDER') . '/logout', array('controller' => 'dangnhapController', 'method'=>'logout')));
//brand
$routes->add('createbrand', new Route(constant('URL_SUBFOLDER') . '/createbrand', array('controller' => 'brandController', 'method'=>'createbrand')));
$routes->add('addbrand', new Route(constant('URL_SUBFOLDER') . '/addbrand', array('controller' => 'brandController', 'method'=>'addbrand')));

// category
$routes->add('createcategory', new Route(constant('URL_SUBFOLDER') . '/createcategory', array('controller' => 'categoryController', 'method'=>'createcategory')));
$routes->add('addcategory', new Route(constant('URL_SUBFOLDER') . '/addcategory', array('controller' => 'categoryController', 'method'=>'addcategory')));

//product
$routes->add('createproduct', new Route(constant('URL_SUBFOLDER') . '/createproduct', array('controller' => 'productController', 'method'=>'createproduct')));
$routes->add('addproduct', new Route(constant('URL_SUBFOLDER') . '/addproduct', array('controller' => 'productController', 'method'=>'addproduct')));
$routes->add('deleteproduct', new Route(constant('URL_SUBFOLDER') . '/deleteproduct/{id}', array('controller' => 'productController', 'method'=>'deleteproduct')));
$routes->add('editproduct', new Route(constant('URL_SUBFOLDER') . '/editproduct/{id}', array('controller' => 'productController', 'method'=>'editproduct')));
$routes->add('updateproduct', new Route(constant('URL_SUBFOLDER') . '/updateproduct/{id}', array('controller' => 'productController', 'method'=>'updateproduct')));

//cart admin
$routes->add('cart', new Route(constant('URL_SUBFOLDER') . '/cart', array('controller' => 'productController', 'method'=>'cart')));

//client routes
$routes->add('home', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'indexController', 'method'=>'index')));
$routes->add('viewdetail', new Route(constant('URL_SUBFOLDER') . '/viewdetail/{id}', array('controller' => 'indexController', 'method'=>'viewdetail')));
$routes->add('category', new Route(constant('URL_SUBFOLDER') . '/category/{id}', array('controller' => 'indexController', 'method'=>'category')));
$routes->add('addtocart', new Route(constant('URL_SUBFOLDER') . '/addtocart', array('controller' => 'indexController', 'method'=>'addtocart')));
$routes->add('addtocart1', new Route(constant('URL_SUBFOLDER') . '/addtocart1/{id}', array('controller' => 'indexController', 'method'=>'addtocart1')));
$routes->add('deletecart', new Route(constant('URL_SUBFOLDER') . '/deletecart/{id}', array('controller' => 'indexController', 'method'=>'deletecart')));
$routes->add('checkout', new Route(constant('URL_SUBFOLDER') . '/checkout', array('controller' => 'indexController', 'method'=>'checkout')));
$routes->add('register', new Route(constant('URL_SUBFOLDER') . '/register', array('controller' => 'indexController', 'method'=>'register')));
$routes->add('login_cus', new Route(constant('URL_SUBFOLDER') . '/login_cus', array('controller' => 'indexController', 'method'=>'login_cus')));
$routes->add('logout_cus', new Route(constant('URL_SUBFOLDER') . '/logout_cus', array('controller' => 'indexController', 'method'=>'logout_cus')));
$routes->add('checkoutcart', new Route(constant('URL_SUBFOLDER') . '/checkoutcart', array('controller' => 'indexController', 'method'=>'checkoutcart')));


$routes->add('shop', new Route(constant('URL_SUBFOLDER') . '/shop', array('controller' => 'indexController', 'method'=>'shop')));
$routes->add('search', new Route(constant('URL_SUBFOLDER') . '/search', array('controller' => 'indexController', 'method'=>'search')));