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
	$get_word = $db->prepare("SELECT * FROM medicines WHERE Med_Name LIKE concat(:Med_Name, '%')");
	// execute the query
	$get_word -> execute(array('Med_Name' => $text));
    // show the users on the page
    $c=0;
    echo '<div class="row d-flex justify-content-center g-2 medicines">';
	while($row = $get_word->fetch(PDO::FETCH_ASSOC)){
        // show each user as a link  
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