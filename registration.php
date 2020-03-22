<?php
require('db.php');
$username = $password = $confirm_password = $flag=  "";
$username_err = $password_err = $confirm_password_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
//if(isset($_POST['roll']))
//{    
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    
    $email = $_POST['email'];
    //$password = $_POST['password'];
    //$confirm_password = $_POST['rpassword'];
    
    if(strlen(trim($_POST["password"])) < 8){
        $password_err = "Password must have atleast 8 characters.";
        
    } else{
        $password = trim($_POST["password"]);
        
    }

    if(trim($_POST['password']) != trim($_POST['rpassword']))
    {
        $confirm_password_err = "passwords do not match";
        
    }
    else{
        $confirm_password = trim($_POST["rpassword"]);
        
    }

if(empty($password_err) && empty($confirm_password_err) && empty($username_err)){

    //$trn_date = date("d-m-y h:i:s");
        $query = "INSERT into `users` (roll,name,email,pass,trn_date)
VALUES ('$roll','$name', '$email','".md5($password)."',now())";
        $result = mysqli_query($con,$query);
        if($result){
            header("location: login.php");
        }
    else{
    echo "Something went wrong. Please try again later.";

  }
}
 echo "$flag";

}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
    <title>GP Calc Signup</title>
    <link href='https://fonts.googleapis.com/css?family=Molengo' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style_GP.css">
</head>
<body>
<div >
    <div class="container-fluid" >
        <div class="row text-center justify-content-center" >
            <div class="col my-col  jumbotron text-center">
            <h1 class="display-4 head">GP Calculator</h1>
            <p class="lead">Login To Know Your GP</p>
            </div>

            
        </div>  

        <form id="myform" class="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="row  mx-auto main"  >
            <div class="col-md-12 my-col">
                <div class="form-row ">
                    <div class="col-md-6 form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control "placeholder="" name="name" id="name" required />
                        <small class=></small>
                    </div>
                  
                <div class="col-md-6 form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label for="roll">Roll No.</label>
                    <input type="text" class="form-control " name="roll" id="roll" value="<?php echo $username; ?>" required />
                    
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>
            </div>
                </div>
            
            
            <div class="col-md-12">
                <div class="form-group">
                    <label for="mailid">Email ID</label>
                    <input type="email" class="form-control " name="email" placeholder="name@gmail.com"id="mailid" required />
                    <small class=>We will never share your Email ID with anyone else</small>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label for="pw">Password</label>
                    <input type="password" class="form-control " placeholder="Password must be atleast 8 characters"name="password" id="pw" value="<?php echo $password; ?>"required />
                    
                    <span class="help-block" ><?php echo $password_err; ?></span>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                    <label for="rpw">Confirm Password</label>
                    <input type="password" class="form-control " name="rpassword" id="rpw" placeholder="Retype your password"required value="<?php echo $confirm_password; ?>" />
                    
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>
            </div>

            <div class="col-md-12 mb-5">
                <div class="form-group">
                    <input class="btn btn-success float-left" role="button" type="reset" value="Reset">
                    <input class="btn btn-success float-right"  type="submit" value="Sign up">
                </div>
            </div>

</div>
   
</div>
            <div class="col-md-12 text-center">
                <h6>Back to   <a href="login.php" class="btn  btn-outline-warning display-4" style="font-weight: bold">Login</a>    page</h6>
            </div>
        </div>
        </form>
    </div>
    </div>
   
    <script>
//document ready
       
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>