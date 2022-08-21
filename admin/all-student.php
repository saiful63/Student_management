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

 <h1 class="text-primary">All Students <small> Overview</small></h1>


<div class="row">


    <?php  require_once'root.php';?>
            



        

           
       
    


   

                








                

            </div>



                <h3>New Students</h3>

                <div class="table-responsive">
    <table id="data" class="table table-hover table-bordered table-Striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Class</th>
                <th>City</th>
                <th>Contact</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            

            $db_sinfo=mysqli_query($link,"SELECT * FROM `student_info`");
      
        while($row=mysqli_fetch_assoc($db_sinfo)){?>


            <tr>
                <td><?php echo $row['id'];?></td>

                <td><?php echo ucwords($row['name']);?></td>

                <td><?php echo $row['roll'];?></td>

                <td><?php echo $row['class'];?></td>

                <td><?php echo ucwords($row['city']);?></td>

                <td><?php echo $row['pcontact'];?></td>
                
                <td><img style="width: 100px"src="student_images/<?php echo $row['photo'];?>" alt=""></td>

                <td>
                    <a href="update_student.php?id=<?php echo base64_encode($row['id']);?>" class="btn btn-xs btn-warning">Edit</a>
                    &nbsp; &nbsp; &nbsp;
                    <a href="delete_student.php?id=<?php echo base64_encode($row['id']);?>" class="btn btn-xs btn-danger">Delete</a>
                </td>
            </tr>
<?php
     
            }

            ?>
            
        </tbody>
    </table>
</div>
</body>
</html>