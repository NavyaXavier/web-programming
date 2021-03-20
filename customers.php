<html>
<body>
<?php
$servername="localhost";
$username="20mca038";
$password="2627";
$dbname="20mca038";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}
$sql= "SELECT `c_no`, `c_name`, `item_purchased`, `mob_no` FROM `customer`";
$result=mysqli_query($conn,$sql);
echo
"<table border='1'>
<tr>
<th> c_no</th>
<th> c_name</th>
<th> item_purchased</th>
<th> mob_no</th>
</tr>";
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$row['c_no']."</td>";
echo "<td>".$row['c_name']."</td>";
echo "<td>".$row['item_purchased']."</td>";
echo "<td>".$row['mob_no']."</td>";

echo "</tr>";
}
echo "</table>";
}
mysqli_close($conn);
?>
</body>
</html>