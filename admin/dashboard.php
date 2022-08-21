<?php
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


    <h1 class="text-primary">Dashboard <small>Statistics Overview</small></h1>


 
            <ol class="breadcrumb">
                Dashboard
            </ol>

<?php
$count_student=mysqli_query($link,"SELECT * FROM `student_info`");

$total_student=mysqli_num_rows($count_student);

$count_users=mysqli_query($link,"SELECT * FROM `users`");

$total_users=mysqli_num_rows($count_users);


?>

            
<hr/>

<div class="row">


    
 <?php  require_once'root.php';?>
            


       

           
       
    


   

                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
 <div class="col-xs-3"></div>
 <div class="col-xs-9">
    <div class="pull-right" style="font-size: 45px">
        <?= $total_student;?>
    </div>

    <div class="clearfix"></div>
   <a href="">
    <span class="pull-right">All Students</span>
   </a>
    
 </div> 
                            </div>
                        </div>


                
                    </div>
                </div>








                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
 <div class="col-xs-3"></div>
 <div class="col-xs-9">
    <div class="pull-right" style="font-size: 45px">
        <?= $total_users;?>
    </div>

    <div class="clearfix"></div>
   <a href="">
    <span class="pull-right">All Users</span>
   </a>
    
 </div> 




                            </div>
                        </div>


                
                    </div>
                </div>

            </div>



                <h3>New Students</h3>

                <div class="table-responsive">
    <table id="data" class="table table-hover table-bordered table-Striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>City</th>
                <th>Contact</th>
                <th>Photo</th>
            </tr>
        </thead>

        <tbody>
            <?php
            

            $db_sinfo=mysqli_query($link,"SELECT * FROM `student_info`");
      
        while($row=mysqli_fetch_assoc($db_sinfo)){?>


            <tr>
                <td><?php echo $row['id'];?></td>

                <td><?php ucwords($row['name']);?></td>

                <td><?php echo $row['roll'];?></td>

                <td><?php ucwords($row['city']);?></td>

                <td><?php echo $row['pcontact'];?></td>
                
                <td><img style="width: 100px"src="student_images/<?php echo $row['photo'];?>" alt=""></td>
            </tr>

     <?php

        }
            

            ?>
            
        </tbody>
    </table>
</div>
</body>
</html>










