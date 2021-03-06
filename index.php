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
        background: url(Images/medi_background.jpg);
        background-size: cover;
        overflow-x: hidden;
      }

      @media(max-width: 500px)
      {
        .medicines img{
          width: 35vw;
        }
      }

      @media(min-width: 500px)
      {
        .medicines img{
          width: 20vw;
        }
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
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="login_register.php"><b>Login/Register</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ambulance_b.php"><b>Ambulance Service</b></a>
            </li>
          </ul>
          <!-- <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Buy Medicines</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><b>Doctors' Information</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><b>Ambulance Service</b></a>
            </li>
              <div class="btn-group dropleft">
                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img class="mr-2" src="Images/profile.svg" width="30" height="30" alt="" loading="lazy">
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item large" href="#">Hey, Sarthak Keshari</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item medium mb-2" href="chessboard_rank.html"><img src="rank.svg" width="20" height="20" alt="" loading="lazy">Game ranking</a></li>
                    <li><a class="dropdown-item medium mb-2" href="chessboard.html"><img src="cash_out.svg" width="20" height="20" alt="" loading="lazy">Coin to Cash</a></li>
                    <li><a class="dropdown-item medium mb-2" href="chessboard.html"><img src="logout.svg" width="20" height="20" alt="" loading="lazy">Log Out</a></li>
                </ul>
              </div> -->
              
            <!-- <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->
          <!-- </ul> -->
          
        </div>
      </nav>
      <div class="container">
        <form class="d-flex p-4">
            <input class="form-control mr-2" type="search" id="search" placeholder="Medicine Name..." aria-label="Search">
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

            $sql='SELECT * from medicines';
            $query = mysqli_query($conn,$sql);

            if(!$query)
            {
                die('error found'.mysqli_error($conn));
            }

            echo '<div class="row d-flex justify-content-center g-2 medicines" id="show_up">';

            while($row=mysqli_fetch_array($query))
            {    
            echo '
                    <form action="b_buy.php" method="GET" class="col-lg-5 col-md-5 col-sm-8 col-10 border border-dark bg-white m-4 shadow rounded p-2">
                    <div class="row p-2 medicine">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-4">
                            <img src="'.$row['Image'].'" alt="" style="width: 75%">
                        </div>
                        <div class="col-5">
                            <table>
                                <tr><p class="h4 mb-2">'.$row['Med_Name'].'</p></tr>
                                <tr><small class="mb-5 font-italic">Manufacturer: '.$row['Med_Brand'].'</small></tr>
                                <tr><p class="mt-5">Capacity Per Pack: '.$row['Cap_perPack'].'</p></tr>
                                <tr><p class="h5 font-weight-bold text-success mt-2">₹'.$row['Med_Cost'].'</p></tr>
                            </table>
                        </div>
                    </div>
                    <div>
                      <button class="btn btn-success btn-block mt-4" type="submit" value="'.$row['Med_Name'].'" name="submit">Buy Now</button>
                    </div>
                    </form>
                    
                    ';

            }

            echo '</div>';

      ?>




      <script>
        $(document).ready(function(e){
            $("#search").keyup(function(){
                $("#show_up").show();
                var text = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: 'index_search.php',
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