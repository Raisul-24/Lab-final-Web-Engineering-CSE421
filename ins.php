<?php
if(isset($_POST['register'])){
        $s_name=$_POST['name'];
        $s_id=$_POST['studentid'];
        $s_gmail=$_POST['gmail'];

        $con=mysqli_connect('localhost','root','','student');
        $query=mysqli_query($con,"INSERT INTO `info`( `name`, `s_id`, `gmail`) VALUES ('$s_name','$s_id','$s_gmail')");
        if($query){
                echo "Done";
        }
        else{
                echo "Fail";
        }
}
?>
<html>
        <head>
                <title>Insert</title>
        </head>
        <body>
                <form action="" method="POST">
                        <input type="text" name="name" placeholder="Name"><br><br>
                        <input type="text" name="studentid" placeholder="ID" ><br><br>
                        <input type="text" name="gmail" placeholder="Gmail"><br><br>
                        <input type="submit" name="register" value="Submit">
                </form>

                <table>
                        <tr>
                                <th>ID</th>
                                <th>FUll Name</th>
                                <th>STUDENT ID</th>
                                <th>GMAIL</th>
                        </tr>
                        <?php
                        $con=mysqli_connect('localhost','root','','student');
                        $result=mysqli_query($con,"select * from info");
                        while($row=mysqli_fetch_assoc($result)):

                                ?>

                        <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['s_id']; ?></td>
                                <td><?php echo $row['gmail']; ?></td>
                                <td><a href="d.php?deleteid=<?php echo $row['id']; ?>">Delete</a></td>
                                <td><a href="u.php?updateid=<?php echo $row['id']; ?>">Update</a></td>
                        </tr>
                        <?php
                        endwhile;
                        ?>
                </table>
        </body>
</html>