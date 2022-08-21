<?php

require_once'./dbcon.php';
 session_start();

if(isset($_SESSION['user_login'])){
	header('location:index.php');
}


 if(isset($_POST['login'])){
 	$username=$_POST['username'];
 	$password=$_POST['password'];

 	$username_check=mysqli_query($link,"SELECT * FROM `users` WHERE `username`='$username'");
 	if(mysqli_num_rows($username_check)>0){
 		$row=mysqli_fetch_assoc($username_check);

 		if($row['password']== md5($password)){
 			
                    if($row['status']=='active'){

                   $_SESSION['user_login']=$username;

                   header('location:index.php');
                    }

                 else{
                 	$status_inactive="Your Status inactive";
                 }

 			 		}else{
 			$wrong_password="This password is not found";
 		}
 	}else{
 		$username_not_found="This username is not found";
 	}
 }

?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE-edge">

	<meta name="viewport" content="width=device-width">

	

	<title>Home</title>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

	<style type="text/css">
		
		
	</style>
</head>
<body>

<div class="container">
	<br>
	

	<br>
	<br>

	<h1 class="text-center">Welcome to Students Management System</h1>
	<br>
	
<div class="row">
	<div class="col-sm-5" style="margin-left: 400px;">
	<form action=""method="post">

		<table class="table table-bordered">
			
		
		 

        <h2 class="text-center">
        	Admin Login Form
        </h2>

			

				<div col-sm-4>
		<input type="text" placeholder="Username"required="" class="form-control" name="username" value="<?php if(isset($username)){echo $username ;} ?>" >		
			</div>
 
     <div col-sm-4>
		<input type="password" placeholder="Password"required="" class="form-control" name="password" value="<?php if(isset($password)){echo $password ;} ?>">		
			</div>
			<br> 

     <div>
     	<input type="submit" name="login" value="Login" class="btn btn-info">
     </div>

		
		
		</table>
	</form>
</div>
</div>

<br>
<center style="margin-left: 110px">

	<?php  if(isset($username_not_found)){echo '<div class="alert alert-danger col-sm-6">'.$username_not_found.'</div>';}?>

</center>


<center style="margin-left: 110px">

	<?php  if(isset($wrong_password)){echo '<div class="alert alert-danger col-sm-6">'.$wrong_password.'</div>';}?>

</center>



<center style="margin-left: 110px">

	<?php  if(isset($status_inactive)){echo '<div class="alert alert-danger col-sm-6">'.$status_inactive.'</div>';}?>

</center>


</div>

<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>