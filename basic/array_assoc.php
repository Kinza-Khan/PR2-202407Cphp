<?php
$students = [
   "id"=>1,
   "name"=> 'ali',
   "age"=> 21,
   "email"=>"ali@gmail.com"  ] ;
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <ul>
      <?php
      foreach($students as  $key => $value){
         ?>
         <li><?php echo $key . " : " . $value?></li>
         <?php
      }
      ?>
    </ul>
<h1>Another Example</h1>
<?php
$allEmp = [
   ["id"=>1 , "name"=>"sana" ,"email"=>"sana@gmail.com"],
   ["id"=>2 , "name"=>"aqsa" ,"email"=>"aqsa@gmail.com"],
   ["id"=>3 , "name"=>"hamid" ,"email"=>"hamid@gmail.com"]
] ;
$allStudents = [
  "std1"=>["id"=>1 , "name"=>"sana" ,"email"=>"sana@gmail.com"],
  "std2"=>["id"=>2 , "name"=>"aqsa" ,"email"=>"aqsa@gmail.com"],
   "std3"=>["id"=>3 , "name"=>"hamid" ,"email"=>"hamid@gmail.com"]
] ;
?>