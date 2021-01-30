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
            background: linear-gradient(-0.05turn,green,white 30%);
            overflow-x: hidden;
        }

        .menu{
            background-color: white;
            box-shadow: 1px 10px 10px black;
        }
        
    </style>
  </head>
  <body>

  <?php
    session_start();
    $_SESSION['username'] = 'Sarthak';
  ?>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid border-dark border-bottom">
          <a class="navbar-brand" href="menu.php">
            <img src="images/icon.png" alt="" width="50" height="50" class="d-inline-block align-top">
            <span class="h1">MediAssist</span>
          </a>
          <!-- <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Login</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Register</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul> -->
        </div>
      </nav>
      <div class="justify-content-center row bg-dark">
          <div class="col-6 p-5">
              <blockquote class="h5 text-light p-5 pb-1">
                This website would come up as a solution to the issues of finding and surfing to get medical details
                since this website would provide risk assistance and maintaining health record facilities
                to its users to grab the details in just a few easy-to-go-with clicks.
              </blockquote>
              <footer class="blockquote-footer  text-right">Project Developers<cite title="Source Title"> (Sarthak and Kushal)</cite></footer>
          </div>
        <div class="col-4 justify-content-end">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-interval="5000" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="Images/slide1.PNG" class="d-block" width="510" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="Images/slide2.PNG" class="d-block" width="510" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="Images/slide3.PNG" class="d-block" width="510" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="Images/slide4.PNG" class="d-block" width="510" alt="...">
                  </div>
                </div>
              </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-3 border border-2 p-4 m-5 text-center menu" role="button" onclick="location.href='medicines.php'">
                <div class="justify-content-center text-align-center">
                    <img src="Images/medicine.png" height="300" alt="" class="p-2">
                    <p class="h3">Medicines</p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3 border border-2 p-4 m-5 text-center menu" role="button" onclick="location.href='health_record.php'">
                <div>
                    <img src="Images/health record.png" height="300" alt="" class="p-2">
                    <p class="h3">Health Record</p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3 border border-2 p-4 m-5 text-center menu" role="button" onclick="location.href='doctors.php'">
                <div>
                    <img src="Images/sthetoscope black png.png" height="300" alt="" class="p-2">
                    <p class="h3">Doctors' Infromation</p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3 border border-2 p-4 m-5 text-center menu" role="button" onclick="location.href='ambulance.php'">
                <div>
                    <img src="Images/ambulance.png" height="300" alt="" class="p-2">
                    <p class="h3">Ambulance Services</p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3 border border-2 m-5 text-center menu" role="button" onclick="location.href='self_assess.php'">
                <div>
                    <img src="Images/assessment.png" height="300" alt="" class="mb-4 p-4">
                    <p class="h3">Self Assessment</p>
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
  </body>
</html>