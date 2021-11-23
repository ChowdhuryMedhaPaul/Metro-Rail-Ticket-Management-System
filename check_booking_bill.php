

<?php
  include "lib/connection.php";
  include "inc/header.php";
 
?>


<?php
              if(isset($_POST['submit']))
              {
                $category    = $_POST['category'];
                $origin          = $_POST['origin'];              
                $destination   = $_POST['destination'];
                $number      = $_POST['number'];
                $mobile = $_POST['mobile'];
                $reservation     = $_POST['reservation'];
                
               
              

                
                $query = "INSERT INTO `reservation`(`category`, `origin`, `destination`, `number`,`mobile`, `date` ) VALUES ('$category', '$origin', '$destination', '$number', '$mobile', '$reservation')";



                if(!mysqli_query($conn, $query))
                {
                  echo "<script type='text/javascript'> alert('Sorry could not reserve tthe seat. Please try again.');</script>";
                  header("Location: booking.php");
                }
              }
              else{
                header("Location: home.php");
              }

?>
