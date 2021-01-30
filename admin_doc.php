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
            overflow: hidden;
        }

        .detailtable{
            overflow: scroll;
            height: 60vh;
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
          Doctor Details
      </div>

      <div class="container position-sticky top-0">
        <div class="row">
            <div class="col-4">
                <a role="button" class="btn btn-success bg-gradient btn-lg btn-block p-2 mt-5 h1" href="admin_update_doc.php">Update Doctor's Detail</a>
            </div>
            <div class="col-4">
                <a role="button" class="btn btn-success bg-gradient btn-lg btn-block p-2 mt-5 h1" href="admin_insert_doc.php">Insert New Doctor</a>
            </div>
            <div class="col-4">
                <a role="button" class="btn btn-success bg-gradient btn-lg btn-block p-2 mt-5 h1" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">Delete Doctor's Detail</a>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form  action="admin_insert_doc.php" method="GET">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Remove Doctor</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3 d-flex col-4">
                                <label for="recipient-name" class="col-form-label col-8">Doctor ID</label>
                                <input type="text" class="form-control" id="message-text" name="id" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="delete" class="btn btn-primary">Delete</button>
                        </div>
                        </div>
                    </div>
                    </form>
                </div>

    <div class="detailtable m-2">

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

            echo '<table class="table table-dark table-hover m-2">
            <thead>
                <tr>
                <th scope="col col-1">Doctor ID</th>
                <th scope="col">Name</th>
                <th scope="col">Qualification</th>
                <th scope="col">Specializes In/Pack</th>
                <th scope="col">Clinic/Hospital Address</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Experience<br>(in years)</th>
                <th scope="col">Star Rating</th>
                <th scope="col">Image Location</th>
                </tr>
            </thead>';

            while($row=mysqli_fetch_array($query))
            {    
            echo '
            <tbody>
                <tr>
                <th scope="row">'.$row['S_No'].'</th>
                <td>'.$row['Doc_Name'].'</td>
                <td>'.$row['Doc_Qual'].'</td>
                <td>'.$row['Doc_Spec'].'</td>
                <td>'.$row['Doc_Addr'].'</td>
                <td>'.$row['contact'].'</td>
                <td>'.$row['Doc_Exp'].'</td>
                <td>'.$row['Rating'].'</td>
                <td>'.$row['Image'].'</td>
                </tr>
            </tbody>';
            }

            echo '</table>';
            ?>

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