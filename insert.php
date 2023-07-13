<?php
if(isset($_POST['register'])){
        $n=$_POST['name'];
        $r=$_POST['roll'];
        $con=mysqli_connect('localhost','root','','cse');
        $query=mysqli_query($con,"insert into registration(name,roll) values('$n','$r')");
        if($query){
                echo "Done";
        }
        else{
                echo "None";
        }
}
?>
<html>
        <head></head>
        <body>
                <form action="" method="POST">
                        <h2>Registration</h2><br><br>
                        <input type="text" name="name" placeholder="Name:....."><br><br>
                        <input type="text" name="roll" placeholder="Roll......"><br><br>
                        <input type="submit" name="register" value="SUBMIT">
                        
                </form>
        </body>
</html>