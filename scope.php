<?php
$stdName =  "Ali";  // global scope
echo $stdName ;

echo "<br>";

function printUserName(){
   global $stdName; 
    $userName = "Hamza" ;
    return  'hELLO THIS IS FUNCTION PRINTS userName ' . $userName  . " " .$stdName; // local scope
}
echo printUserName() ;
// echo $userName ;

function add($n1=10,$n2=40){
    return $n1+$n2 ;
}
echo "<br>";
echo add();
echo "<br>";
function staticScopeFunction(){
        static $n1 = 1;
        echo $n1 ;
        $n1++ ;
}
 staticScopeFunction();
echo "<br>";
 staticScopeFunction();
echo "<br>";
 staticScopeFunction();
?>