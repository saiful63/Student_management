<?php

require_once'./dbcon.php';

session_start();

if(isset($_POST['registration']))
{

 $name=$_POST['name'];
 $email=$_POST['email'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $c_password=$_POST['c_password'];

 $photo=explode('.',$_FILES['photo']['name']);
 $photo=end($photo);

 $photo_name=$username.'.'.$photo;

$input_error=array();
if(empty($name)){
    $input_error['name']="The Name field is required.";
}

if(empty($email)){
    $input_error['email']="The Email field is required.";
}

if(empty($username)){
    $input_error['username']="The Username field is required.";
}

if(empty($password)){
    $input_error['password']="The password field is required.";
}


if(empty($c_password)){
    $input_error['c_password']="The Confirm password field is required.";
}


if(count($input_error)==0){
	$email_chack=mysqli_query($link,"select * from users where email='$email';");
	if(mysqli_num_rows($email_chack)==0){

     $username_chack=mysqli_query($link,"select * from users where username='$username';");
    if(mysqli_num_rows($username_chack)==0){
         
         if(strlen($username)>7){
           

       if(strlen($password)>7){
    

     if($password==$c_password){
          


    $password=md5($password);

     $query="INSERT INTO `users`( `name`, `email`, `username`, `password`, `photo`, `status`) VALUES ('$name','$email','$username','$password','$photo_name','inactive')";
    
     $result=mysqli_query($link,$query);

     if($result){
     	$_SESSION['data_insert_success']="Data Insert Success!";
     	move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo_name);
     	header('location:registration.php');

     }else{
     	$_SESSION['data_insert_error']="Data Insert Error!";
     }

     }else{
       $password_not_match="Confirm Password Not Match!";
     }


       }else{
       	$password_l="Password must be more than 8 character.";
       }

         }else{
         	$username_l="Username must be More Than 8 character. ";
         }


    }else{
    	$username_error="This Username Already Exist";
    }

	}else{
		$email_error="This Email Address Already Exists.";
	}
}

}
?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE-edge">

	<meta name="viewport" content="width=device-width">

	

	<title>User Registration Form</title>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

	<style type="text/css">
		
		.error{
			color: red;
			font-style: italic;
			font-size: 700;
		}
	</style>
</head>
<body>

<div class="container">
	<h1>User Registration Form
	</h1>

	<?php
   if(isset($_SESSION['data_insert_success'])){
   	echo'<div class="alert alert-success">'.$_SESSION['data_insert_success'].'</div>';
   }

   
	?>


	<?php
   if(isset($_SESSION['data_insert_error'])){
   	echo'<div class="alert alert-warning">'.$_SESSION['data_insert_error'].'</div>';
   }
  


	?>
    
	<hr/>

	<div class="row">
		 <div class="col-md-12">
		 <form action=""method="POST" enctype="multipart/form-data" class="form-horizontal">
		 	
		 	<div class="form-group">
		 	<label for="name" class="control-label col-sm-1">Name</label>	
		 	<div class="col-sm-4">
		 		<input type="text"  class="form-control"id="name" name="name" placeholder="Enter your Name"value="<?php if(isset($name)){echo $name;}?>">
		 	</div>
		 		<label class="error">
		 		<?php
                if(isset($input_error['name'])){
                 echo $input_error['name'];
                }
		 		?>	
		 		</label>
		 	</div>


		 	<div class="form-group">
		 	<label for="email" class="control-label col-sm-1">Email</label>	
		 	<div class="col-sm-4">
		 		<input type="text" name="email" class="form-control"id="email"placeholder="Enter your Email"value="<?php if(isset($email)){echo $email;}?>">
		 	</div>
		 		<label class="error">
		 		<?php
                if(isset($input_error['email'])){
                 echo $input_error['email'];
                }
		 		?>	
		 		</label>


		 		<label class="error">
		 		<?php
                if(isset($email_error)){
                 echo $email_error;
                }
		 		?>	
		 		</label>
		 	</div>


		 	<div class="form-group">
		 	<label for="username" class="control-label col-sm-1">Username</label>	
		 	<div class="col-sm-4">
		 		<input type="text"  class="form-control"id="username" name="username" placeholder="Enter your Username"value="<?php if(isset($username)){echo $username;}?>">
		 	</div>
		 		<label class="error">
		 		<?php
                if(isset($input_error['username'])){
                 echo $input_error['username'];
                }
		 		?>	
		 		</label>


		 		<label class="error">
		 		<?php
                if(isset($username_error)){
                 echo $username_error;
                }
		 		?>	
		 		</label>

		 		<label class="error">
		 		<?php
                if(isset($username_l)){
                 echo $username_l;
                }
		 		?>	
		 		</label>
		 	</div>



		 	<div class="form-group">
		 	<label for="password" class="control-label col-sm-1">Password</label>	
		 	<div class="col-sm-4">
		 		<input type="password"  class="form-control"id="password"name="password"placeholder="Enter your Password"value="">
		 	</div>
		 		<label class="error">
		 		<?php
                if(isset($input_error['password'])){
                 echo $input_error['password'];
                }
		 		?>	
		 		</label>



		 		<label class="error">
		 		<?php
                if(isset($password_l)){
                 echo $password_l;
                }
		 		?>	
		 		</label>
		 	</div>



		 	<div class="form-group">
		 	<label for="c_password" class="control-label col-sm-1">Confirm Password</label>	
		 	<div class="col-sm-4">
		 		<input type="password" class="form-control"id="c_password"name="c_password"placeholder="Enter your Confirm Password"value="">
		 	</div>
		 		<label class="error">
		 		<?php
                if(isset($input_error['c_password'])){
                 echo $input_error['c_password'];
                }
		 		?>	
		 		</label>



		 		<label class="error">
		 		<?php
                if(isset($password_not_match)){
                 echo $password_not_match;
                }
		 		?>	
		 		</label>
		 	</div>


		 	<div class="form-group">
		 	<label for="photo" class="control-label col-sm-1">Photo</label>	
		 	<div class="col-sm-4">
		 		<input type="file" class="form-control"id="photo"name="photo">
		 	</div>
		 		
		 	</div>

		 	<div class="col-sm-4">
		 		<input type="submit" name="registration"value="Registration"class="btn btn-primary">
		 	</div>
		 </form>
		 <hr>
          <br>
          <br>

          <p>If you have account?Then please <a href="login.php">login</a></p>
		 </div>
	</div>

	<footer>
		<p>
			Copyright &copy; 2016-<?= date('Y')?> All Right Reserved.
		</p>
	</footer>
</div>

<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>