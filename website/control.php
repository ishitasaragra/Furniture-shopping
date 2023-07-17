<?php

include_once('model.php'); //step 1 load model

class control extends model // step 2 extends
{
	// magic function that call automatically when you declare class object
	 function __construct()
	 {
		 
		 model::__construct();// step 3 call model __construct
		 
		 $url=$_SERVER['PATH_INFO'];
		 switch($url)
		 {
			 case '/index':
			 include_once('index.php');
			 break;
			 
			 case '/about':
			 include_once('about.php');
			 break;
			 
			 case '/services':
			 include_once('services.php');
			 break;
			 
			 case '/contact':
			 include_once('contact.php');
			 break;
			 
			 case '/login':
			 include_once('login.php');
			 break;
			 
			 case '/signup':
			 include_once('signup.php');
			 break;
			 
			 default:
			 include_once('pagenotfound.php');
			 break;
		 }
	 }
}

$obj=new control;
?>