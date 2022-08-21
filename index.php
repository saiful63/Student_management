<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE-edge">

	<meta name="viewport" content="width=device-width">

	

	<title>Home</title>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<style type="text/css">
		
		.row {
    
    display: flex;
   
    flex-wrap: wrap;
   margin: 0;
    
}
	</style>
</head>
<body>

<div class="container">
	<br>
	<a href="admin/login.php" class="btn btn-primary pull-right">Login</a>

	<br>
	<br>

	<h1 class="text-center">Welcome to Students Management System</h1>
	<br>
	<br>
<div class="row">
	<div class="col-sm-5" style="margin-left: 400px;">
	<form action=""method="post">
		<table class="table table-bordered">
			<tr>
				<td class="text-center"colspan="2"><label>Student Information</label></td>
			</tr>

			<tr>
				<td class="">
					<label for="choose">
						Choose Class
					</label>
				</td>

				<td>
					<select class="form-control" id="choose" name="choose">
						<option value="">
							Select
						</option>

						<option value="1st">
							1st
						</option>

						<option value="2nd">
							2nd
						</option>


						<option value="3rd">
							3rd
						</option>

						<option value="4th">
							4th
						</option>

							<option value="5th">
							5th
						</option>					
					</select>
				</td>
			</tr>

			<tr>
				<td>
					<label for="roll">
					Roll
				</label>
			</td>
				<td>
					<input type="text" class="form-control" name="roll"pattern="[0-9]{6}"placeholder="Roll">
				</td>
			</tr>

			<tr>
				<td colspan="2" class="text-center"><input type="submit" class="btn btn-secondary" value="Show Info" name="show_info"></td>
			</tr>
		</table>
	</form>
</div>
</div>


<?php

require_once'./admin/dbcon.php';

if(isset($_POST['show_info'])){
     
     $choose=$_POST['choose'];
     $roll=$_POST['roll'];

     $result=mysqli_query($link,"SELECT * FROM `student_info` WHERE `class`='$choose' and `roll`='$roll'");

     if(mysqli_num_rows($result)==1){
     	 $row=mysqli_fetch_assoc($result);

     	?>


<div class="row">
	
		
			<div class="col-sm-8"style="margin-left: 200px;">
		 

		<table class="table table-bordered">
			<tr>
				<td rowspan="4">
					
					<img src="admin/student_images/<?= $row['photo'];?>" class="img-thumbnail" style="width:200px;height: 150px;"alt="">
				</td>
				<td>Name</td>
				<td><?=ucwords($row['name']) ;?></td>
			</tr>

			<tr>
				
				<td>Roll</td>
				<td><?= $row['roll'];?></td>
			</tr>

			<tr>
				
				<td>class</td>
				<td><?= $row['class'];?></td>
			</tr>

			<tr>
				
				<td>city</td>
				<td><?=ucwords($row['city']) ;?></td>
			</tr>


			

		</table>
	</div>

		
		
</div>
     	<?php
     }
     else{
     	?>

  <script type="text/javascript">
  	
  	alert('Data Not Found');
  </script>

     	<?php
     }
	
}

?>














<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>