<?php 
$request=$_SERVER['REQUEST_URI'];
$router=str_replace('/php/routing', '', $request);

if($router=='/' || $router=='/home'){
    include('home.php');
}elseif ($router=='/about') {
    inclued('about.php');
}
elseif ($router=='/product' || preg_match("/product\/[0-9]/i",$router)) {
    $arr=explode('/', $router);
   if (isset($arr[2])) {
    $id=$arr[2];
       
   }
    inclued('product.php');

}
elseif ($router=='/contact') {
    inclued('contact.php');
}else{
    include('404.php');
}





 ?>