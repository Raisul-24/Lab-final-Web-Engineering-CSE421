<?php
if(isset($_POST['search'])){
        $name=$_POST['id'];
        $con=mysqli_connect('localhost','root','','buet');
        $query=mysqli_query($con,"select * from cse where id='$name'");
        if(mysqli_num_rows($query)>0){
                while($row=mysqli_fetch_assoc($query)){
                        $f_name=$row['fname'];
                        $l_name=$row['lname'];
                }
        }
        else{
                echo "Wrong";
                $f_name="";
                $l_name="";
        }
        mysqli_free_result($query);
        mysqli_close($con);
}
else{
        $f_name="";
        $l_name="";
}
?> 
<html>
        <head>
                <title>Search!!</title>
        </head>
        <body>
                <form action="" method="POST">
                        <label>Search</label>
                        <input type="text" name="id">
                        <input type="submit" name="search" value="Search"><br><br>
                        <input type="text" value="<?php echo $f_name; ?>">
                        <input type="text" name="lname" value="<?php echo $l_name; ?>">
                </form>
        </body>
</html>