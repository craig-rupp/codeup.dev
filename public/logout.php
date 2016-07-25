<?php
require_once '../../auth.php';
require_once '../../input.php';
function pageController(){
session_start();
session_destroy();
header('Location: login.php');
exit();
    
}
extract(pageController());
?>