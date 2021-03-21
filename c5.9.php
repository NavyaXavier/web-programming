<?php
$servername="localhost";
$username="20mca038";
$password="2627";
$dbname="20mca038";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("conncetion failed: ".mysqli_connect_error());
}
$sql="SELECT 'id','name','branch' FROM 'STUDENT'";
$result=mysqli_query($conn,$sql);
echo
"<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Branch</th>
</tr>";
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['branch']."</td>";
echo "</tr>";
}
echo "</table>";
}
mysqli_close($conn);
?>