<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
	<title>GP Calculator</title>
	<link href='https://fonts.googleapis.com/css?family=Molengo' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style_GP.css">
</head>
<body>




<div id="loading2"></div>
	<div class="container-fluid">
		
		<!--NAVBAR-->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>
  <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<!--NAV-->
		<div class="row text-center justify-content-center my-row h-10" >
			<div class="col-md-12 my-col  jumbotron text-center">
			<h1 class="display-4 head">GP Calculator</h1>

			<h2>Welcome <?php echo $_SESSION['name']; ?></h2>
			</div>
		</div>	

		<div class="row justify-content-center drop my-auto mx-auto">
			<div class="col-md-4 ">
				<div class="form-group">
					<label for="maths">Maths</label>
					<select name="Maths" id="maths" class="form-control">
						<option value="10">O</option>
						<option value="9">A+</option>
						<option value="8">A</option>
						<option value="7">B+</option>
						<option value="6">B</option>
						<option value="0">RA</option>
					</select>
				</div>

				<div class="form-group">
					<label for="dld">DLD</label>
					<select name="DLD" id="dld" class="form-control">
						<option value="10">O</option>
						<option value="9">A+</option>
						<option value="8">A</option>
						<option value="7">B+</option>
						<option value="6">B</option>
						<option value="0">RA</option>
					</select>
				</div>

				<div class="form-group">
					<label for="ece">ECE</label>
					<select name="ECE" id="ece" class="form-control">
						<option value="10">O</option>
						<option value="9">A+</option>
						<option value="8">A</option>
						<option value="7">B+</option>
						<option value="6">B</option>
						<option value="0">RA</option>
					</select>
				</div>

				<div class="form-group">
					<label for="mpmc">MPMC</label>
					<select name="MPMC" id="mpmc" class="form-control">
						<option value="10">O</option>
						<option value="9">A+</option>
						<option value="8">A</option>
						<option value="7">B+</option>
						<option value="6">B</option>
						<option value="0">RA</option>
					</select>
				</div>	
			</div>

			<div class="col-md-4">
				<div class="form-group">
					<label for="dsa">DSA</label>
					<select name="DSA" id="dsa" class="form-control">
						<option value="10">O</option>
						<option value="9">A+</option>
						<option value="8">A</option>
						<option value="7">B+</option>
						<option value="6">B</option>
						<option value="0">RA</option>
					</select>
				</div>

				<div class="form-group">
					<label for="oops">OOPS</label>
					<select name="OOPS" id="oops" class="form-control">
						<option value="10">O</option>
						<option value="9">A+</option>
						<option value="8">A</option>
						<option value="7">B+</option>
						<option value="6">B</option>
						<option value="0">RA</option>
					</select>
				</div>

				<div class="form-group">
					<label for="dldlab">DLD LABORATORY</label>
					<select name="DLD LAB" id="dldlab" class="form-control">
						<option value="10">O</option>
						<option value="9">A+</option>
						<option value="8">A</option>
						<option value="7">B+</option>
						<option value="6">B</option>
						<option value="0">RA</option>
					</select>
				</div>

				<div class="form-group">
					<label for="dsalab">DSA LABORATORY</label>
					<select name="DSA LAB" id="dsalab" class="form-control">
						<option value="10">O</option>
						<option value="9">A+</option>
						<option value="8">A</option>
						<option value="7">B+</option>
						<option value="6">B</option>
						<option value="0">RA</option>
					</select>
				</div>	
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-8 text-center">
				<input type="submit" class="btn btn-secondary m-5" id="sub" onclick="oc()" value="Submit">
			</div>
		</div>
		<div class="row mt-5 text-center justify-content-center mb-5">
			<div class="col-md-4">
				<p>Total Grade Points:</p>
				<span id="Total" class="form-control mx-auto">0</span>
				
			</div>
			<div class="col-md-4">
				<button class="btn btn-dark  mt-5" id="style" onclick="show()" style="font-size: 20px"><i class="fa fa-calculator"></i>&nbsp;&nbsp;Calculate GPA</button>
			</div>
		</div>

		<div class="row w-50 mx-auto justify-content-center mb-5" id="result">
			<div class="col ">
				<p class="text-center "><h1 class="display-4 text-center">Your GPA</h1></p>
				<span id="Final" class="form-control mx-auto pt-4 text-center">8.90</span>
			</div>
		</div>
		

	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="main.js"></script>
	
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>