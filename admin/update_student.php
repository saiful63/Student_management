<?php
 require_once'./dbcon.php';





?>


<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="X-UA-Compatible" content="IE-edge">

	<meta name="viewport" content="width=device-width">
	<title>SMS</title>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<body>

<?php   require_once'./nav.php';?>

<h1 class="text-primary">Update Student <small> Student Upadate</small></h1>

 			<ol class="breadcrumb">
 				<li><a href="dashboard.php">Dashboard</a></li>
             
             &nbsp; &nbsp;
 				<li><a href="all-student.php">All Student</a></li>
                || 
              <li class="active">Update Student</li>
 			</ol> 



<?php

$id=base64_decode($_GET['id']);

$db_data=mysqli_query($link,"SELECT * FROM `student_info` WHERE `id`='$id'");
$db_row=mysqli_fetch_assoc($db_data);




if(isset($_POST['update-student'])){
	$name=$_POST['name'];
	$roll=$_POST['roll'];
	$city=$_POST['city'];
	$pcontact=$_POST['pcontact'];
	




$class=$_POST['class'];


 $query="UPDATE `student_info` SET`name`='$name',`roll`='$roll',`class`='$class',`city`='$city',`pcontact`='$pcontact'WHERE `id`='$id'";
$result=mysqli_query($link,$query);

if($result){
	header('location:all-student.php');
}else{
	echo"error";
}

}
?>

<div class="row">


<?php
 require_once'./root.php';

    ?>

	<div class="col-sm-6">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">

			<label for="name">Student Name</label>

			<input type="text" name="name" placeholder="Student Name" id="name" class="form-control" required="" value="<?= $db_row['name']?>">

			</div>




			<div class="form-group">

			<label for="roll">Student Roll</label>

			<input type="text" name="roll" placeholder="Roll" id="roll" class="form-control" pattern="[0-9]{6}"required=""value="<?= $db_row['roll']?>">

			</div>



			<div class="form-group">

			<label for="city">City</label>

			<input type="text" name="city" placeholder="City" id="city" class="form-control"  required="" value="<?= $db_row['city']?>">

			</div>


			<div class="form-group">

			<label for="pcontact">PContact</label>

			<input type="text" name="pcontact" placeholder="01*******" id="pcontact" class="form-control"pattern="01[1|5|6|7|8|9][0-9]{8}"  required="" value="<?= $db_row['pcontact']?>">

			</div>


			<div class="form-group">

			<label for="class">Class</label>

			<select id="class" class="form-control"name="class"  required="">
				<option value="">Select</option>


				<option <?php 
				 
          echo $db_row['class']=='1st'?'selected=""':'';
				 ?>value="1st">1st</option>

				<option <?php 
				 
          echo $db_row['class']=='2nd'?'selected=""':'';
				 ?> value="2nd">2nd</option>

				<option <?php 
				 
          echo $db_row['class']=='3rd'?'selected=""':'';
				 ?>value="3rd">3rd</option>

				<option <?php 
				 
          echo $db_row['class']=='4th'?'selected=""':'';
				 ?>value="4th">4th</option>


				<option <?php 
				 
          echo $db_row['class']=='5th'?'selected=""':'';
				 ?>value="5th">5th</option>
			</select>

			</div> 


			
     

       <div class="form-group">
       	<input type="submit" name="update-student" value="Update Student" class="btn btn-primary">
       </div>

		</form>

		

</div>
</div>
</body>
</html>