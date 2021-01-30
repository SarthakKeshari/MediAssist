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
      body{
        overflow-x: hidden;
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
            <li class="nav-item">
              <a class="nav-link" href="login_register.php"><b>Login/Register</b></a>
            </li>
            
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
        </ul>
      </div>
    </nav>
    
      <div class="container-fluid">
        <div class="row justify-content-center">
          <p class="h3 m-0 text-center">Emergency Ambulance Services</p>
          <p class="m-0 text-center">(A free service - Each life matters)</p>
        </div>

        <div class="row d-flex justify-content-center bg-success p-2 mt-4 mb-4">
            <div class="col-10 h2 text-center text-white">
                Call Us At - 9087654321 <img src="Images/emergency_call.gif" width="100" alt="">
            </div>
        </div>

        <div class="row mb-5 ml-2">
            <div class="col-10 text-danger">
                <small class="font-weight-bold">
                    If you couldn't connect to us via call then please fill the below form. We'll reach out to you within next 15 minutes.
                </small>
            </div>
        </div>

        <div class="row justify-content-center pb-4">
          <div class="col-5 p-0 justify-content-end">
            <hr>
          </div>
          <span class="col-1 p-0 text-center">
            <p class="h3">OR</p>
          </span>
          <div class="col-5 p-0 justify-content-start">
            <hr>
          </div>
        </div>

        <div class="row bg-light">
          <div class="col-8">
            <div class="row p-4 mt-5">
              <div class="row h4 border-bottom border-dark d-inline-block">Patient's Information<span class="p-1" style="color: red;">*</span></div>
              <div class="row">
                <div class="col-6">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">First Name<span style="color: red;">*</span></span>
                    <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                </div>
                <div class="col-6">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Last Name<span style="color: red;">*</span></span>
                    <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-default">D.O.B<span style="color: red;">*</span></span>
                  <input type="date" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
              </div>
              <div class="col-2">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-default">Age<span style="color: red;">*</span></span>
                  <input type="number" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" min="0" max="110" required>
                </div>
              </div>
              <div class="col-3 d-flex">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-default">Gender<span style="color: red;">*</span></span>
                  <input type="radio" class="btn-check" name="options-outlined" id="male-outlined" autocomplete="off" required>
                  <label class="btn btn-outline-success ml-1 p-1" for="male-outlined">Male</label>
                  <input type="radio" class="btn-check" name="options-outlined" id="female-outlined" autocomplete="off" required>
                  <label class="btn btn-outline-success ml-1 p-1" for="female-outlined">Female</label>
                </div>
              </div>
              <div class="col-3 d-flex">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-default">Blood Group<span style="color: red;">*</span></span>
                  <select class="form-select" aria-label="Default select example">
                    <option value="O+" selected>O+</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="O-">O-</option>
                    <option value="AB-">AB-</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-default">Aadhar Card Number<span style="color: red;">*</span></span>
                  <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Address<span style="color: red;">*</span></span>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
              </div>
            </div>
            <div class="row">
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Any Additional Information</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>
          </div>
                <div class="row p-5 pt-2 mb-5">
                  <!-- <button type="submit" class="btn btn-success btn-lg">Submit Medical Details</button> -->
                  <a href="menu.php" class="btn btn-success btn-lg" type="submit" role button>Call For Ambulance</a>
                </div>
          </div>
          
          <div class="col-4 border-left border-dark align-items-center">
            <div class="row mt-5 pt-5">
              <div>
                <img class=" p-2" src="Images/ambulance.png" width="500" alt="">
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
  </body>
</html>
