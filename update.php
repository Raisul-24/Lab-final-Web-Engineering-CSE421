<?php
$uid=$_GET['updateid'];
$con=mysqli_connect('localhost','root','','buet');
$result=mysqli_query($con,"select * from cse where id='$uid'");
$row=mysqli_fetch_assoc($result);
$firstname=$row['fname'];
$lastname=$row['lname'];

if(isset($_POST['update'])){
        $first=$_POST['firstname'];
        $last=$_POST['lastname'];
        $con=mysqli_connect('localhost','root','','buet');
        $query=mysqli_query($con,"update cse set id='$uid',fname='$first',lname='$last' where id='$uid'");
        if($query){
                echo "Updated Successfully";
        }
        else{
                echo "Not Successfull!!";
        }
}
?>
<html>
        <head>
                <title>Update Form</title>
        </head>
        <body>
                <form action="" method="POST">
                        <input type="text" name="firstname" value="<?php echo $firstname; ?>"><br><br>
                        <input type="text" name="lastname" value="<?php echo $lastname; ?>"><br><br>
                        <input type="submit" name="update" value="Update"><br><br>
                </form>
        </body>
</html>