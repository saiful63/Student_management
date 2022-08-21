
<?php
session_start();
require_once'./dbcon.php';

if(!isset($_SESSION['user_login'])){
	header('location:login.php');
}
?>










<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE-edge">

	<meta name="viewport" content="width=device-width">

	

	<title>SMS</title>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap4.min.css">

<style type="text/css">
	
	
   .content{
   	  min-height: 550px;
   }

	.footer-area{
		background:#3CA9E8;
		text-align: center;
		padding: 20px 0;
		color: #fff;
	}

	.footer-area p{
		margin: 0;
	}
</style>


<script type="text/javascript"src="../js/jquery-3.3.1.js">
	
</script>
	
</script>

<script type="text/javascript"src="../js/jquery.dataTables.min.js">
	
</script>

<script type="text/javascript" src="../js/dataTables.bootstrap4.min.js">
	
</script>

<script type="text/javascript"src="../js/script.js">
	
</script>
	</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">SMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Welcome:Saiful Islam <span class="sr-only">(current)</span></a>
      </li>


      

      <li class="nav-item">
        <a class="nav-link" href="registration.php">Add User <span class="sr-only">(current)</span></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="user-profile.php">Profile <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
      </li>
      
      

     
      
    </ul>
    
  </div>
</nav>
<br>
 <div style="min-height: 550px"class="container-fluid">
 	<div class="row">
    
 		<div class="col-sm-3">
 			<div class="list-group">
 		<a href="dashboard.php" class="list-group-item active">
 			Dashboard
 		</a>

        <a href="add-student.php" class="list-group-item">
 			Add Student
 		</a>

       <a href="all-student.php" class="list-group-item">
 			All Students
 		</a>


 		<a href="all-users.php" class="list-group-item">
 			All Users
 		</a>

 			</div>
 		</div>

 		<div class="col-sm-9">
         
 		</div>
 	</div>


 	


</div>




 






 </div>

 <footer class="footer-area">
 	<p>Copyright &copy; 2020 Students Management System ,All Right Are Reserved.</p>
 </footer>

</body>



<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>