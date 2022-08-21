














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

<h1 class="text-primary">Add Student <small>Add New Student</small></h1>

 			<ol class="breadcrumb">
 				<li><a href="index.php?page=dashboard">Dashboard</a></li>
                || 
              <li class="active">Add Student</li>
 			</ol> 



<div class="row">


<?php
 require_once'./root.php';

    ?>

	<div class="col-sm-6">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">

			<label for="name">Student Name</label>

			<input type="text" name="name" placeholder="Student Name" id="name" class="form-control" required="">

			</div>




			<div class="form-group">

			<label for="roll">Student Roll</label>

			<input type="text" name="roll" placeholder="Roll" id="roll" class="form-control" pattern="[0-9]{6}"required="">

			</div>



			<div class="form-group">

			<label for="city">City</label>

			<input type="text" name="city" placeholder="City" id="city" class="form-control"  required="">

			</div>


			<div class="form-group">

			<label for="pcontact">PContact</label>

			<input type="text" name="pcontact" placeholder="01*******" id="pcontact" class="form-control"pattern="01[1|5|6|7|8|9][0-9]{8}"  required="">

			</div>


			<div class="form-group">

			<label for="class">Class</label>

			<select id="class" class="form-control"name="class"  required="">
				<option value="">Select</option>


				<option value="1st">1st</option>

				<option value="2nd">2nd</option>

				<option value="3rd">3rd</option>

				<option value="4th">4th</option>


				<option value="5th">5th</option>
			</select>

			</div> 


			<div class="form-group">
				<label for="picture">Picture</label>

				<input type="file" name="picture"id="picture"  required="">
			</div>
     

       <div class="form-group">
       	<input type="submit" name="add-student" value="Add Student" class="btn btn-primary">
       </div>

		</form>


		<?php

if(isset($_POST['add-student'])){
	$name=$_POST['name'];
	$roll=$_POST['roll'];
	$city=$_POST['city'];
	$pcontact=$_POST['pcontact'];
	



	$picture=explode('.',$_FILES['picture']['name']);
	$picture_ex=end($picture);

	  $picture_name=$roll.'.'.$picture_ex;

$class=$_POST['class'];

 $query="INSERT INTO `student_info` ( `name`, `roll`, `class`, `city`, `pcontact`, `photo`) VALUES ( '$name', '$roll', '$class', '$city', '$pcontact', '$picture_name');";

$result=mysqli_query($link,$query);

if($result){

	echo"<script>alert('Data Interted')</script>";
	move_uploaded_file($_FILES['picture']['tmp_name'],'student_images/'.$picture_name);
	
}else{
	echo"Data Not Inserted.";
}


}

 ?>
	</div>
</div>
</body>
</html>