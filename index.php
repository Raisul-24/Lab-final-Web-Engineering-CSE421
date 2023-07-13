<?php
if(isset($_POST['register'])){
        $name=$_POST['name'];
        $roll=$_POST['roll'];

        $con=mysqli_connect('localhost','root','','cse');
        $query=mysqli_query($con,"INSERT INTO `registration`(`name`, `roll`) VALUES ('$name','$roll')");

        if($query){
                echo "DOne";
        }
        else{
                echo "Wrong";
        }

}
?>
<!DOCTYPE html>
<html>
        <head>
                <title>Registration Form</title>
        </head>
        <body>
                <form action="" method="POST">
                        <label for="">Write Full Name</label>
                        <input type="text" name="name" placeholder="Enter Your Name"><br><br>

                        <label for="">Roll</label>
                        <input type="text" name="roll" placeholder="Enter Your Roll"><br><br>

                        <input type="submit" name="register" value="SUBMIT">
                </form>
        </body>
</html>