<?php
define("SERVER","127.0.0.1");
define("USER","root");
define("PASSWORD","jeehMedia@2021");
define("DATABASE","blachar");

$bil = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die("Failed To Communicate with database");

?>