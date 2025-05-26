<?php
include("php/query.php");
include("components/header.php");
?>


<div class="container p-5">
    <div class="col-md-8 mt-5">
    <form action="" method="post">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="userName" id="" value="<?php echo $userName?>" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-danger"><?php echo $userNameErr?></small>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" name="userEmail"   value="<?php echo $userEmail?>"  id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-danger"><?php echo $userEmailErr?></small>
        </div>
         <div class="form-group">
          <label for="">Password</label>
          <input type="text" name="userPassword"  value="<?php echo $userPassword?>"   id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-danger"><?php echo $userPasswordErr?></small>
        </div>
         <div class="form-group">
          <label for="">Confirm Password</label>
          <input type="text" name="userConfirmPassword"  value="<?php echo $userConfirmPassword?>"   id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-danger"><?php echo $userConfirmPasswordErr?></small>
        </div>
        <button name="userRegister" class="btn btn-info">Register</button>
    </form>
    </div>
</div>


<?php

include("components/footer.php");
?>