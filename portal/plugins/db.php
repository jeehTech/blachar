<?php
define("SERVER","localhost");
define("USER","root");
define("PASSWORD","jeehMedia@2021");
define("DATABASE","blachar");

$bil = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die("Failed To Communicate with database");

?>