<!DOCTYPE html>
<html>
        <head>
                <title>Display data</title>
        </head>
        <body>
                <form action="" method="POST">
                <table>
                        <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                        </tr>
                        <?php
                                $con=mysqli_connect('localhost','root','','buet');
                                $result=mysqli_query($con,"select * from cse");
                                while($row=mysqli_fetch_assoc($result)):


                        ?>
                        <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['fname']; ?></td>
                                <td><?php echo $row['lname']; ?></td>
                                <td><a href="delete.php?deleteid=<?php echo $row['id']; ?>">Delete</a></td>
                                <td><a href="update.php?updateid=<?php echo $row['id']; ?>">Update</a></td>
                        </tr>
                        <?php endwhile; ?>
                </table>

                </form>
                
        </body>
</html>