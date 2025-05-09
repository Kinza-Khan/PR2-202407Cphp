<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
            <div class="container p-5">
                    <form action="" method="get">

                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="userName" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    <button name="sub" class="btn btn-info">Submit</button>

                    </form>
            </div>   


            <?php
            if(isset($_GET['sub'])){
                    $userName = $_GET['userName']; 
                    echo $userName . " IS MY USER ";
            }

            
            ?>
     </body>
</html>