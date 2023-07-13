<?php
if(isset($_POST['search'])){
        $sid=$_POST['id'];
        $con=mysqli_connect('localhost','root','','cse');
        $query=mysqli_query($con,"select * from registration where id='$sid'");


        if(mysqli_num_rows($query)>0){
                while($row=mysqli_fetch_assoc($query)){
                        $n=$row['name'];
                        $r=$row['roll'];
                }
        }
        else{
                echo "Wrong";
                $n="";
                $r="";
        }
        mysqli_free_result($query);
        mysqli_close($con);
}
else{
        $n="";
        $r="";
}

?>

<html>
        <head></head>
        <body>
                <form action="" method="POST">
                        <label for="">Search</label>
                        <input type="serch" name="id">
                        <input type="submit" name="search" value="SEARCH">
                        <input type="text" value="<?php echo $n; ?>">
                        <input type="text" value="<?php echo $r; ?>">
                </form>
        </body>
</html>