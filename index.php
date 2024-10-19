<?php
session_start();
// INCLUDE HEADER 
 include 'header.php';

// <!-- TOP NAV INCLUDE -->
 include 'topnav.php';
// WEB APP PAGES
$page = isset($_GET['bil']) ? $_GET['bil'] : 'home';
include $page.'.php';

//  INCLUDE FOOTER
include 'footer.php';

?>