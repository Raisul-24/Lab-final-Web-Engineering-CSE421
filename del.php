<?php
$did=$_GET['deleteid'];
$con=mysqli_connect('localhost','root','','cse');
$query=mysqli_query($con,"delete from registration where id='$did'");

if($query){
        echo "Done";
}
else{
        echo "no";
}
?>