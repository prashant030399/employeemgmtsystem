
<h1> Employee Details  </h1>
<?php
$con=mysqli_connect('localhost','root','seedit','employeeprofile');
$q="select * from profile";
$res=mysqli_query($con,$q);
echo" <table border='1'><tr>
<td>ID</td>
<td>Name</td>
<td>Dept</td>
<td>Contactno</td>
<td>Salary</td>
<td>EmployeeRank</td>
</tr>
</table>
";

while($row=mysqli_fetch_array($res))
{
echo" <table border='1'>

<tr>
<td> $row[ID]</td>
<td> $row[Name]</td>
<td> $row[Dept]</td>
<td> $row[Contactno]</td>
<td> $row[Salary]</td>
<td> $row[EmployeeRank]</td>
</tr>
</table>
 ";

}







?>






