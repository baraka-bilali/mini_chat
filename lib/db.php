<?php
//  $host = 'localhost';
//  $db_name = 'mini_chat';
//  $username = 'root';
//  $password = '';
//  $conn;

 
//'mysql:host=127.0.0.1;dbname=test;', 'root', ''
 //new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);


//  try{
//     $conn = new PDO('mysql:host=' . $host . ';dbname=' . $db_name,$username, $this->password);
//             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }catch(Exception $e){
//     echo "Impossible de se connecter à la base de donnée !";
//     echo $e->getMessage();
//     die();
// }



// Database settings
$db="mini_chat";
$dbhost="localhost";
$dbport=3307;
$dbuser="root";
$dbpasswd="";
 
$pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
$pdo->exec("SET CHARACTER SET utf8");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

