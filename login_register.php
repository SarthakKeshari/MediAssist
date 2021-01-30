<?php
      if(isset($_POST['register']))
      {
          $db_host='127.0.0.1';
          $db_user='root';
          $db_pass='';
          $db_name='mediassist';

          $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
          if(!$conn )
          {
              die('Failed to connect mysql database'.mysqli_connect_error());
          }

          $f_name = $_POST['f_name'];
          $l_name = $_POST['l_name'];
          $email = $_POST['email'];
          $mobile = $_POST['mobile'];
          $pass = $_POST['pass'];

          // echo '$pass';

          $sql1="INSERT INTO user (f_name,l_name,email_id,mobile,password) VALUES ('$f_name','$l_name','$email','$mobile','$pass')";
          $query1 = mysqli_query($conn,$sql1);

          if(!$query1)
          {
              die('error found'.mysqli_error($conn));
          }

          header('Location: medical_form.php');
      }

      if(isset($_POST['login']))
      {
        
        // echo "<script>alert('Incorrect')</script>";
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "mediassist";

        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        //to prevent mysql injection
        //For prevention against data stealing
        $email=stripcslashes($email);
        $pass=stripcslashes($pass);
        $email=mysqli_real_escape_string($conn,$email);
        $pass=mysqli_real_escape_string($conn,$pass);

        //connect to the server and select database
        mysqli_connect("localhost","root","");
        mysqli_select_db($conn,"submit");

        //Query the database for user
        $result = mysqli_query($conn,"select * from user where 
                        email_id ='$email' and password='$pass'")
                        or die("Failed to query database ".mysqli_error($conn));
        $row = mysqli_fetch_array($result);

        if($row!=NULL)
        {
          if($row['email_id'] == $email && $row['password'] == $pass)
          {
            header("Location: menu.php"); 
            exit;
          }
        }
        else
        {
            echo '<script>
            swal({
              title: "Oops!",
              text: "Please login/register to enhance your experience",
              icon: "warning",
              button: "OK",
            });

            window.location.href = "login_register.php";
            </script>';
        }
      }
      ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel = "icon" href =  "images/icon.png" type = "image/x-icon"> 

    <title>Medi Assist</title>

    <style>
        *{
            background-color: transparent;
        }
        body{
            background: url(Images/back-login_register.jpg);
            background-size:cover;
            backdrop-filter: blur(2px) brightness(60%) opacity(50%);
            height: 100vh;
            overflow: hidden;
        }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid border-dark border-bottom">
          <a class="navbar-brand" href="#">
            <img src="images/icon.png" alt="" width="50" height="50" class="d-inline-block align-top">
            <span class="h1">MediAssist</span>
          </a>
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="index.php"><b>Home Page</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ambulance_b.php"><b>Ambulance Service</b></a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#"><b>Register</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->
          </ul>
        </div>
      </nav>
      <br>
      
        <nav class="d-flex justify-content-center bg-success">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link active text-dark h6" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><b>Login</b></a>
                <a class="nav-link text-dark h6" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><b>Register</b></a>
            </div>
        </nav>
          <div class="container p-4 col-4 full-page text-light">
          <div class="tab-content border-top border-black-50" id="nav-tabContent">
              <br>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <form class="row" action="login_register.php" method="POST">
                    <div class="mb-3 col-6">
                      <label for="exampleInputFirst" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="exampleInputFirst" name="f_name" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="exampleInputLast" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputLast" aria-describedby="emailHelp" name="l_name" required>

                      </div>
                      <div class="mb-3 col-12">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                      </div>
                      <div class="mb-3 col-12">
                        <label for="exampleInputMobile" class="form-label">Mobile Number</label>
                        <input type="tel" class="form-control" id="exampleInputMobile" aria-describedby="emailHelp" name="mobile" required>
                        <div id="emailHelp" class="form-text"><small>We'll never share your phone number with anyone else.</small></div>
                      </div>
                    <div class="mb-3 col-12">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                      <label class="form-check-label" for="exampleCheck1"><small>I agree to the <a href=""> Terms of Service</a></small></label>
                    </div>
                    <!-- <button type="submit" class="btn btn-success btn-gradient">Register</button> -->
                    <input class="btn btn-success" type="submit" role="button" name="register" value="Register">
                  </form>
            </div>
            <div class="tab-pane fade show active d-flex justify-content-center" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <form class="row" action="login_register.php" method="POST">
                    <div class="mb-3 col-12">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                    </div>
                    <div class="mb-3 col-12">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required>
                    </div>
                    <!-- <button type="submit" class="btn btn-success" onClick="location.href='index.html'">Login</button> -->
                    <input class="btn btn-success" type="submit" role="button" name="login" value="Login" required>
                  </form>
                </div>
          </div>
      </div>
     <br>
     <br>
      <div class="row justify-content-end">
        <div class="col-2" style="height: 25vh;" onclick="pressed(2)">
            
        </div>
      </div>
      <div class="row justify-content-start">
        <div class="col-2" style="height: 25vh;" onclick="pressed(1)">
            
        </div>
      </div>

      <script>
          var counter=0;
          function pressed(num)
          {
              console.log(counter);
              counter+=num;
              if(counter==5)
              {
                  window.location.href='admin_index.php';
                  counter=0;
              }
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