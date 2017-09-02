<?php
ini_set('session.gc_maxlifetime', 3600);
session_start();

require "config/conf.php";

define("APP_FOLDER", "/");
$currentRoute = str_replace(APP_FOLDER, "", $_SERVER["REDIRECT_URL"]);
var_dump($currentRoute);

if (!empty($currentRoute)) {
	
	if (array_key_exists($currentRoute,$routes)) {

		$class = $routes[$currentRoute]["class"];
        $method = $routes[$currentRoute]["method"];
	
		require "control/".$class.".php";
		$controllUser = new $class();
		$response = $controllUser->$method();
		echo json_encode($response);
		
	}else{http_response_code(404);echo'<h1 style="text-align:center;">Page not found</h1>';}
}else{http_response_code(403);echo '<h1 style="text-align:center;">Access Forbidden</h1>';}
?>