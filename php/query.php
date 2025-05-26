<?php
include("dbcon.php");
session_start();
$userName = $userEmail = $userPassword = $userConfirmPassword = "";
$userNameErr = $userEmailErr = $userPasswordErr = $userConfirmPasswordErr = "";
if(isset($_POST['userRegister'])){
    $userName= $_POST['userName'];
    $userEmail= $_POST['userEmail'];
    $userPassword= $_POST['userPassword'];
    $userConfirmPassword= $_POST['userConfirmPassword'];
    if(empty($userName)){
        $userNameErr = "Name is Required";
    }
     if(empty($userEmail)){
        $userEmailErr = "Email is Required";
    }
    else{
        $query = $pdo->prepare("select * from users where email = :email");
        $query->bindParam('email',$userEmail);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
            if($user){
                $userEmailErr = "Email is already exist";
            }
    }
     if(empty($userPassword)){
        $userPasswordErr = "Password is Required";
    }
     if(empty($userConfirmPassword)){
        $userConfirmPasswordErr = "Confirm Password is Required";
    }
    else{
        if($userPassword != $userConfirmPassword){
              $userConfirmPasswordErr = "Confirm Password does not Matched";
        }
    }

    if(empty($userNameErr) && empty($userEmailErr) && empty($userPasswordErr) && empty($userConfirmPasswordErr)){
        $query = $pdo->prepare("insert into users (name , email , password) values (:name , :email , :password)");
        $query->bindParam('name',$userName);
        $query->bindParam('email',$userEmail);
        $query->bindParam('password',$userPassword);
        $query->execute();
        echo "<script>alert('user register');location.assign('index.php')</script>";
        
    }
}
?>