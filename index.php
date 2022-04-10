<?php
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "controllers/ZoosController.controller.php";

if(empty($_GET['page'])){
    require "views/accueil.views.php";
}else{
    switch($_GET['page']){
        case "accueil" : require "views/accueil.view.php";
        break;
    }
}