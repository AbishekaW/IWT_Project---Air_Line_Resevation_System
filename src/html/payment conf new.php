<?php
session_start();

include 'config.php';

$bid = $_SESSION['bid'];
$cname = $_SESSION['cname'];

$sql = "SELECT * FROM booking WHERE bID = '$bid' ";
$result = $connection ->query($sql);
$row = mysqli_fetch_assoc($result);
  $bID = $row["bID"];
  $dDate = $row["dDate"];
  $dLoc = $row["dLoc"];
  $aLoc = $row["aLoc"];
  $class = $row["class"];
  $tickets = $row["noOfTickets"];
  $rooms = $row["noOfRooms"];
  $vehicle = $row["vType"];
  
  if(isset($_POST["submit"]))
  {
     echo "<script>alert('Payment and Booking Confirmed')</script>";
	 header("location:Home page.html");
  }

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galaxy AirWays</title>
<!-- custom css file link  -->
<link rel="stylesheet" href="../styles/header and footer.css">
</head>

<body>
  
    <!--header-->
  <section class="sub-header">
    <nav>
       <a href="Home page.html"><img src="../images/logo.png"></a>
       <!-- nav bar -->
       <div class="nav-links" >
		    <ul>
			    <li><a href="Home page.html">HOME</a></li>
				<li><a href="booking1.php">BOOKINGS</a></li>
				<li><a href="about us.html">ABOUT US</a></li>
				<li><a href="Contact us.php">CONTACT US</a></li>
				<li><a href="my help page.php">HELP</a></li>
				<li><a href="feedback.php">GIVE FEEDBACK</a></li>
				<li><a href="user profile.php">USER PROFILE</a></li>
				<li><a href="Sign up page.php">SIGN UP</a></li>
				<li><a href="">LOGIN</a></li>
			</ul>	
       </div>		
    </nav>
    <h1>PAYMENT CONFIRMATION</h1>
    </section>
    </section>


<body>
<link rel="stylesheet" href="../styles/payment con new.css">
<div class="cont">
</br> </br>

<!--
Customer Address
<input name="c_addr" class="address" readonly>
Telephone Number
<input name="t_no" class="number" readonly>-->
<!--
Return Date
<input name="r_date" class="rdate" readonly>-->
<!--
Total Trip Cost
<input type="text" name="total" readonly>-->	  

<?php

 echo '<form action="" method="post">
            <div class="cont2">
                Customer Name
                <input name="c_name" class="name" value='.$cname.' readonly>
	            Departure Date
	            <input name="dep_date" class="date" value='.$dDate.' readonly>
	            Ticket class
	            <input name="T_type" class="Ticket" value='.$class.' readonly>
	            No of Tickets
                <input type="text" name="ticket" value='.$tickets.' readonly>
	            No of Rooms
	            <input type="text" name="rooms" value='.$rooms.' readonly>
	            Transportation type
	            <input type="text" name="transport" value='.$vehicle.' readonly>
	  
	  
	            <input type="submit" name="submit" value="CONFIRM" class="Btn">
                <button type="buttton" class="Btn"> <a href="payment.php" > BACK </a> </button>
       </form>';
?>

    </div> </div>
</body>
</html>

<!-- footer -->
   
<section class="footer">
     <h4><a href="privacy policy.html"> Privacy policy </a> | <a href="services.html">Our Services</a><h4>
	 <p> +446475887 | +4420718389 | +612123457869 | +9474055342 | <a href="map.html">Where We fly</a> | <a href="">Terms and Conditions</a> | <a href="galaxy gallery.html">Gallery</a></p>
	 <div class="icons">
        <img src="../images/facebook.png">
		<img src="../images/twitter.png">
		<img src="../images/instagram.png">
	 </div>
	 <p>copyright all rights reserved</p>
  </section>   
</body>