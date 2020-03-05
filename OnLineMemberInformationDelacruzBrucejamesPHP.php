<!DOCTYPE html>
<html>
<head>
	<title>Machine Problem | PHP</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</head>
<style>
	hr {
		height: 1px;
		background-color: green;
	}
	h1 {
		color: green;
	}
	.input-group {
		padding-top: 10px;
	}
</style>
<body>

<?php
	
	//middlename
	$uppercaseMiddle = substr($_POST['middlename'], 0, 1);

	//date of birth
	$originalDate = $_POST['dateofbirth'];
	$date 		  = str_replace('/', '-', $originalDate);
	$newDate	  = date("Y-m-d", strtotime($_POST['dateofbirth']));

	//contact number
	$inputContactNumber = $_POST['contactnumber'];
	$insert = "-";
	$index = 4;
	$resultContactNumber = substr_replace($inputContactNumber, $insert, $index, 0);

	$inputPhoneNumber = $_POST['phonenumber'];
	$insert = "-";
	$index = 3;
	$resultPhoneNumber = substr_replace($inputPhoneNumber, $insert, $index, 0);
	

	

?>

	<div>
		<div class="container-fluid">
			<div class="form-row">
				<div class="col-sm-12">

					<center>
						<h1>RICHARD GWAPO COOPERATIVE INCORPORATED</h1>
						<b><p>Forever Gwapo St., Mandaluyong City</p>
						<p>Telephone #: 143-4456</p></b>
					</center>

					<hr>

				</div>

				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					
					<center><h2><b>Member Information</b></h2></center>

					<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Full Name:</span>
							</div>
							<input class="form-control" type="text" name="lastname" value="<?php echo $_POST['lastname']; ?>" readonly>
							<input class="form-control" type="text" name="firstname" value="<?php echo $_POST['firstname']; ?>" readonly>
							<input class="form-control" type="text" name="middlename" value="<?php echo strtoupper($uppercaseMiddle . "."); ?>" readonly>
					</div>

					<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Address:</span>
							</div>
							<input class="form-control" type="text" name="address" value="<?php echo $_POST['address']; ?>"readonly>
					</div>

					<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Contact Number:</span>
							</div>
							<input class="form-control" type="text" name="contactnumber" value="<?php echo $resultContactNumber; ?>"readonly>
					</div>

					<div class="input-group date">
							<div class="input-group-prepend">
								<span class="input-group-text">Date of Birth:</span>
							</div>
							<input class="form-control" type="text" name="dateofbirth" value="<?php echo $newDate; ?>" readonly>
					</div>

					<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Gender:</span>
							</div>
							<input class="form-control" type="text" name="gender" value="<?php echo $_POST['radio']; ?>" readonly>
					</div>

					<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Office Address:</span>
							</div>
							<input class="form-control" type="text" name="officeaddress" value="<?php echo $_POST['officeaddress']; ?>" readonly>
					</div>

					<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Phone Number:</span>
							</div>
							<input class="form-control" type="tel" name="phonenumber" value="<?php echo $resultPhoneNumber; ?>" readonly>
					</div>

					<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Position:</span>
							</div>
							<input class="form-control" type="text" name="position" value="<?php echo $_POST['position']; ?>" readonly>
					</div>

					<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Employment Status:</span>
							</div>
							<input class="form-control" type="text" name="employmentstatus" value="<?php echo $_POST['employmentstatus']; ?>" readonly>
					</div>

					<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Monthly Salary:</span>
							</div>
							<input class="form-control" type="text" name="monthlysalary" value="<?php echo $_POST['monthlysalary']; ?>" readonly>
					</div>

					<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Co-Borrower:</span>
							</div>
							<input class="form-control" type="text" name="coborrower" value="<?php echo $_POST['coborrower']; ?>" readonly>
					</div>

					<br>

					<center>
						<p><a href="OnLineCooperativeRegistrationDelacruzBrucejames.php">Back to Form</a></p>

					</center>

				</div>
				<div class="col-sm-3"></div>
				
			</div>
		</div>
	</div>

<script>
	$(document).ready(function(){

	});
</script>


</body>
</html>