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

// update Category
if(isset($_POST['updateCategory'])){
    $categoryId = $_GET['categoryId'];
    $categoryName = $_POST['cName'];
    $categoryDes = $_POST['cDes'];
    $query  = $pdo->prepare("update categories set name = :cName , description = :cDes where id = :cId");
    if(!empty($_FILES['cImage']['name']))
    {
    $categoryImageName = strtolower($_FILES['cImage']['name']);
    $categoryImageTmpName = $_FILES['cImage']['tmp_name'];
    $extexnsion = pathinfo($categoryImageName,PATHINFO_EXTENSION);
    $destination = "images/".$categoryImageName ;
      $format = ["jpg" ,"png" ,"jpeg" ,"webp" , "svg"] ; 
      if(in_array($extexnsion,$format)){
        if(move_uploaded_file($categoryImageTmpName,$destination)){
                $query = $pdo->prepare("update categories set name = :cName , description = :cDes ,image = :image where id = :cId");
                $query->bindParam('image' ,$categoryImageName);
        }       
      }
    }
    $query->bindParam('cId' ,$categoryId);
    $query->bindParam('cName',$categoryName);
    $query->bindParam('cDes',$categoryDes);
    $query->execute();
    echo "<script>alert('category updated');location.assign('viewcategory.php');</script>";

}
// delete Category
if(isset($_GET['cId'])){
    $cId = $_GET['cId'];
    $query = $pdo->prepare("delete from categories where id = :cId");
    $query->bindParam('cId',$cId);
    $query->execute();
    echo "<script>alert('category deleted');location.assign('viewcategory.php');</script>";

}

// add Product
$productName = $productPrice = $productImageName = $productDes = $productQty = $categoryId = "" ;
$productNameErr = $productPriceErr = $productImageNameErr = $productDesErr = $productQtyErr = $categoryIdErr = "" ;
if(isset($_POST['addProduct'])){
    $productName = $_POST['pName'];
    $productDes = $_POST['pDes'];
    $productPrice  = $_POST['pPrice'];
    $productQty = $_POST['pQty'];
    $categoryId = $_POST['cId'];
    $productImageName = strtolower($_FILES['pImage']['name']);
    $productImageTmpName = $_FILES['pImage']['tmp_name'];
    $extexnsion = pathinfo($productImageName,PATHINFO_EXTENSION);
    $destination = "images/".$productImageName;
    if(empty($productName)){
        $productNameErr = "Product Name is Required";
    }
    if(empty($productPrice)){
        $productPriceErr = "Product Price is Required";
    }
    if(empty($productDes)){
        $productDesErr = "Product Description is Required";
    }
    if(empty($productQty)){
        $productQtyErr = "Product Quantity is Required";
    }
    if(empty($productImageName)){
        $productImageNameErr = "Product Image is Required";
    }
    else{
        $format = ["jpg" , "png" , "jpeg" , "webp" , "svg"] ;
        if(!in_array($extexnsion ,$format)){
            $productImageNameErr = "Inavlid Extension";
        }
    }
    if(empty($categoryId)){
        $categoryIdErr = "Category  is Required";
    }
    if(empty($productImageNameErr) && empty($productDesErr) && empty($productPriceErr) && empty($productQtyErr) && empty($productNameErr) && empty($categoryIdErr) ){
        if(move_uploaded_file($productImageTmpName ,$destination)){
            $query = $pdo->prepare("insert into products(name , price , des , qty , image , c_id) values (:name , :price , :des , :qty , :image , :c_id)");
            $query->bindParam('name',$productName);
            $query->bindParam('price',$productPrice);
            $query->bindParam('des',$productDes);
            $query->bindParam('qty',$productQty);
            $query->bindParam('image',$productImageName);
            $query->bindParam('c_id',$categoryId);
            $query->execute();
            echo "<script>alert('product added');location.assign('addProduct.php');</script>";

        }
    }
}


// update product
if(isset($_POST['updateProduct'])){
    $productID = $_GET['productID'];
    $productName = $_POST['pName'];
    $productDes = $_POST['pDes'];
    $productPrice = $_POST['pPrice'];
    $productQty = $_POST['pQty'];
    $categoryId = $_POST['c_id'];
    // echo $productId . " " . $productName . " " . $prod
    $query  = $pdo->prepare("update products set name = :pName , des = :pDes ,price = :pPrice , qty = :pQty , c_id = :cId where id = :pId");
    if(!empty($_FILES['pImage']['name']))
    {
    $productImageName = strtolower($_FILES['pImage']['name']);
    $productImageTmpName = $_FILES['pImage']['tmp_name'];
    $extexnsion = pathinfo($productImageName,PATHINFO_EXTENSION);
    $destination = "images/".$productImageName ;
      $format = ["jpg" ,"png" ,"jpeg" ,"webp" , "svg"] ; 
      if(in_array($extexnsion,$format)){
        if(move_uploaded_file($productImageTmpName,$destination)){
                $query = $pdo->prepare("update products set name = :pName , des = :pDes ,price = :pPrice , qty = :pQty , c_id = :cId ,image = :image where id = :pId");
                $query->bindParam('image' ,$productImageName);
        }       
      }
    }
    $query->bindParam('pId' ,$productID);
    $query->bindParam('pName',$productName);
    $query->bindParam('pDes',$productDes);
    $query->bindParam('pPrice',$productPrice);
    $query->bindParam('pQty',$productQty);
    $query->bindParam('cId',$categoryId);
    $query->execute();
    echo "<script>alert('product updated');location.assign('viewProduct.php');</script>";

}
?>