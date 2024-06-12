



<?php


$con=mysqli_connect('localhost','root','seedit','employeeprofile');
$q="select * from profile ";
$res=mysqli_query($con,$q);

while($row=mysqli_fetch_array($res))
{
echo"       
$row[ID],$row[Name],$row[Dept],$row[Contactno],$row[Salary],$row[EmployeeRank]

<a href='editemployee.php?id=$row[ID]'>         edit</a>
<a href='deleteemployee.php?id=$row[ID]'>        delete</a>
<br>



";

}








?>















