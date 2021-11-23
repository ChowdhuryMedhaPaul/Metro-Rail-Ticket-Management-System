<html>

<?php
    
include "lib/connection.php";
    
    session_start();
    
    
  //  $customer_id = $_SESSION['cust_id'];

?>

<head>
	<link rel="stylesheet" type="text/css" href="styleee.css">
    <link href="headerstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
	
						<div class="header">
							<h1>Make your reservation</h1>
							
						</div>
							<form method="post" action="check_booking_bill.php">
							
								<div class="input-group">
					              <label><h2>Select Ticket Category *</h2></label>
					                <select name="category"  class=" " required>
					                  <option  ></option>
					                  <option >Tourist</option>
					                  <option >Student</option>
					                  <option >Business</option>
					                </select>
					            </div>


					            <div class="input-group">
					              <label><h2>Origin *</h2></label>
					                <select name="origin" class=" " required>
					                  <option value selected ></option>
					                  <option >Uttara North</option>
					                  <option >Mirpur Center</option>
					                  <option >Pallabi South</option>
					                  <option >Pallabi</option>
					                  <option >Mirpur 11</option>
					                  <option >Mirpur 10</option>
					                  <option >Kazipara</option>
					                  <option >Shewrapara</option>
					                  <option >Agargaon</option>
					                  <option >Bijoy Sarani</option>
					                  <option >Farmgate</option>
					                  <option >Karwan Bazar</option>
					                  <option >Shahbag</option>
					                  <option >Dhaka University</option>
					                  <option >Bangladesh Secretariat</option>
					                  <option >Motijheel</option>
					                  <option >Kamalapur</option>
					                </select>
					            </div>

					            <div class="input-group">
					              <label><h2>Destination *</h2></label>
					                <select name="destination" class=" " required>
					                  <option value selected ></option>
					                  <option >Uttara North</option>
					                  <option >Mirpur Center</option>
					                  <option >Pallabi South</option>
					                  <option >Pallabi</option>
					                  <option >Mirpur 11</option>
					                  <option >Mirpur 10</option>
					                  <option >Kazipara</option>
					                  <option >Shewrapara</option>
					                  <option >Agargaon</option>
					                  <option >Bijoy Sarani</option>
					                  <option >Farmgate</option>
					                  <option >Karwan Bazar</option>
					                  <option >Shahbag</option>
					                  <option >Dhaka University</option>
					                  <option >Bangladesh Secretariat</option>
					                  <option >Motijheel</option>
					                  <option >Kamalapur</option>
					                </select>
					            </div>

					            <div class="input-group">
					              <label><h2>No. of Tickets *</h2></label>
					                <select name="number" class=" " required>
					                  <option value selected ></option>
					                  <option >1</option>
					                  <option >2</option>
					                   <option >3</option>
					                    <option >4</option>
					                </select>
					            </div>

					            <div class="input-group">
              								  <label><h2>Mobile Number</h2></label>
                							  <input name="mobile" pattern="[0-9]+" class="  " required="required" autocomplete="off">
            								</div>

											<div class="input-group">
              								  <label><h2>Reservation Date</h2></label>
                							  <input name="reservation" type ="date" class=" ">
            								</div>
								<div class="input-group">
								   
									<input type="submit" name="submit" class="btn">
								 
									
								</div>
							</form>
</body>
<a href="header.php" style="margin-left: 61%;" > Home </a>
</html>


