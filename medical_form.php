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
      .image{
        position: sticky;
        top: 4vh;
        filter: hue-rotate(60deg);
        box-shadow: 0 0 8px 8px white inset;
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
      </div>
    </nav>
    
      <div class="container-fluid">
        <div class="row justify-content-center">
          <p class="h3 m-0 text-center">Medical Information Form</p>
          <p class="m-0 text-center">(This will help us to serve you better)</p>
        </div>
        <div class="row bg-light">
          <div class="col-8">
            <div class="row col-4 pt-5 pb-2">
              <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg">User Id</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" disabled>
              </div>
            </div>
            <div class="row p-4">
              <div class="row h4 border-bottom border-dark d-inline-block">Personal Information<span class="p-1" style="color: red;">*</span></div>
              <div class="row">
                <div class="col-6">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">First Name<span style="color: red;">*</span></span>
                    <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
                  </div>
                </div>
                <div class="col-6">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Last Name<span style="color: red;">*</span></span>
                    <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
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
                  <span class="input-group-text" id="inputGroup-sizing-default">Aadhar Card Number</span>
                  <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
              </div>
            </div>
          </div>
          <div class="row p-4">
            <div class="row h4 border-bottom border-dark">Medical Check</div>
          <div class="row">
            <div class="col-4">
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Heart Rate</span>
                <input type="number" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" min="45" max="125" required>
                <span class="input-group-text" id="inputGroup-sizing-default"><small>in bpm</small></span>
              </div>
            </div>
            <div class="col-4">
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Diabetes</span>
                <select class="form-select" aria-label="Default select example">
                  <option value="NO" selected>No</option>
                  <option value="YES">Yes</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Blood Pressure</span>
                <select class="form-select" aria-label="Default select example">
                  <option value="NO" selected>No</option>
                  <option value="YES">Yes</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Arthritis</span>
                <select class="form-select" aria-label="Default select example">
                  <option value="NO" selected>No</option>
                  <option value="YES">Yes</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Any Allergy</span>
                <select class="form-select" aria-label="Default select example">
                  <option value="NO" selected>No</option>
                  <option value="YES">Yes</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="If YES, What kind of allergy you have?">
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Asthma</span>
                <select class="form-select" aria-label="Default select example">
                  <option value="NO" selected>No</option>
                  <option value="YES">Yes</option>
                </select>
              </div>
            </div>
            </div>
          </div>
          <div class="row p-4">
            <div class="row h4 border-bottom border-dark">Habits</div>
            <div class="row">
              <div class="col-4">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-default">Smoking</span>
                  <select class="form-select" aria-label="Default select example">
                    <option value="NO" selected>No</option>
                    <option value="YES">Yes</option>
                  </select>
                </div>
              </div>
              <div class="col-4">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-default">Alcohol Consumption</span>
                  <select class="form-select" aria-label="Default select example">
                    <option value="NO" selected>No</option>
                    <option value="YES">Yes</option>
                  </select>
                </div>
              </div>
              <div class="col-4">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-default">Regular Exercise</span>
                  <select class="form-select" aria-label="Default select example">
                    <option value="NO" selected>No</option>
                    <option value="YES">Yes</option>
                  </select>
                </div>
              </div>
            </div>
            </div>
            <div class="row p-4">
              <div class="row h4 border-bottom border-dark">Surgeries and Dates</div>
              <div class="row">
                <div class="col-6">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">1<sup>st</sup> Surgery</span>
                    <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                </div>
                <div class="col-6">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Date of 1<sup>st</sup> Surgery</span>
                    <input type="date" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">2<sup>nd</sup> Surgery</span>
                    <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                </div>
                <div class="col-6">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Date of 2<sup>nd</sup> Surgery</span>
                    <input type="date" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">3<sup>rd</sup> Surgery</span>
                    <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                </div>
                <div class="col-6">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Date of 3<sup>rd</sup> Surgery</span>
                    <input type="date" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Any Additional Information</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
              </div>
              <div class="row p-4">
                <div class="row h4 border-bottom border-dark">Doctors Consulted</div>
                <div class="row">
                  <div class="col-6">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default">1<sup>st</sup> Doctor's Name</span>
                      <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default">Date of Consultantion</span>
                      <input type="date" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default">Purpose of Consultation</span>
                      <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default">2<sup>nd</sup> Doctor's Name</span>
                      <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default">Date of Consultantion</span>
                      <input type="date" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default">Purpose of Consultation</span>
                      <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default">3<sup>rd</sup> Doctor's Name</span>
                      <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default">Date of Consultantion</span>
                      <input type="date" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default">Purpose of Consultation</span>
                      <input type="text" class="form-control col-6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Any Additional Information</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
                </div>
                <div class="row p-5">
                  <!-- <button type="submit" class="btn btn-success btn-lg">Submit Medical Details</button> -->
                  <a href="menu.php" class="btn btn-success btn-lg" type="submit" role="button">Submit Medical Details</a>
                </div>
          </div>
          
          <div class="col-4">
            <img class="image border-left border-dark p-2" src="Images/medical_report.jpg" alt="">
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