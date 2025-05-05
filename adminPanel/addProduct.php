<?php
include("php/query.php");
include("components/header.php");
?>
   <!-- Blank Start -->
   <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded  mx-0">
                    <div class="col-md-10 pt-3">
                        <h3>This is Add Product page</h3>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" value="<?php echo $productName?>" name="pName" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-danger">
                                <?php echo $productNameErr?>
                              </small>
                            </div>
                            <div class="form-group">
                              <label for="">Price</label>
                              <input type="text" name="pPrice"   value="<?php echo $productPrice?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-danger">
                                <?php echo $productPriceErr?>
                              </small>
                            </div>
                            <div class="form-group">
                              <label for="">Description</label>
                             <textarea name="pDes"  class="form-control" id=""><?php echo $productDes?></textarea>
                              <small id="helpId" class="text-danger">
                                <?php echo $productDesErr?>
                              </small>
                            </div>
                            <div class="form-group">
                              <label for="">Quantity</label>
                              <input type="text" name="pQty" value="<?php echo $productQty?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-danger">
                                <?php echo $productQtyErr?>
                              </small>
                            </div>
                            <div class="form-group">
                              <label for="">Image</label>
                              <input type="file" name="pImage" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-danger">
                                <?php echo $productImageNameErr?>
                              </small>
                            </div>
                            <div class="form-group">
                              <label for="">Category</label>
                                <select name="cId" id="" class="form-control">
                                    <option value=""> Select Category</option>
                                    <?php
                                    $query = $pdo->query("select * from categories");
                                    $allCategories = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($allCategories as $category){
                                    ?>
                                            <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                              <small id="helpId" class="text-danger"><?php echo $categoryIdErr?></small>
                            </div>
                            <button name="addProduct" class="btn btn-info text-light mt-3">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

<?php
include('components/footer.php');
?>