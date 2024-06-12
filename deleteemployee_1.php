

<?php

$r=$_GET['t1'];
$con=mysqli_connect('localhost','root','seedit','employeeprofile');
$q="delete from profile where ID='$r' ";
$res= mysqli_query($con,$q);
if($res==true)
{
    echo"Record deleted";
}
else 
{
    echo"error";
}








?>