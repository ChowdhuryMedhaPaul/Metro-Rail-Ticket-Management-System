<!DOCTYPE html>
<?php
include "lib/connection.php";
session_start();

?>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="styleee.css">
    <link href="headerstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
			<div class="header">
				<h1> Login </h1>
		    </div>

<form method="post" action="customer_log.php">
	
			<div class="input-group">
				<label><h2>Email </h2></label>
				<input type="text" name="cust_mail" placeholder=" " required >
			</div>
			<div class="input-group">
				<label><h2>Password </h2></label>
				<input type="password" name="cust_password" placeholder=" " required >
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="login">Login</button>
			</div>
			<p>
				Not yet a member? <a href="customer_reg.php"><span style="color:#000000" > Sign up </span></a>
			</p>
		</form>
    <?php
        if(isset($_POST['login']))
        {   
            $customer_password = $_POST['cust_password'];
            $customer_mail = $_POST['cust_mail'];
            
            $sql = "SELECT * FROM customer WHERE cust_mail = '$customer_mail' AND cust_password ='$customer_password'";
            $result = $conn->query($sql);
            if($result->num_rows!=0)
            {
                $sql_1 = "SELECT cust_id from customer WHERE cust_mail = '$customer_mail' AND cust_password = '$customer_password'";
                
                $result_1 = $conn->query($sql_1);
                
                $row = $result_1->fetch_assoc();
				    if ($row['cust_mail'] === $customer_mail) {
                     echo "email already exists";
                   }
                $_SESSION["cust_mail"]    = $row['cust_mail'];
                $_SESSION["cust_password"] = $row['cust_password'];
                header("Location: booking.php");
            }
            else
            {
                echo "Please register<br>";
            }
        }
        ?>
</body>
  <a href="header.php" style="margin-left: 61%;" > Home </a>

</html>
