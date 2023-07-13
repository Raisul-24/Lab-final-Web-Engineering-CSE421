<?php


?>
<html>

<head>
        <title>View Data</title>
</head>

<body>
        <table>
                <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Password</th>
                        <th>Gmail</th>
                        <th>CGPA</th>
                        <th>Roll</th>
                </tr>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'diu');
                $query = mysqli_query($con, "select * from cse");
                while ($row = mysqli_fetch_assoc($query)):

                        ?>
                        <tr>
                                <td>
                                        <?php echo $row['id']; ?>
                                </td>
                                <td>
                                        <?php echo $row['firstname']; ?>
                                </td>
                                <td>
                                        <?php echo $row['lastname']; ?>
                                </td>
                                <td>
                                        <?php echo $row['password']; ?>
                                </td>
                                <td>
                                        <?php echo $row['gmail']; ?>
                                </td>
                                <td>
                                        <?php echo $row['cgpa']; ?>
                                </td>
                                <td>
                                        <?php echo $row['roll']; ?>
                                </td>
                                <td><a href="del.php?deleteid=<?php echo $row['id']; ?> ">Delete</a></td>
                                <td><a href="upd.php?updateid=<?php echo $row['id']; ?>">Update</a></td>

                        </tr>
                        <?php endwhile; ?>

                </table>
        
</body>

</html>