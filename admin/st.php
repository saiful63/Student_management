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
            
            
        </tbody>
    </table>
</div>
</body>
</html>