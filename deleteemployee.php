


<?php
$i=$_GET['id'];
$con=mysqli_connect('localhost','root','seedit','employeeprofile');
$q=" delete from profile where ID='$i' ";
$res= mysqli_query($con,$q);
if($res==true)
{
    echo" Deleted";
}
else
{
echo"error";
}







?>