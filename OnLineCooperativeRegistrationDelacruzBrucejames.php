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

<div>
	<?php

		if(isset($_POST['create'])){
			$lastname =			$_POST['lastname'];				
			$firstname =		$_POST['firstname'];	
			$middlename =		$_POST['middlename'];
			$address =			$_POST['address'];
			$contactnumber =	$_POST['contactnumber'];
			$dateofbirth =		$_POST['dateofbirth'];
			$gender =			$_POST['radio'];
			$officeaddress =	$_POST['officeaddress'];
			$phonenumber =		$_POST['phonenumber'];
			$position =			$_POST['position'];
			$employmentstatus =	$_POST['employmentstatus'];
			$monthlysalary =	$_POST['monthlysalary'];
			$coborrower =		$_POST['coborrower'];
		}



	?>
</div>


<div>
	<form action="OnLineMemberInformationDelacruzBrucejamesPHP.php" method="post">
		<div class="container-fluid">
			<div class="form-row">
				<div class="col-sm-12">
					
					<center>
						<h1>RICHARD GWAPO COOPERATIVE INCORPORATED</h1>
						<b><p>Forever Gwapo St., Mandaluyong City</p>
						<p>Telephone #: 143-4456</p></b>
					</center>

					<hr>

					<h2><b>Registration Form:</b></h2>

					<div class="col-sm-6">
						
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Last Name, First Name, Middle Name:</span>
							</div>
							<input class="form-control" type="text" name="lastname" required placeholder="Last">
							<input class="form-control" type="text" name="firstname" required placeholder="First">
							<input class="form-control" type="text" name="middlename" required placeholder="Middle">
						</div>

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Address:</span>
							</div>
							<input class="form-control" type="text" name="address" required>
						</div>

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Contact Number:</span>
							</div>
							<input class="form-control" type="tel" name="contactnumber" placeholder="ex. 09123456790" required>
						</div>

						<div class="input-group date">
							<div class="input-group-prepend">
								<span class="input-group-text">Date of Birth:</span>
							</div>
							<input class="form-control" type="text" name="dateofbirth" id="dateofbirth" required>
						</div>

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Gender:</span>
							</div>
							
								<div class="form-check-inline pl-3" name="gender">
									<input class="form-check-input" type="radio" name="radio" value="Male">
									<label class="form-check-label">Male</label> &nbsp;
									<input class="form-check-input" type="radio" name="radio" value="Female">
									<label class="form-check-label">Female</label>
								</div>

						</div>

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Office Address:</span>
							</div>
							<input class="form-control" type="text" name="officeaddress" required>
						</div>

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Phone Number:</span>
							</div>
							<input class="form-control" type="tel" name="phonenumber" required>
						</div>

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Position:</span>
							</div>
							<input class="form-control" type="text" name="position" required>
						</div>

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Employment Status:</span>
							</div>
							<select class="form-control" type="text" name="employmentstatus" required>
								<option>Permanent</option>
								<option>Casual</option>
							</select>
						</div>

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Monthly Salary:</span>
							</div>
							<select class="form-control" type="text" name="monthlysalary" required>
								<option>Below Php 10,000.00</option>
								<option>Php 10,000.00 - Php 20,000.00</option>
								<option>Above Php 20,000.00</option>
							</select>
						</div>

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Co-Borrower:</span>
							</div>
							<input class="form-control" type="text" name="coborrower" required>
						</div>

						<center>
							<input class="btn btn-primary mt-3" type="submit" name="create" value="Submit Registration" style="background-color:green;">
							<input class="btn btn-secondary mt-3" type="reset" name="clear" value="Clear Form" style="background-color:red;">				
						</center>

					</div>

				</div>
			</div>
		</div>
	</form>
</div>

<?php
	


?>


<script>
	$(document).ready(function(){
		$('#dateofbirth').datepicker({dateFormat: 'yy-mm-dd'});
	});
</script>

</body>
</html>