<?php
session_start();
if(empty($_SESSION['blachar_bil_user_id_123'])){
header("location:./login/");
}
// INCLUDE HEADER 
 include 'header.php';
// <!-- INCLUDE MENU OR SIDE NAV -->
 include 'sidenav.php';
// <!-- TOP NAV INCLUDE -->
 include 'topnav.php';
// WEB APP PAGES
$page = isset($_GET['trx_name']) ? $_GET['trx_name'] : 'home';
include $page.'.php';

//  INCLUDE FOOTER
include 'footer.php';

?>