<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel = "icon" href =  "images/icon.png" type = "image/x-icon"> 

    
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

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
            overflow: hidden;
        }

        .detailtable{
            overflow: scroll;
            height: 65vh;
        }

        .detailtable::-webkit-scrollbar{
            display: none;
        }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid border-dark border-bottom">
          <a class="navbar-brand" href="admin_index.php">
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

      <div class="h3 bg-success p-4 text-white text-center">
          Ambulance Status
      </div>

    <div class="detailtable m-2 mt-5">

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

            $sql='SELECT * from ambulance';
            $query = mysqli_query($conn,$sql);

            if(!$query)
            {
                die('error found'.mysqli_error($conn));
            }

            echo '<table class="table table-dark table-hover m-2">
            <thead>
                <tr>
                <th scope="col col-1">Ambulance ID</th>
                <th scope="col">Vehicle Registration Number</th>
                <th scope="col">Vehicle Type</th>
                <th scope="col">Availability</th>
                </tr>
            </thead>';

            while($row=mysqli_fetch_array($query))
            {    
            echo '
            <tbody>
                <tr>
                <th scope="row">'.$row['ambulance_id'].'</th>
                <td>'.$row['registration_number'].'</td>
                <td>'.$row['type'].'</td>';
                
                if($row['availability']==1)
                {
                    echo '<td class="pr-4"><button id="amb" class="btn btn-block btn-success p-1">Available</button></td>';
                }
                else
                {
                    echo '<td class="pr-4"><button id="amb" class="btn btn-block btn-success p-1 btn-danger">Not Available</button></td>';
                }
                
                
                echo '</tr>
            </tbody>';
            // <td><form id="myform" action="admin_patient.php" method="post"><button id="'.$row['S_No'].'" onclick=showdetails('.$row['S_No'].') data-toggle="modal" data-target="#exampleModal" class="btn btn-primary p-1">View Full Detail</button><input name="abc" value="'.$row['S_No'].'"></form></td>
            // echo '<script>console.log('.$row['S_No'].')</script>';
            }

            echo '</table>';
            ?>

        </div>

        <script>
            $( "button" ).click(function() {
            $( this ).toggleClass( "btn-danger" );
            if (this.innerHTML === "Available") {
                this.innerHTML = "Not Available";
            } else {
                this.innerHTML = "Available";
            }
            });
        </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </body>
</html>