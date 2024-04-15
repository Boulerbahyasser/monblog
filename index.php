<?php
require_once 'config.php';
require_once 'controllers/BlogController.php';

$controller = new BlogController($bdd);
$controller->index();
?>
