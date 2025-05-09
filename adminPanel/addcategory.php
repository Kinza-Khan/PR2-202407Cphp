<?php
include("php/query.php");
include('components/header.php');
?>
<div class="container p-5">
<div class="col-sm-12 col-xl-10">
                        <div class="bg-light rounded h-100 p-5">
                            <h2 class="mb-4">Add category</h2>

                            <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input  value="<?php echo $categoryName?>" name="cName" type="text" class="form-control" id="floatingInput"
                                    placeholder="Enter category Name">
                                <label for="floatingInput">Category Name</label>
                                <small class="text-danger"><?php echo $categoryNameErr?></small>
                            </div>
                            <div class="form-floating mb-3">
                                <input  name="cImage" type="file" class="form-control" id="floatingPassword"
                                    placeholder="image">
                                <label for="floatingPassword">Category Image</label>
                                <small class="text-danger"><?php echo $categoryImageNameErr?></small>
                            </div>
                           
                            <div class="form-floating">
                                <textarea name="cDes" class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;"><?php echo $categoryDes?></textarea>
                                <label for="floatingTextarea">Category Description</label>
                                <small class="text-danger"><?php echo $categoryDesErr?></small>
                            </div>
                            <button name="addCategory" class="btn btn-outline-primary w-100 mt-3" >Add Category</button>
                            </form>
                        </div>
                    </div> 
</div>
<?php
include('components/footer.php');
?>