<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<?php
// create a new function
function search($text){
	
	// connection to the Ddatabase
	$db = new PDO("mysql:host=localhost;dbname=mediassist", 'root', '');
	// let's filter the data that comes in
	$text = htmlspecialchars($text);
	// prepare the mysql query to select the users 
	$get_word = $db->prepare("SELECT * FROM doctors WHERE Doc_Name LIKE concat('%',:Doc_Name, '%')");
	// execute the query
	$get_word -> execute(array('Doc_Name' => $text));
    // show the users on the page
    $c=0;
    echo '<div class="row d-flex justify-content-center g-2 doctors" id="show_up">';
	while($row = $get_word->fetch(PDO::FETCH_ASSOC)){
        // show each user as a link  
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
     echo '</div>';
}
// call the search function with the data sent from Ajax
search($_GET['txt']);
?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <scriptalert src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></scripalertalert>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
    </html>