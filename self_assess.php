<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
  body{
      background: url(Images/assess_back.jpeg);
      background-size: cover;
  }

  ::-webkit-scrollbar{
      display: none;
  }
  </style>
  <body>
  <nav class="navbar navbar-light bg-light position-sticky top-0">
        <div class="container-fluid border-dark border-bottom">
          <a class="navbar-brand" href="#">
            <img src="images/icon.png" alt="" width="50" height="50" class="d-inline-block align-top">
            <span class="h1">MediAssist</span>
          </a>
        </div>
  </nav>

  <div class="container bg-light pb-4">
  <div class="row text-center">
    <p class="h2 mb-5">
        Self Assess Yourself
    </p>
</div>

<?php
    if(isset($_GET['submit']))
    {
        // echo $_GET['3'];
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
        $a=$_GET['1'];
        $b=$_GET['2'];
        $c=$_GET['3'];
        $d=$_GET['4'];
        $e=$_GET['5'];
        $f=$_GET['6'];
        $g=$_GET['7'];
        $h=$_GET['8'];
        $i=$_GET['9'];
        $j=$_GET['10'];
        $k=$_GET['11'];
        $l=$_GET['12'];
        $m=$_GET['13'];
        $n=$_GET['14'];
        $o=$_GET['15'];
        
        $sql="SELECT Diseases from selfassess WHERE Muscle_Pain = '$a'and Running_Nose = '$b' and Shivering = '$c' and Fever = '$d' and Watery_Eyes = '$e' and Fatigue = '$f' and Congestion = '$g' and Throat_Irritation = '$h' and Loss_of_Smell = '$i' and Headache = '$j' and Chest_Pain = '$k' and Dehydration = '$l' and Chronic_Cough = '$m' and Loss_of_Weight = '$n' and Skin_Rash = '$o'";
        $query = mysqli_query($conn,$sql);

        if(!$query)
        {
            die('error found'.mysqli_error($conn));
        }

        $row=mysqli_fetch_array($query);

        $sql1 = "SELECT disease from diseases";
            $query1 = mysqli_query($conn,$sql1);
            $c=1;?>

            <div class="row ml-5 mb-2">
                <div class="col-12">
                    <p class="h4">
                        Your Symptoms -
                    </p>
                </div>
            </div>

            <?php
            $f=0;
            while($row1=mysqli_fetch_array($query1))
            {
                if($_GET[$c] == 'Y')
                {
                    $f=1;
                    ?>

                <div class="row ml-5">
                    <div class="col-12 ml-5">
                        <p class="ml-5 h5 text-danger">
                            <?php echo $row1['disease'];?>
                        </p>
                    </div>
                </div>    

                    <?php
                }
                $c++;
            }

            if($f==0)
            {
                ?>
                <div class="row ml-5">
                    <div class="col-12 ml-5">
                        <p class="ml-5 h5 text-danger">
                            No symptom selected
                        </p>
                    </div>
                </div>  
                <?php
            }

            ?>

            <div class="row ml-5 mb-2 mt-5">
                <div class="col-12">
                    <p class="h4">
                        Diagnosis Report -
                    </p>
                </div>
            </div>

            <?php

        if($row==NULL)
        {
        ?>
            <div class="row ml-5">
                <div class="col-12 ml-5">
                    <p class="ml-5 h4 text-danger">
                        Oops! Nothing found in database.
                    </p>
                </div>
            </div>
        <?php
        }
        else
        {
            ?>

            <div class="row ml-5">
                <div class="col-12 ml-5">
                    <p class="ml-5 h5 text-danger">
                        Disease - <?php echo $row['Diseases'];?>
                    </p>
                </div>
            </div>
            <?php
        }
?>
            <div class="row mb-5 mt-5">
                <div class="col-12 mb-5 mt-5">
                    <p class="ml-5 text-danger">
                        *The above diagnosis is not bound for any medical reference or claim.
                    </p>
                </div>
            </div>
  </div>

<?php
    }
    else
    {
?>


<form action="self_assess.php" method="GET"  class="container bg-light pt-2 pb-5">

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

    $sql='SELECT * from diseases';
    $query = mysqli_query($conn,$sql);

    if(!$query)
    {
        die('error found'.mysqli_error($conn));
    }?>

    <?php
    $c=1;
    while($row=mysqli_fetch_array($query))
    {   
?>
    <div class="container pr-5">
        <div class="row p-2 pr-5 d-flex justify-content-center">
            <div class="col-4 d-flex align-items-center">
                <p class="h5 m-0">Do you have <?php echo $row['disease']?> ?</p>
            </div>

            <div class="col-6 d-flex align-items-center">
                --------------------------------------------------------------------------
            </div>

            <div class="col-2 d-flex align-items-center">
                <select class="form-select" aria-label="Default select example" name="<?php echo $c++;?>">
                    <option selected value="N">No</option>
                    <option value="Y">Yes</option>
                </select>
            </div>
        </div>
    </div>
<?php
    }
?>
            <div class="row d-flex justify-content-center  mt-5">
                <div class="col-2">
                    <input type="submit" role="button" name="submit" class="btn btn-danger text-center btn-block btn-large" value="Analyse">
                </div>
            </div>
        </form>
<?php
    }
?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->
  </body>
</html>