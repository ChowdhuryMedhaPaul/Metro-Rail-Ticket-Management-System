<!DOCTYPE html>
<?php
include "lib/connection.php";
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="styleee.css">
    <link href="headerstyle.css" rel="stylesheet" type="text/css">



</head>

<body>
 
    <div class="header">
  	<h1>Register</h1>
  </div>
	
  <form method="post" action="customer_reg.php">
  	<div class="input-group">
  	  <label><h2>Name</label></h2>
  	  <input type="text" name="cust_name" required>
  	</div>
	  	<div class="input-group">
  	  <label><h2>Address</label></h2>
  	  <input type="text" name="cust_address">
  	</div>
  	<div class="input-group">
  	  <label><h2>Email</label></h2>
  	  <input type="email" name="cust_mail">
  	</div>  	
	<div class="input-group">
  	  <label><h2>Phone</label></h2>
  	  <input type="number" pattern="[0-9]+" name="cust_phone">
  	</div>
  	<div class="input-group">
  	  <label><h2>Password</label></h2>
  	  <input type="password" name="cust_password">
  	</div>
  	<div class="input-group">
  	  <label><h2>Confirm password</label></h2>
  	  <input type="password" name="password_2">
  	</div>
	      <div class="input-group">
                <select name="gender">
                  <option><h2>Please Select the Gender</h2></option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </select>
              </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="customer_log.php"> <span style="color:#000000" > Sign in </span></a>
  	</p>
  </form>
    <?php    
        if(isset($_POST['reg_user']))
        {
            $customer_name      = $_POST['cust_name'];
            $customer_password  = $_POST['cust_password'];
            $customer_address   = $_POST['cust_address'];
            $customer_phone     = $_POST['cust_phone'];
            $customer_mail      = $_POST['cust_mail'];
            $customer_gender    = $_POST['gender'];
            
            $sql_1 = "SELECT * FROM customer WHERE cust_mail = '$customer_mail'";
            $result = $conn->query($sql_1);
			
            
            if($result->num_rows==0)
            {
                    // Create a Data into our customer Table
                 $sql = "INSERT INTO customer(cust_name,cust_password,cust_address,cust_mail,cust_phone,gender) VALUES ('$customer_name','$customer_password','$customer_address','$customer_mail','$customer_phone','$customer_gender')";
            
                if ($conn->query($sql) == TRUE) {
                  echo "New record created successfully<br>";       
                   }
                
               header("Location: customer_log.php") ;
    
               }
             else
             {
                echo "This mail is already taken<br>";
             }
         }
    
    
        ?>
		
</body>
  <a href="header.php" style="margin-left: 61%;" > Home </a>

</html>
