<?php
$con=mysqli_connect('localhost','root','seedit','employeeprofile');
$q="select * from profile";
$res=mysqli_query($con,$q);
echo" ID,Name,Dept,Contactno,Salary,EmployeeRank <br>" ;
while($row=mysqli_fetch_array($res))
{
echo" $row[ID],$row[Name],$row[Dept],$row[Contactno],$row[Salary],$row[EmployeeRank]  <br>  ";

}







?>
