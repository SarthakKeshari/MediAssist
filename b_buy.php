<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <style>
    body{
      background: url(Images/back_buy.jpg);
    }
  </style>
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

    $sql='SELECT * from medicines where Med_Name = "'.$_GET['submit'].'"';
    $query = mysqli_query($conn,$sql);

    if(!$query)
    {
        die('error found'.mysqli_error($conn));
    }

    $row=mysqli_fetch_array($query);

  ?>

  <div class="container">
    <div class="row pt-4 d-flex align-items-center">
      <div class="col-5">
      <img src="<?php echo $row['Image']?>" alt="">
      </div>
      <div class="col-7">
        <div class="row">
          <p class="h4"><?php echo $row['Med_Name']?></p>
        </div>
        <div class="row">
          <small class="mb-5 font-italic">Manufacturer: <?php echo $row['Med_Brand']?></small>
        </div>
        <div class="row">
          <p class="mb-2">Uses: <?php echo $row['Uses']?></p>
        </div>
        <div class="row">
          <p class="mb-2">Side Effects: <?php echo $row['Side_Effect']?></p>
        </div>
        <div class="row">
          <small class="mt-5 mb-4">Capacity Per Pack: <?php echo $row['Cap_perPack']?></small>
        </div>
        <div class="row d-flex">
          <div class="p-0 pl-2 pr-1 text-right" style="width: 80px;">
            <p class="h2 font-weight-bold text-success mt-2">₹ <?php echo $row['Med_Cost']?></p>
          </div>
          <div class="p-0 pt-3 mt-1 text-right" style="width: 100px;">
            <del class="font-weight-bold mt-2">₹ <?php echo number_format((float)((100*$row['Med_Cost'])/95), 2, '.', '')?></del> <sup><span class="badge bg-danger">5% off</span></sup>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-12">
          <a role="button" class="btn btn-success btn-block" onclick="JSalert()">Place Order</a>
            <script type="text/javascript">
              function JSalert(){
                  swal({
                      title: "Oops!",
                      text: "Haven't Login/Register yet?",
                      icon: "warning",
                      button: "OK",
                  });
              }
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
  
        


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