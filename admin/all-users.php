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

 <h1 class="text-primary">All Users <small> Overview</small></h1>


<div class="row">


    <?php  require_once'root.php';?>
            



        

           
       
    


   

                








                

            </div>



                <h3>All Users</h3>

                <div class="table-responsive">
    <table id="data" class="table table-hover table-bordered table-Striped">
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Photo</th>
                
            </tr>
        </thead>

        <tbody>
            <?php
            

            $db_sinfo=mysqli_query($link,"SELECT * FROM `users`");
      
        while($row=mysqli_fetch_assoc($db_sinfo)){?>


            <tr>
               

                <td><?php echo ucwords($row['name']);?></td>

                <td><?php echo $row['email'];?></td>

                <td><?php echo $row['username'];?></td>

                
                
                <td><img style="width: 100px"src="images/<?php echo $row['photo'];?>" alt=""></td>

                
            </tr>
<?php
     
            }

            ?>
            
        </tbody>
    </table>
</div>
</body>
</html>