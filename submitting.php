<?php

          if(isset($_POST['submit']))
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

          }
        ?>