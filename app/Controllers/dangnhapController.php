<?php 

namespace App\Controllers;

use App\Models\dangnhap;
use Symfony\Component\Routing\RouteCollection;

class dangnhapController{
	
	public function loginadmin(RouteCollection $routes)
	{
		session_start();
		if(!empty($_SESSION['username']) && !empty($_SESSION['id'])){
			$_SESSION['username'] = $_SESSION['username'];
			$_SESSION['id'] = $_SESSION['id'];
		require_once APP_ROOT . '/views/admin/admin.php';
		}else{
        require_once APP_ROOT . '/views/admin/loginadmin.php';
		}

	}
	public function login(RouteCollection $routes)
	{
		if(isset($_POST['username']) && isset($_POST['password'])){
			$result = dangnhap::where('username', $_POST['username'])->where('password', $_POST['password'])->where('stt','0')->first();
        	session_start();
			$_SESSION['username'] = $result->username;
			$_SESSION['id'] = $result->id;
			require_once APP_ROOT . '/views/admin/admin.php';
		}else{
			$mess = 'dang nhap sai';
			require_once APP_ROOT . '/views/admin/loginadmin.php';

		}
	}
	public function logout(RouteCollection $routes)
	{
		session_start();
			$_SESSION['username'] = '';
			$_SESSION['id'] = '';
		header("Location:/loginadmin");
	}

	
}