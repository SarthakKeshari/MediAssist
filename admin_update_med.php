<!doctype html>
<html lang="en">
  <head>
    <!-- meta tags -->
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
            background: url(Images/update_insert_med.jpg);
            background-size: cover;
            height: 100vh;
            backdrop-filter: blur(1px) brightness(60%) grayscale(62%);
            overflow: hidden;
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

      <?php 
        if(isset($_GET['update']))
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

            $sql2="SELECT * from medicines where S_No = ".$_GET['id'];
            $query2 = mysqli_query($conn,$sql2);
    
            $row=mysqli_fetch_array($query2);
    
            $id = $row['S_No'];
            $name = $row['Med_Name'];
            $cost = $row['Med_Cost'];
            $cap = $row['Cap_perPack'];
            $brand = $row['Med_Brand'];
            $uses = $row['Uses'];
            $side = $row['Side_Effect'];
    
    
            if($_GET['name']!='')
            {
                $name = $_GET['name'];
            }
    
            if($_GET['cost']!='')
            {
                $cost = $_GET['cost'];
            }
    
            if($_GET['cap']!='')
            {
                $cap = $_GET['cap'];
            }
    
            if($_GET['brand']!='')
            {
                $brand = $_GET['brand'];
            }
    
            if($_GET['uses']!='')
            {
                $uses = $_GET['uses'];
            }
            
            if($_GET['side']!='')
            {
                $side = $_GET['side'];
            }
    
            $sql3="UPDATE medicines SET Med_Name = '$name', Med_Cost = '$cost', Cap_perPack = '$cap', Med_Brand = '$brand', Uses = '$uses', Side_Effect = '$side' WHERE S_No = ".$id;
            $query3 = mysqli_query($conn,$sql3);
    
            if(!$query3)
            {
                die('error found'.mysqli_error($conn));
            }

            header('Location: admin_med.php');
        }

        else{
      ?>

      <div class="h4 bg-success p-2 text-white text-center">
          <p class="mb-0">Update Medicine Details</p>
          <small class="text-danger" style="font-size: 0.6em;">*Fill only those fields which you want to change for a particular Doctor ID</small>
      </div>

      <form action="admin_update_med.php" method="GET" class="row justify-content-end">
        <div class="col-6 p-5 pt-4">
            <div class="row">
            <div class="col-12 pb-2">
                    <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Medicine ID<span style="color: red;">*</span></span>
                    <input type="number" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="id" required>
                    </div>
                </div>

                <div class="col-12 pt-2 pb-2">
                    <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Medicine Name</span>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="name">
                    </div>
                </div>

                <div class="col-6 pt-2 pb-2">
                    <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Medicine Cost</span>
                    <span class="input-group-text">₹</span>
                    <input type="number" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" min="0" name="cost">
                    </div>
                </div>

                <div class="col-6 pt-2 pb-2">
                    <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Number of Capsules/Pack</span>
                    <input type="number" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" min="0" name="cap">
                    </div>
                </div>

                <div class="col-12 pt-2 pb-2">
                    <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Medicine Brand</span>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="brand">
                    </div>
                </div>

                <div class="col-12 pt-2 pb-2">
                    <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Uses</span>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="450" placeholder="Max. character limit 450" name="uses"></textarea>
                    </div>
                </div>

                <div class="col-12 pt-2 pb-2">
                    <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Side Effects</span>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="450" placeholder="Max. character limit 450" name="side"></textarea>
                    </div>
                </div>

                <div class="col-12 pt-2 pb-2">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload Image of Medicine</span>
                        <div class="form-file">
                            <input type="file" class="form-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="form-file-label" for="inputGroupFile01">
                            <span class="form-file-text">Choose file...</span>
                            <span class="form-file-button" role="button">Browse</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" name="update" class="btn btn-success bg-gradient btn-block p-1">
                    <hr class="mt-1 mb-1">
                        Update Medicine Detail
                    <hr class="mt-1 mb-1">
                    </button>
                </div>
            </div>
        </div>
      </form>

        <?php }?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->
  </body>
</html>