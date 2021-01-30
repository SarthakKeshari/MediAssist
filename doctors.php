<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel = "icon" href =  "images/icon.png" type = "image/x-icon"> 

    <title>Medi Assist</title>
    <style>
      body{
        background:url(Images/doc_background.jpg);
        background-size: contain;
        backdrop-filter: blur(5px) opacity(40%) hue-rotate(60deg);
        overflow-x: hidden;
      }
      @media(max-width: 500px)
      {
        .doctors img{
          width: 35vw;
        }
      }

      @media(min-width: 500px)
      {
        .doctors img{
          width: 20vw;
        }
      }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
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
      <div class="container">
        <form class="d-flex p-4">
            <input class="form-control mr-2" type="search" id="search" placeholder="Doctor's Name or any keyword..." aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>

          <br><br>

      </div>
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

            $sql='SELECT * from doctors';
            $query = mysqli_query($conn,$sql);

            if(!$query)
            {
                die('error found'.mysqli_error($conn));
            }

           ?>

      <div class="row d-flex justify-content-center g-2 doctors" id="show_up">

      <?php
      while($row=mysqli_fetch_array($query))
      {   
        echo '<div class="col-lg-3 col-md-3 col-sm-8 col-12 border border-dark m-4 shadow-lg rounded bg-white">
          <div class="row p-1">
            <div class="col-12 d-flex justify-content-end">';

            $count = $row['Rating'];
        echo '<small style="font-size:0.5em">'.$row['Rating'].' / 5.0 stars&emsp;</small>';
            $countleft = 5-$count;
            while($count>=1)
            {
                echo'<img src="Images/full_star.jpg" style="width: 3%; height: 100%" alt="">';
                $count--;
            }

            if($count>0)
            {
                echo'<img src="Images/half_star.jpg" style="width: 3%; height: 100%" alt="">';
            }

            while($countleft>=1)
            {
                echo'<img src="Images/empty_star.jpg" style="width: 3%; height: 100%" alt="">';
                $countleft--;
            }

           echo '</div>
          </div>
            <div class="row pb-5">
              <div class="col-12 d-flex justify-content-center ">
                <img src="'.$row['Image'].'" alt="">
              </div>
            </div>
            <div class="row p-2">
              <div class="col-12">
                <table>
                  <tr><p class="h5 mb-1">'.$row['Doc_Name'].'</p></tr>
                  <tr><small class="mb-5">'.$row['Doc_Qual'].'</small></tr>
                  <tr><p class="mt-5">Specializes in treatment of - '.$row['Doc_Spec'].'<br></p></tr>
                  <tr><small class="font-italic mt-2">'.$row['Doc_Exp'].' Years of Experience</small></tr>
                  <br><br><br>
                  <tr><small class="pt-5">Clinc/Hospital Address - '.$row['Doc_Addr'].'</small></tr>
                  <tr><p class="mt-2">Contact Number - '.$row['contact'].'</p></tr>
                </table>
              </div>
            </div>
        </div>';
        }
    ?>
      </div>


      <script>
        $(document).ready(function(e){
            $("#search").keyup(function(){
                $("#show_up").show();
                var text = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: 'doctor_search.php',
                    data: 'txt=' + text,
                    success: function(data){
                        $("#show_up").html(data);
                    }
                });
            })
        });
        </script>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->
  </body>
</html>