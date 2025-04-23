<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
<?php
$students = [ "ali" , "Aqsa" , "sana" ,"asad",21] ;
print_r($students);
echo "<br>";
echo $students[1];
echo "<br>";
var_dump($students);
?>
<ul>
    <li><?php echo $students[0]?></li>
    <li><?php echo $students[1]?></li>
</ul>
<ul>
<?php
for($i= 0  ; $i<count($students) ; $i++){
?>
<li><?php echo $students[$i]?></li>
<?php
}
?>
</ul>


<h1>
    foreach Loop
</h1>

<ul>
    <?php
    foreach($students as  $key => $value){
        ?>

        <li><?php echo $key. " : " . $value?></li>
        <?php
    }
    ?>
</ul>

</body>
</html>