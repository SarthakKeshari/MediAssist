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
          Patient Details
      </div>

    <div class="row bg-white mt-4 idid">
        <div class="col-12">
            <p class="m-1 text-center text-danger">No Updation or Insertion can be done in case of Patient Details</p>
        </div>
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

            $sql='SELECT * from patients';
            $query = mysqli_query($conn,$sql);

            if(!$query)
            {
                die('error found'.mysqli_error($conn));
            }

            echo '<table class="table table-dark table-hover m-2">
            <thead>
                <tr>
                <th scope="col col-1">Patient ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">D.O.B</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Aadhar Card Number</th>
                <th scope="col">Heart Rate(in bps)</th>
                <th></th>
                </tr>
            </thead>';

            while($row=mysqli_fetch_array($query))
            {    
            echo '
            <tbody>
                <tr>
                <th scope="row">'.$row['S_No'].'</th>
                <td>'.$row['F_name'].'</td>
                <td>'.$row['L_name'].'</td>
                <td>'.$row['D.O.B'].'</td>
                <td>'.$row['Age'].'</td>
                <td>'.$row['Gender'].'</td>
                <td>'.$row['Aadhar_No'].'</td>
                <td>'.$row['Heart_rate'].'</td>
                <td><button id="'.$row['S_No'].'" onclick=showdetails('.$row['S_No'].') data-toggle="modal" data-target="#exampleModal" class="btn btn-primary p-1">View Full Detail</button></td>
                </tr>
            </tbody>';
            // <td><form id="myform" action="admin_patient.php" method="post"><button id="'.$row['S_No'].'" onclick=showdetails('.$row['S_No'].') data-toggle="modal" data-target="#exampleModal" class="btn btn-primary p-1">View Full Detail</button><input name="abc" value="'.$row['S_No'].'"></form></td>
            echo '<script>console.log('.$row['S_No'].')</script>';
            }

            echo '</table>';
            ?>

        </div>


      <script>
        function showdetails(num)
        {
          // alert(num);
          // document.getElementById("idid").innerHTML=num;


        // document.forms["myform"].submit();
        // alert("Value is sumitted");

        // var mysql = require('mysql');

      // var con = mysql.createConnection({
      //   host: "localhost",
      //   user: "root",
      //   password: "",
      //   database: "mediassist"
      // });

      // con.connect(function(err) {
      //   if (err) throw err;
      //   con.query("SELECT * FROM patients WHERE S_NO = '1'", function (err, result) {
      //     if (err) throw err;
      //     console.log(result);
      //   });
      // });

      // console.log("Connection Success");


         
      //   }
      </script>

        <?php
        // if(isset($_POST['submit']))
        // {
            $s=$_POST['abc'];
            echo $s;
            $sql='SELECT * from patients where S_No="1"';
            $query = mysqli_query($conn,$sql);

            if(!$query)
            {
                die('error found'.mysqli_error($conn));
            }

            $row=mysqli_fetch_array($query);

            // print_r($row);

          // }
        ?>  
       

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-xl modal-fullscreen-xl-down">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
            <div class="row">
            <div class="col-12 m-2 d-flex">
                <div class="input-group-text" id="inputGroup-sizing-lg">User Id</div>
                <div class="form-control-plaintext border p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"><?php echo $row['S_No'];?></div>
            </div>
            </div>
          </h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div class="container-fluid">
            <!-- <div class="row justify-content-center">
              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>
              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    Last Name
                  </div>
                  <div class="col-8 p-2">
                    Kumar
                  </div>
                </div>
              </div>

              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    D.O.B
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>
              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>

              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>

              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>

              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>

              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>

              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>

              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>

              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>

              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>

              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>

              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>

              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>

              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>

              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>

              <div class="col-5 m-1 mr-4">
                <div class="row border rounded">
                  <div class="col-4 p-2 text-white bg-dark rounded text-center">
                    First Name
                  </div>
                  <div class="col-8 p-2">
                    Vijay
                  </div>
                </div>
              </div>
            </div> -->
            <div class="row bg-light">
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

          <?php ?>