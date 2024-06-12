<?php

$a=$_GET['t1'];
$b=$_GET['t2'];
$c=$_GET['t3'];
$d=$_GET['t4'];
$e=$_GET['t5'];
$f=$_GET['t6'];

$con=mysqli_connect('localhost','root','seedit','employeeprofile');
$q="insert into profile values('$a','$b','$c','$d','$e','$f')";

$res=mysqli_query($con,$q);

if($res==true)
{
    echo"save";
}
else 
{
    echo"error";
}










?>