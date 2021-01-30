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
            background: url(Images/medical_wallpaper.jpg);
            background-size: cover;
            height: 100vh;
            backdrop-filter: blur(5px) opacity(40%) hue-rotate(60deg);
        }

        .menu{
            background-color: white;
            box-shadow: 1px 10px 10px black;
        }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid border-dark border-bottom">
          <a class="navbar-brand" href="index.php">
            <img src="images/icon.png" alt="" width="50" height="50" class="d-inline-block align-top">
            <span class="h1">MediAssist</span>
          </a>
            <p class="h4 pr-5">
                Admin Id: 54231
            </p>
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

      <div class="h4 p-4 font-weight-bold text-white text-center">
          Welcome!! Administrator
      </div>

      <div class="container ">
        <a role="button" class="btn btn-success bg-gradient btn-lg btn-block p-4 mt-5 h1" href="admin_med.php">Medicine Details</a>
        <a role="button" class="btn btn-success bg-gradient btn-lg btn-block p-4 mt-5 h1" href="admin_doc.php">Doctor Details</a>
        <a role="button" class="btn btn-success bg-gradient btn-lg btn-block p-4 mt-5 h1" href="admin_ambulance.php">Ambulance Status</a>
        <a role="button" class="btn btn-success bg-gradient btn-lg btn-block p-4 mt-5 h1" href="admin_patient.php">Patient Details</a>
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