<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for registration
if(isset($_POST['submit']))
{
$date=$_POST['date'];

$mill=$_POST['mill'];
$email=$_POST["email"];


$query="insert into  dining(date,mill,email) values('$date','$mill','$email')";

$stmt = $mysqli->query($query);
echo"<script>alert('Mill update Succssfully');</script>";
}


?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<title>Users Hostel Registration</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Dining</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
								<div class="panel-body">
									<form method="post" action="" class="form-horizontal">
						
<div class="form-group">
<label class="col-sm-4 control-label"><h4 style="color: green" align="left">Dining Related info </h4> </label>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Date </label>
<div class="col-sm-8">
<select name="date" id="date"class="form-control"  onChange="getSeater(this.value);" onBlur="checkAvailability()" required> 
		<option value="">Select Date</option>
		<option value="01">01</option>
		<option value="02">02</option>
		<option value="03">03</option>
		<option value="04">04</option>
		<option value="05">05</option>
		<option value="06">06</option>
		<option value="07">07</option>
		<option value="08">08</option>
		<option value="09">09</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12 </option>
		<option value="13">13 </option>
		<option value="14">14 </option>
		<option value="15">15 </option>
		<option value="16">16 </option>
		<option value="17">17 </option>
		<option value="18">18 </option>
		<option value="19">19 </option>
		<option value="20">20 </option>
		<option value="21">21 </option>
		<option value="22">22 </option>
		<option value="23">23 </option>
		<option value="24">24 </option>
		<option value="25">25 </option>
		<option value="26">26 </option>
		<option value="27">27 </option>
		<option value="28">28 </option>
		<option value="29">29 </option>
		<option value="30">30 </option>
		<option value="31">31 </option>


		</select> 
<span id="room-availability-status" style="font-size:12px;"></span>

</div>
</div>
											
<div class="form-group">
<label class="col-sm-2 control-label">Mill</label>
<div class="col-sm-8">
<input type="test" name="mill" id="mill"  class="form-control" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Email</label>
<div class="col-sm-8">
<input type="text" name="email" id="email"  class="form-control"  >
</div>
</div>

<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="submit" class="btn btn-primary">
</div>
</form>

									</div>
									</div>
								</div>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div> 	
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>

</html>