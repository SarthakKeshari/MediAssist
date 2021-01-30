<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      *{
        overflow: hidden;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light position-sticky top-0">
        <div class="container-fluid border-dark border-bottom">
          <a class="navbar-brand" href="#">
            <img src="images/icon.png" alt="" width="50" height="50" class="d-inline-block align-top">
            <span class="h1">MediAssist</span>
          </a>
        </div>
  </nav>

  <?php 

    $db_host='127.0.0.1';
    $db_user='root';
    $db_pass='';
    $db_name='mediassist';

    $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    if(!$conn )
    {
        die('Failed to connect mysql database'.mysqli_connect_error());
    }

    // echo "YOYO";

    $sql='SELECT * from medicines where Med_Name = "'.$_POST['submit'].'"';
    $query = mysqli_query($conn,$sql);

    if(!$query)
    {
        die('error found'.mysqli_error($conn));
    }

    $row=mysqli_fetch_array($query);

  ?>


  <div class="row mt-4">
      <div class="col-3">
        <div class="card shadow ml-5" style="width: 18rem;">
            <div class="card-body text-center">
                <p class="card-text h5">Product Description</p>
            </div>
            <img src="<?php echo $row['Image']?>" class="card-img-top p-2" alt="...">
              <div class="card-body">
              <div class="row">
                <p class="h4"><?php echo $row['Med_Name']?></p>
              </div>
              <div class="row">
                <small class="mb-2 font-italic">Manufacturer: <?php echo $row['Med_Brand']?></small>
              </div>
              <div class="row">
                <small class="mt-2 mb-4">Capacity Per Pack: <?php echo $row['Cap_perPack']?></small>
              </div>
              <div class="row d-flex">
                <div class="p-0 pl-2 pr-1">
                  <p class="h4 font-weight-bold text-success mt-2">Payable Amount:<br> ₹ <?php echo $row['Med_Cost']?></p>
                </div>
              </div>  
            </div>
        </div>
      </div>

      <div class="col-8">
      <div class="col border border-dark">
        <div class="card p-4">
          <div class="card-body">
            <div class="row">
              <div class="col-2 m-0 d-flex align-items-center">
                <p class="m-0">Mode of Payment : </p> 
              </div>
              <div class="col-6">
                  <select class="form-select" aria-label="Default select example" required>
                    <option selected value="DC">Debit Card</option>
                    <option value="CC">Credit Card</option>
                    <option value="TPPS">Third-Party Payment Services</option>
                    <option value="BT">Bank Transfer</option>
                  </select>
              </div>
              <div class="col-3">
                <img src="Images/payment_mode.png" alt="" style="width: 100%;">
              </div>
            </div>

            <div class="container mt-5">
              <div class="row pl-5 pr-5 ml-5 mr-5">
              <div class="mb-3 row">
                <label for="inputPassword" class="col-auto col-form-label">Card Number : </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control col-auto" id="inputPassword" required>
                </div>
              </div>
              </div>
              <div class="row pl-5 pr-5 ml-5 mr-5">
              <div class="mb-3 row">
                <label for="inputPassword" class="col-auto col-form-label">Name as on Card : </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control col-auto" id="inputPassword" required>
                </div>
              </div>
              </div>
              <div class="row pl-5 pr-5 ml-5 mr-5">
              <div class="mb-3 col-7">
                <label for="inputPassword" class="col-auto col-form-label">Card Expiry Date : </label>
                <div class="col-12">
                  <input type="date" class="form-control col-auto" id="inputPassword" required>
                </div>
              </div>
              <div class="mb-3 col-4">
                <label for="inputPassword" class="col-auto col-form-label">CVV : </label>
                <div class="col-7">
                  <input type="text" class="form-control col-auto" id="inputPassword" required>
                </div>
              </div>
              </div>
              <div class="row pl-5 pr-5 ml-5 mr-5">
              <div class="mb-3 col-7">
                <label for="inputPassword" class="col-auto col-form-label">Enter Captcha : </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control col-auto" id="inputPassword" required>
                </div>
              </div>
              <img src="Images/captcha.jpg" alt="" style="width: 25%;">
              </div>
              <div class="row pl-5 pr-5 ml-5 mr-5 mt-4">
                <button class="btn btn-warning btn-block" onclick="JSalert()">Make Payment</button>
              </div>
            </div>
          </div>
        </div>
      </div>  
      </div>
  </div>

        <script type="text/javascript">
            function JSalert(){
                swal({
                    title: "Payment Successful!",
                    text: "Thankyou for using our service",
                    icon: "success",
                    button: "OK",
                });
                
                setTimeout(function(){location.href = 'menu.php';;
         }, 2000);
                
            }

            
            </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
</html>