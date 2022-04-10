<?php 
ob_start(); 
?>

Bonjour Messaoud j'ai payé et suivi le cours https://www.udemy.com/course/developpement-web-php-poo-mysql-architecture-mvc-crud/
il est vraiment pas mal mais le php est pas fait pour moi 

<?php
$content = ob_get_clean();
$titre = "Argenteuil Zoo";
require "template.php";
?>