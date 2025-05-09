<?php
include("php/query.php");
include('components/header.php');

// Error variables ko define karna zaroori hai agar form abhi submit nahi hua
$ProductNameErr = $ProductPriceErr = $ProductQtyErr = $categoryImageNameErr = $ProductDesErr = $ProductCIDErr = "";

if (isset($_GET["productID"])) {
    $productID = $_GET["productID"];

    // Query prepare ki gayi hai jisme :pId bind hoga
    $query = $pdo->prepare("SELECT products.*, categories.name AS cName, categories.id AS cid 
                            FROM products 
                            INNER JOIN categories ON products.c_id = categories.id 
                            WHERE products.id = :pId");

    $query->bindParam(":pId", $productID);
    $query->execute();
    $product = $query->fetch(PDO::FETCH_ASSOC);

    // print_r($product); // debug ke liye optional hai
}
?>

<div class="container p-5">
    <div class="col-sm-12 col-xl-10">
        <div class="bg-light rounded h-100 p-5">
            <h2 class="mb-4">Update Product</h2>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <input value="<?php echo $product["name"]; ?>" name="pName" type="text" class="form-control" id="floatingName" placeholder="Enter product name">
                    <label for="floatingName">Product Name</label>
                    <small class="text-danger"><?php echo $ProductNameErr; ?></small>
                </div>

                <div class="form-floating mb-3">
                    <input value="<?php echo $product["price"]; ?>" name="pPrice" type="text" class="form-control" id="floatingPrice" placeholder="Enter price">
                    <label for="floatingPrice">Product Price</label>
                    <small class="text-danger"><?php echo $ProductPriceErr; ?></small>
                </div>

                <div class="form-floating mb-3">
                    <input value="<?php echo $product["qty"]; ?>" name="pQty" type="text" class="form-control" id="floatingQty" placeholder="Enter quantity">
                    <label for="floatingQty">Product Quantity</label>
                    <small class="text-danger"><?php echo $ProductQtyErr; ?></small>
                </div>

                <div class="form-floating mb-3">
                    <input name="pImage" type="file" class="form-control" id="floatingImage" placeholder="Image">
                    <img height="200px" src="images/<?php echo $product["image"]; ?>" alt="Current Image">
                    <label for="floatingImage">Product Image</label>
                    <small class="text-danger"><?php echo $categoryImageNameErr; ?></small>
                </div>

                <div class="form-floating mb-3">
                    <textarea name="pDes" class="form-control" placeholder="Enter description" id="floatingDes" style="height: 150px;"><?php echo $product["des"]; ?></textarea>
                    <label for="floatingDes">Product Description</label>
                    <small class="text-danger"><?php echo $ProductDesErr; ?></small>
                </div>

                <div class="form-group mb-3">
                    <label for="CID">Product Category</label>
                    <select name="c_id" class="form-control" id="">
                        <option value="<?php echo $product["c_id"]; ?>"><?php echo $product["cName"]; ?></option>
                        <?php
                        $query = $pdo->prepare("SELECT * FROM categories WHERE name != :cName");
                        $query->bindParam(":cName", $product["cName"]);
                        $query->execute();
                        $allCategories = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($allCategories as $category) {
                        ?>
                            <option value="<?php echo $category["id"]; ?>"><?php echo $category["name"]; ?></option>
                        <?php } ?>
                    </select>
                    <small class="text-danger"><?php echo $ProductCIDErr; ?></small>
                </div>

                <button name="updateProduct" class="btn btn-outline-primary w-100 mt-3">Update Product</button>
            </form>
        </div>
    </div>
</div>

<?php include('components/footer.php'); ?>