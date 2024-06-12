<html>
    <form action="editemployee1.php">

<?php
$r=$_GET['id'];
$con=mysqli_connect('localhost','root','seedit','employeeprofile');
$q="select * from profile where ID='$r'";
$res=mysqli_query($con,$q);

if($row=mysqli_fetch_array($res))
{
echo"
ID <input value='$row[ID]' type='text'  name='t1'> <br> 
Name <input value='$row[Name]' type='text' name='t2'> <br> 
Dept <input value='$row[Dept]' type='text' name='t3'> <br> 
Contactno <input value='$row[Contactno]' type='text' name='t4'>  <br> 
Salary <input value='$row[Salary]'  type='text'  name='t5'> <br> 
EmployeeRank <input value='$row[EmployeeRank]' type='text' name='t6'> <br> 


";
}




?>


<input type='submit' value="Update">

</form>
</html>