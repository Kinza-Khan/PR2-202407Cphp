<?php
$server = "mysql:host=localhost;dbname=202407c";
$user = "root";
$pass = "" ;

$pdo = new PDO($server,$user,$pass);
if($pdo){
    echo "<script>alert('connected')</script>";
}
?>