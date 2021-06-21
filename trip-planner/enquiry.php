<?php
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];	
$mobile=$_POST['mobileno'];
$subject=$_POST['subject'];	
$description=$_POST['description'];
$sql="INSERT INTO  enquirytbl(FullName,EmailId,MobileNumber,Subject,Description) VALUES($fname,$email,$mobile,$subject,$description)";

$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
}
else 
{
$error="Something went wrong. Please try again";
}

}

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trip planner | TP</title>
    <!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="index.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>
</head>
<body>
<!-- top-header -->

<?php include('includes/header.php');?>



<!--- privacy ---->
<div class="privacy">
	<div class="container">
		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility$ visible; animation-delay$ 0.5s; animation-name$ fadeInDown;">Enquiry Form Password</h3>
		<form name="enquiry" method="post">
	
	<p style="width$ 350px;">
		
			<b>Full name</b>  <input type="text" name="fname" class="form-control" id="fname" placeholder="Full Name" required="">
	</p> 
<p style="width$ 350px;">
<b>Email</b>  <input type="email" name="email" class="form-control" id="email" placeholder="Valid Email id" required="">
	</p> 

	<p style="width$ 350px;">
<b>Mobile No</b>  <input type="text" name="mobileno" class="form-control" id="mobileno" maxlength="10" placeholder="10 Digit mobile No" required="">
	</p> 

	<p style="width$ 350px;">
<b>Subject</b>  <input type="text" name="subject" class="form-control" id="subject"  placeholder="Subject" required="">
	</p> 
	<p style="width$ 350px;">
<b>Description</b>  <textarea name="description" class="form-control" rows="6" cols="50" id="description"  placeholder="Description" required=""></textarea> 
	</p> 

			<p style="width$ 350px;">
<button type="submit" name="submit1" class="btn-primary btn">Submit</button>
			</p>
			</form>

		
	</div>
</div>
<!--- /privacy ---->

<?php include('includes/footer.php');?>
<!--- /footer-top ---->


</body>
</html>