<?php
include('dbcon.php');

$categoryName = $categoryDes = $categoryImageName = "" ;
$categoryNameErr = $categoryDesErr = $categoryImageNameErr = "" ;

if(isset($_POST['addCategory'])){
    $categoryName = $_POST['cName'];
    $categoryDes = $_POST['cDes'];
    $categoryImageName = strtolower($_FILES['cImage']['name']);
    $categoryImageTmpName = $_FILES['cImage']['tmp_name'];
    $extexnsion = pathinfo($categoryImageName , PATHINFO_EXTENSION);
    $destination = "images/".$categoryImageName ;
    if(empty($categoryName)){
        $categoryNameErr = 'Category  Name is Required';
    }
    if(empty($categoryImageName)){
        $categoryImageNameErr = "Category Image is Required" ;
    }
    else{
        $format = ["jpg" ,"png" ,"jpeg" , "webp" ,"svg"];
        if(!in_array($extexnsion ,$format)){
            $categoryImageNameErr = "Invalid Extension" ;       
        }
    }
    if(empty($categoryDes)){
        $categoryDesErr = "Category Description is Required";
    }
    if(empty($categoryNameErr) && empty($categoryDesErr) && empty($categoryImageNameErr)){
        if(move_uploaded_file($categoryImageTmpName,$destination)){
        $query = $pdo->prepare("insert into categories (name , description ,image) values(:cName, :cDes, :cImage)");
        $query->bindParam('cName',$categoryName);
        $query->bindParam('cDes' ,$categoryDes);
        $query->bindParam('cImage',$categoryImageName);
        $query->execute();
        echo "<script>alert('category Added');location.assign('addcategory.php');</script>";
    }
}

}
?>