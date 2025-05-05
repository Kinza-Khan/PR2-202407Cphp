<?php
include("php/query.php");
include('components/header.php');
?>
    <!-- Blank Start -->
    <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded p-5">
                    <div class="col-md-11 text-center">
                    <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Category  Description</th>
                                            <th scope="col">Category Image</th>
                                            <th scope="col">Action</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = $pdo->query("select * from categories");
                                        $allCategories = $query->fetchAll(PDO::FETCH_ASSOC);
                                        // print_r($allCategories);
                                        foreach($allCategories as $category){
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $category['id']?></th>
                                            <td><?php echo $category['name']?></td>
                                            <td><?php echo $category['description']?></td>
                                            <td><img height="200px" src="images/<?php echo $category['image']?>" alt=""></td>
                                            <td><a href="editcategory.php?categoryId=<?php echo $category['id']?>" class="btn btn-info">Edit</a></td>
                                            <td><a href="?cId=<?php echo $category['id']?>" class="btn btn-danger">Delete</a></td>                       
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                        </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
            <!-- Blank End -->
<?php
include("components/footer.php");
?>