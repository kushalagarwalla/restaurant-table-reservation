<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
<link rel="stylesheet" href="CSS/bookingConfirmation.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Bello Pizza</title>

	<!--  -->

	<style>

	</style>

</head>

<body>
   <nav class="navbar navbar-default">
   <div class="container">
   
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><img src="Images/logo.png" height= "35px" width="55px"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="About%20Us.html">About us</a></li>
        <li><a href="contact%20us.html">Contact us</a></li>
        
        
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Menu</a></li>
       
        
      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="Booking.html">Book a Table!</a></li>
       
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div>
</nav>
    <div class="container center">
        <div class="row">
            <div class="col-md-12">
  
                    </a>
            </div>
        </div>
    </div>

    
    </div>
 <?php
include 'database.php';
$a=$_POST["fname"];
$b=$_POST["email"];
$c=$_POST["phone"];
$d=$_POST["date"];
$sql="INSERT INTO information (Name,email,phone,date) VALUES ('$a','$b','$c','$d')";
$query=mysqli_query($conn,$sql);
$conn->close();
?>
<h1>Your Reservation  
<?php
    echo "for ";
    echo $_POST["date"];
    ?>
 is done!
 <br>
 </h1>
<div class="php">
<h3>
<?php
echo "Confirmation has been sent to ";
    echo $_POST["email"];

?>
<br>
<?php
echo "Name: ";
echo $_POST["fname"];
    echo " ";
echo $_POST["lname"];
?>
   <br>
   <?php
    echo "Contact number: ";
    echo $_POST["phone"];
    ?>
    </h3>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
