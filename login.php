<?php
session_start();

/*if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: main.php");
    exit;
}*/
require('db.php');
$incorrect = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){

//if (isset($_POST['username'])){
	$username = $_POST['roll'];
	$password = $_POST['pass'];

    $query = "SELECT * FROM users WHERE roll=$username and pass='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	$row = mysqli_fetch_row($result);
        if($rows >= 1){
        $_SESSION['loggedin']=true;
	    $_SESSION['roll'] = $username;
	    $_SESSION['name'] = $row[1];
	    header("location: main.php");
         }else{
	$incorrect = "Roll.No / Password is incorrect";
	}
    //}

  }
?>




<!DOCTYPE html>
<head>
<meta charset="UTF-8">
	<title>GP Calc Home</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Molengo' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style_GP.css">
</head>
<body>

<div id="loading"></div>
	<div class="container-fluid">
		<div class="row text-center  justify-content-center" >
			<div class="col jumbotron w-100 text-center">
			<h1 class="display-4 head">GP Calculator</h1>
			<p class="lead">Login To Know Your GP</p>
			</div>
		</div>


	<form class="login" action="login.php" method="post" name="login">
    <div class="row  mx-auto mt-1 main">
			<div class="col-md-12 my-col">
				<div class="form-group">
					<label for="mailid">Roll No.</label>
					<input type="text" class="form-control " name="roll" id="mailid" required  />
					
				</div>
			</div>
			<div class="col-md-12 my-col">
				<div class="form-group">
					<label for="pw">Password</label>
					<input type="password" placeholder="eg. uytghj!@12" class="form-control " name="pass" id="pw" required />
					<span><?php echo $incorrect; ?></span>
					
				</div>
			</div>

			<div class="col-md-12 my-col mt-5 ">
				<div class="form-group">
					<input class="btn btn-success float-left" role="button" type="reset" value="Reset">
					<input type="submit" class="btn btn-success float-right" value="Login" name="submit">
					<a class="btn btn-success float-right" style="margin-right: 1rem" href="registration.php">Sign up</a>
				</div>

			</div>
		</div>
  </form>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function() {
    jQuery('#loading').fadeOut(1000,'swing');
});
</script>
</body>
</html>