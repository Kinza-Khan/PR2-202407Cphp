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
        <form action="" method="post">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="uName" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Age</label>
              <input type="text" name="uAge" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Salary</label>
              <input type="text" name="uSalary" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Loan Amount</label>
             <select name="loanAmount" class="form-control" id="">
                <option value="">Select</option>
                <option value="200000">200000</option>
                <option value="300000">300000</option>
                <option value="400000">400000</option>
                <option value="500000">500000</option>


             </select>
            </div>
            <div class="form-group">
              <label for="">Year Of Installment</label>
             <select name="years" class="form-control" id="">
                <option value="">Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              

             </select>
            </div>
            <button name="sub" class="btn btn-info">Submit</button>
        </form>
      </div>

      <?php
      if(isset($_POST['sub'])){
        $uName = $_POST['uName'];
        $uAge = $_POST['uAge'];
        $uSalary = $_POST['uSalary'];
        $years = $_POST['years'];
        $loan = $_POST['loanAmount'];
        $formula =  ($loan/($years*12));
        if($uAge >= 23 && $uSalary >= 40000){
                echo 'Thank you for taking loan. You are eligible for loan ' .$uName . ' your Monthly installment   ' . $formula ;
        }
        else{
            echo 'Not Eligible' ;
        }
      }
      
      ?>
 
</html>