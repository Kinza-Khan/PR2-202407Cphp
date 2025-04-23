<?php
$str = "Hello this is Aqsa" ;
echo str_word_count($str) ." word count <br>";
echo strlen($str).'<br>';
$array =  explode(" " ,$str); // returns array
print_r($array);
echo "<br>";

$url = "https/string_fun.php";
$urlArray = explode('/',$url);
print_r($urlArray);
echo "<br>";

$lastindexValue = $urlArray[count($urlArray) -1 ]; //$urlArray[2 - 1 ]  => $urlArray[ 1 ]

echo $lastindexValue ;
echo "<br>";
$userName = "Ali Khan" ;
echo strrev($userName) . "<br>";
$stdName = "Hamza ahmed";
echo strtolower($stdName)."<br>";
echo strtoupper($stdName)."<br>";

$userEmail = "aqsa123@gmail.com";
$dbEmail = "aqsa1234@gmail.com";
$final =  strcmp($userEmail,$dbEmail); // return 0 or 1 
if($final == 0 ){
    echo "valid Email";
}
else{
    echo "invalid Email" ;
}
?>

<?php

$myData = "Hello This is Huzaifa. SHe is in class 10. Huzaifa is regular student";
echo str_replace('Huzaifa','Aqsa' ,$myData) . "<br>";

$myArray = ["my" ,"name" ,"is" ,"ali"] ;
// echo implode('-' ,$myArray) ."<br>";
$myArrayData = sort($myArray);
// print_r($myArrayData);
for ($i=0; $i <count($myArray) ; $i++) { 
    # code...   
    echo $myArray[$i] . "<br>";
}

?>