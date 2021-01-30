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
        background: url(Images/contact.jpg);
        background-size:cover;
        overflow: hidden;
      }

      .contact{
        background-color: #00000016;
        height: 100vh;
      }

      .contact a{
        text-decoration: none;
      }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light position-sticky top-0">
        <div class="container-fluid border-dark border-bottom">
          <a class="navbar-brand" href="menu.php">
            <img src="images/icon.png" alt="" width="50" height="50" class="d-inline-block align-top">
            <span class="h1">MediAssist</span>
          </a>
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="medicines.php"><b>Buy Medicines</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="doctors.php"><b>Doctors' Information</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ambulance.php"><b>Ambulance Service</b></a>
            </li>
              <div class="btn-group dropleft">
                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img class="mr-2" src="Images/profile.svg" width="30" height="30" alt="" loading="lazy">
                </button>
                <ul class="dropdown-menu mt-5">
                    <li><a class="dropdown-item large" href="#"><b>Hey, Sarthak Keshari</b></a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item medium mb-2" href="self_assess.php"><img src="Images/test.svg" width="20" height="20" alt="" loading="lazy">&emsp;Self Assessment</a></li>
                    <li><a class="dropdown-item medium mb-2" href="health_record.php"><img src="Images/record.svg" width="20" height="20" alt="" loading="lazy">&emsp;Health Record</a></li>
                    <li><a class="dropdown-item medium mb-2" href="index.php"><img src="Images/logout.svg" width="20" height="20" alt="" loading="lazy">&emsp;Log Out</a></li>
                    <hr>
                    <li><a class="dropdown-item medium mb-2" href="about.php"><img src="Images/about.svg" width="20" height="20" alt="" loading="lazy">&emsp;About Us</a></li>
                    <li><a class="dropdown-item medium mb-2" href="contact.php"><img src="Images/contact.svg" width="20" height="20" alt="" loading="lazy">&emsp;Contact Us</a></li>
                </ul>
              </div>

              
            <!-- <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->
          </ul>
        </div>
      </nav>

      <div class="row contact">
        <div class="col-lg-6 col-md-8 col-sm-10 col-6 p-5 m-5 text-white">
            <p class="h2 mb-5 bg-success text-center">
                Contact Us
            </p>
            <table class="">
                <tr class="">
                <td class="h3 pl-5 pt-2">E-mail Id:</td> 
                <td>
                <a class="h3 pl-5 pt-2 text-white" href="mailto:mediassist@gmail.com">
                    mediassist@gmail.com
                </a>
                </td>
                </tr>
                <tr class="">
                <td class="h3 pl-5 pt-2">Contact Number:</td> 
                <td>
                <a class="h3 pl-5 pt-2 text-white" href="tel:9087654321">
                    9087654321
                </a>
                </td>
                </tr>
                <tr class="">
                <td class="h3 pl-5 pt-2">Instagram handle:</td> 
                <td>
                <a class="h3 pl-5 pt-2 text-white" href="https://www.instagram.com/" target="_blank">
                    @Mediassist_yourfirstaid
                </a>
                </td>
                </tr>
                <tr class="">
                <td class="h3 pl-5 pt-2">Facebook Page:</td> 
                <td>
                <a class="h3 pl-5 pt-2 text-white" href="https://www.facebook.com/" target="_blank">
                    MediAssist_YourFirstAid
                </a>
                </td>
                </tr>
            </table>
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