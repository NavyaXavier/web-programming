<?php
$servername="localhost";
$username="20mca038";
$password="2627";
$dbname="20mca038";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed:".mysqli_connect_error());
}
$sql="UPDATE STUDENT SET mark='90' WHERE id=2";
if(mysqli_query($conn,$sql))
{
echo "record updated successfully!";
}
else
{
echo "error updating record: ".mysqli_error($conn);
}
mysqli_close($conn);
?>