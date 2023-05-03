<?php
$dsn = "mysql:host=sql213.byethost15.com;dbname=b15_34111517_noteapp";
$user = "b15_34111517";
$pass = "**336699**";
$option = array(
   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
);
$countrowinpage = 9 ;  
try {
   $con = new PDO($dsn, $user, $pass, $option);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
   header("Access-Control-Allow-Methods: POST, OPTIONS , GET");

   include "functions.php" ;
    
   // checkAuthenticate() ;
} catch (PDOException $e) {
   echo $e->getMessage();
}
