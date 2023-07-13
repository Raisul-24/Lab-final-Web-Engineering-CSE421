<html>
        <head>
                <title>view</title>
        </head>
        <body>
                <form action="">
                        <center><table border="solid 1px black">
                                <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Roll</th>
                                </tr>
                                <?php
                                $con=mysqli_connect('localhost','root','','cse');
                                $query=mysqli_query($con,"select * from registration");

                                while($row=mysqli_fetch_assoc($query)):
                                ?>
                                <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['roll']; ?></td>
                                        <td><a href="upd.php?updateid=<?php echo $row['id']; ?>">Update</a></td>
                                        <td><a href="del.php?deleteid=<?php echo $row['id']; ?>">Delete</a></td>
                                </tr>

                                <?php endwhile; ?>
                        </table>
                        </center>
                </form>
        </body>
</html>