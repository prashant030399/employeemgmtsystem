     
     
     
     
     <?php
$d=$_GET['t1'];
$con=mysqli_connect('localhost','root','seedit','employeeprofile');
$q="select * from profile where Dept='$d' ";
$res=mysqli_query($con,$q);
echo"Dept-$d<br>";
echo"ID,Name,Contactno,Salary,EmployeeRank <br>";
while($row=mysqli_fetch_array($res))
{
    echo" 
    $row[ID],$row[Name],$row[Contactno],$row[Salary],$row[EmployeeRank] <br>




    ";
}









?>