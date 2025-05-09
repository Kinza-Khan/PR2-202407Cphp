<?php 
include("php/query.php");
include("components/header.php");

?>
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded p-5">
                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Product Image</th>
                                            <th scope="col">Product Price</th>
                                            <th scope="col">Product Quantity</th>
                                            <th scope="col">Product Description</th>
                                            <th scope="col">Product C_ID</th>
                                            <th scope="col">Action</th>
                                            <th scope="col">Action</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $query =$pdo->query("select products.*, categories.name as cName  from products inner join categories on products.c_id = categories.id");
                                        $allProduct = $query->fetchAll(PDO::FETCH_ASSOC);
                                    //  var_dump($allCategories);
                                    foreach ($allProduct as $Product) {
                                        ?>
                                        <tr>
                                       
                                            <td><?php echo $Product['name']?></td>
                                            <td><img height="200px" src="images/<?php echo $Product['image']?>" alt=""></td>
                                            <td><?php echo $Product['price']?></td>
                                            <td><?php echo $Product['qty']?></td>
                                            <td><?php echo $Product['des']?></td>
                                            <td><?php echo $Product['cName']?></td>
                                            
                                            <td><a href="editProduct.php?productID=<?php echo $Product['id']?>" class="btn btn-info">Eidt</a></td>
                                            <td><a href="?pId=<?php echo $Product["id"]?>" class="btn btn-danger">Delete</a></td>
                                            <td></td>
                                        </tr>
                                      <?php 
                                      }?>
                                    
                                    </tbody>
                                </table>
                            </div>
                </div>
            </div>
            <!-- Blank End -->

<?php 
include("components/footer.php");

?>