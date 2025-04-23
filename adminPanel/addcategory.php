<?php
include('components/header.php');
?>
<div class="container p-5">
<div class="col-sm-12 col-xl-10">
                        <div class="bg-light rounded h-100 p-5">
                            <h2 class="mb-4">Add category</h2>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="Enter category Name">
                                <label for="floatingInput">Category Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="floatingPassword"
                                    placeholder="image">
                                <label for="floatingPassword">Category Image</label>
                            </div>
                           
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Category Description</label>
                            </div>
                            <button class="btn btn-outline-primary w-100 mt-3" type="button">Add Category</button>
                        </div>
                    </div> 
</div>
<?php
include('components/footer.php');
?>