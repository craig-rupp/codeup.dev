<?php
function pageController(){
session_start();
session_destroy();
header('Location: login.php');
exit();
    
}
extract(pageController());
?>