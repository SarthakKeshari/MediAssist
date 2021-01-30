<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        body{
            background: url(Images/health_background.jpg);
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
                    <li><a class="dropdown-item medium mb-2" href="self_assessment.php"><img src="Images/test.svg" width="20" height="20" alt="" loading="lazy">&emsp;Self Assessment</a></li>
                    <li><a class="dropdown-item medium mb-2" href="health_record.php"><img src="Images/record.svg" width="20" height="20" alt="" loading="lazy">&emsp;Health Record</a></li>
                    <li><a class="dropdown-item medium mb-2" href=""><img src="Images/logout.svg" width="20" height="20" alt="" loading="lazy">&emsp;Log Out</a></li>
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
  <?php
        // if(isset($_POST['submit']))
        // {
            // $s=$_POST['abc'];
            // echo $s;
            $db_host='127.0.0.1';
            $db_user='root';
            $db_pass='';
            $db_name='mediassist';

            $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
            if(!$conn )
            {
                die('Failed to connect mysql database'.mysqli_connect_error());
            }

            $sql='SELECT * from patients where F_name = "Sarthak"';
            $query = mysqli_query($conn,$sql);

            if(!$query)
            {
                die('error found'.mysqli_error($conn));
            }

            $row=mysqli_fetch_array($query);

            // print_r($row);

          // }
        ?>
        <div class="container"> 
        <div class="row bg-light">
        <div class="row justify-content-center">
            <p class="h3 m-2 text-center">Health Record</p>
        </div>
          <div class="col-12">
            <div class="row p-4">
              <div class="row h4 border-bottom border-dark d-inline-block">Personal Information</div>
              <div class="row">
                <div class="col-5 m-2 d-flex">
                    <div class="input-group-text" id="inputGroup-sizing-default">First Name</div>
                    <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['F_name'];?></div>
                </div>
                <div class="col-5 m-2 d-flex">
                    <div class="input-group-text" id="inputGroup-sizing-default">Last Name</div>
                    <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['L_name'];?></div>
                </div>
            </div>
            <div class="row">
              <div class="col-3 m-2 d-flex">
                  <div class="input-group-text" id="inputGroup-sizing-default">D.O.B</div>
                  <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['D.O.B'];?></div>
              </div>
              <div class="col-2 m-2 d-flex">
                  <div class="input-group-text" id="inputGroup-sizing-default">Age</div>
                  <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Age'];?></div>
              </div>
              <div class="col-3 m-2 d-flex">
                  <div class="input-group-text" id="inputGroup-sizing-default">Gender</div>
                  <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Gender'];?></div>
              </div>
              <div class="col-3 m-2 d-flex">
                  <div class="input-group-text" id="inputGroup-sizing-default">Blood Group</div>
                  <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo 'O+';?></div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 m-2 d-flex">
                  <div class="input-group-text" id="inputGroup-sizing-default">Aadhar Card Number</div>
                  <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Aadhar_No'];?></div>
              </div>
            </div>
          </div>
          <div class="row p-4">
            <div class="row h4 border-bottom border-dark">Medical Check</div>
          <div class="row">
            <div class="col-3 m-2 d-flex">
                <div class="input-group-text" id="inputGroup-sizing-default">Heart Rate(in bps)</div>
                <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Heart_rate'];?></div>
            </div>
            <div class="col-3 m-2 d-flex">
                <div class="input-group-text" id="inputGroup-sizing-default">Diabetes</div>
                <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Diabetes'];?></div>
            </div>
            <div class="col-3 m-2 d-flex">
                <div class="input-group-text" id="inputGroup-sizing-default">Blood Pressure</div>
                <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Blood_pres'];?></div>
            </div>
          </div>
          <div class="row">
            <div class="col-3 m-2 d-flex">
                <div class="input-group-text" id="inputGroup-sizing-default">Arthritis</div>
                <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Arthritis'];?></div>
            </div>
            <div class="col-3 m-2 d-flex">
                <div class="input-group-text" id="inputGroup-sizing-default">Any Allergy</div>
                <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Allergy'];?></div>
            </div>
            <div class="col-3 m-2 d-flex">
                <div class="input-group-text" id="inputGroup-sizing-default">Allergy Name</div>
                <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Allergy_Name'];?></div>
            </div>
          </div>
          <div class="row">
            <div class="col-3 m-2 d-flex">
                <div class="input-group-text" id="inputGroup-sizing-default">Asthma</div>
                <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Asthma'];?></div>
            </div>
            </div>
          </div>
          <div class="row p-4">
            <div class="row h4 border-bottom border-dark">Habits</div>
            <div class="row">
              <div class="col-3 m-2 d-flex">
                  <div class="input-group-text" id="inputGroup-sizing-default">Smoking</div>
                  <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Smoking'];?></div>
              </div>
              <div class="col-4 m-2 d-flex">
                  <div class="input-group-text" id="inputGroup-sizing-default">Alcohol Consumption</div>
                  <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Alcohol'];?></div>
              </div>
              <div class="col-4 m-2 d-flex">
                  <div class="input-group-text" id="inputGroup-sizing-default">Regular Exercise</div>
                  <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Exercise'];?></div>
              </div>
            </div>
            </div>
            <div class="row p-4">
              <div class="row h4 border-bottom border-dark">Surgeries and Dates</div>
              <div class="row">
                <div class="col-5 m-2 d-flex">
                    <div class="input-group-text" id="inputGroup-sizing-default">1<sup>st</sup> Surgery</div>
                    <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Surgery1'];?></div>
                </div>
                <div class="col-5 m-2 d-flex">
                    <div class="input-group-text" id="inputGroup-sizing-default">Date of 1<sup>st</sup> Surgery</div>
                    <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['D_Surgery1'];?></div>
                </div>
              </div>
              <div class="row">
                <div class="col-5 m-2 d-flex">
                    <div class="input-group-text" id="inputGroup-sizing-default">2<sup>nd</sup> Surgery</div>
                    <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Surgery2'];?></div>
                </div>
                <div class="col-5 m-2 d-flex">
                    <div class="input-group-text" id="inputGroup-sizing-default">Date of 2<sup>nd</sup> Surgery</div>
                    <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['D_Surgery2'];?></div>
                </div>
              </div>
              <div class="row">
                <div class="col-5 m-2 d-flex">
                    <div class="input-group-text" id="inputGroup-sizing-default">3<sup>rd</sup> Surgery</div>
                    <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Surgery3'];?></div>
                </div>
                <div class="col-5 m-2 d-flex">
                    <div class="input-group-text" id="inputGroup-sizing-default">Date of 3<sup>rd</sup> Surgery</div>
                    <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['D_Surgery3'];?></div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Additional Information</label>
                  <textarea class="form-control-plaintext border p-2" id="exampleFormControlTextarea1" rows="3" readonly><?php echo $row['Add_SurgeryInfo'];?></textarea>
                </div>
              </div>
              </div>
              <div class="row p-4">
                <div class="row h4 border-bottom border-dark">Doctors Consulted</div>
                <div class="row">
                  <div class="col-5 m-2 d-flex">
                      <div class="input-group-text" id="inputGroup-sizing-default">1<sup>st</sup> Doctor's Name</div>
                      <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Doc_Consult1'];?></div>

                  </div>
                  <div class="col-5 m-2 d-flex">
                      <div class="input-group-text" id="inputGroup-sizing-default">Date of Consultantion</div>
                      <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['D_Consult1'];?></div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-12 m-2 d-flex">
                      <div class="input-group-text" id="inputGroup-sizing-default">Purpose of Consultation</div>
                      <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Pur_Consult1'];?></div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-5 m-2 d-flex">
                      <div class="input-group-text" id="inputGroup-sizing-default">2<sup>nd</sup> Doctor's Name</div>
                      <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Doc_Consult2'];?></div>
                    </div>
                  <div class="col-5 m-2 d-flex">
                      <div class="input-group-text" id="inputGroup-sizing-default">Date of Consultantion</div>
                      <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['D_Consult2'];?></div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-12 m-2 d-flex">
                      <div class="input-group-text" id="inputGroup-sizing-default">Purpose of Consultation</div>
                      <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Pur_Consult2'];?></div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-5 m-2 d-flex">
                      <div class="input-group-text" id="inputGroup-sizing-default">3<sup>rd</sup> Doctor's Name</div>
                      <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Doc_Consult3'];?></div>
                    </div>
                  <div class="col-5 m-2 d-flex">
                      <div class="input-group-text" id="inputGroup-sizing-default">Date of Consultantion</div>
                      <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['D_Consult3'];?></div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-12 m-2 d-flex">
                      <div class="input-group-text" id="inputGroup-sizing-default">Purpose of Consultation</div>
                      <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['Pur_Consult3'];?></div>
                </div>
                <div class="row mt-4">
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Additional Information</label>
                    <textarea class="form-control-plaintext border p-2" id="exampleFormControlTextarea1" rows="3" readonly><?php echo $row['Add_ConsultInfo'];?></textarea>
                  </div>
                </div>
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