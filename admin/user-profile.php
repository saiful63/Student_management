<?php
session_start();
require_once'./dbcon.php';
?>



<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap4.min.css">




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
<body>
<?php    require_once'nav.php';?>

 <h1 class="text-primary">User Profile <small>My User</small></h1>

<br><br>

<?php


 $session_user=$_SESSION['user_login'];

 $user_data=mysqli_query($link,"SELECT * FROM `users` WHERE `username`='$session_user'");

 $user_row=mysqli_fetch_assoc($user_data);


?>
<div class="row">
<?php  require_once'root.php';?>

  <div class="col-sm-6">
      <table class="table table-bordered">
          <tr>
              <td>User Id</td>
              <td><?= $user_row['id'];?></td>
          </tr>


          <tr>
              <td>Username</td>
              <td><?= ucwords($user_row['username']);?></td>
          </tr>

          <tr> 
              <td>Email</td>
              <td><?= $user_row['email'];?></td>
          </tr>


          <tr>
              <td>Status</td>
              <td><?= ucwords($user_row['status']);?></td>
          </tr>

          <tr>
              <td>Signup Date</td>
              <td><?= $user_row['datetime'];?></td>
          </tr>

          
      </table>

      <a href="" class="btn btn-sm btn-info">Edit Profile</a>
  </div>
            

<div class="col-sm-3">
    <a href="">
        <img class="img-thumbnail"src="images/<?= $user_row['photo']?>">
    </a>
<br>
<br>

<?php
if(isset($_POST['upload'])){

  $photo=explode('.',$_FILES['photo']['name']);
 $photo=end($photo);

 $photo_name=$session_user.'.'.$photo;

 $me=mysqli_query($link,"UPDATE `users` SET `photo`='$photo_name' WHERE `username`='$session_user'");

 if($me){
  move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo_name);
 }
 else{
  echo"No";
 }
}


?>
    <form action="" enctype="multipart/form-data" method="post">
      <label for="photo">Profile</label>
  <br>
      <input type="file" name="photo"id="photo" required="">
<br><br>
      <input type="submit" name="upload" value="Upload" class="btn btn-sm btn-info">
    </form>
</div>

</div>
</body>
</html>