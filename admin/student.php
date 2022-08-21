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

     
            

            ?>