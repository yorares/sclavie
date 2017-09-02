<?php


$routes["search"] = ["class" => "client", "method" => "searchItem"];

$routes["userLogIn"] = ["class" => "user", "method" => "logIn"];

$routes["clientLogIn"] = ["class" => "client", "method" => "logIn"];
$routes["clientList"] = ["class" => "client", "method" => "getAll"];
$routes["clientSelect"] = ["class" => "client", "method" => "getItem"];
$routes["clientDelete"] = ["class" => "client", "method" => "deleteItem"];

$routes["logOut"] = ["class"=>"user","method"=>"logOut"];


?>