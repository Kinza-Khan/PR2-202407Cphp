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
      <div class="container">
        <?php
        $students = [      
                ["ali",21,"karachi" ] ,
                ["sana",22 , "Lahore"] , 
               ["hafsa",22 , "Karachi"]

        ];
        // print_r($students);
            // echo $students[0][0] . " " . $students[1][0] ;
        ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>City</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($students as $key => $value){
                    ?>
                    <tr>
                        <td scope="row"><?php echo $value[0]?></td>
                        <td><?php echo $value[1]?></td>
                        <td><?php echo $value[2]?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>  
      </div>
   
  </body>
</html>