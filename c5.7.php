<?php
$servername="localhost";
$username="20mca038";
$password="2627";
$dbname="20mca038";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed: " mysqli_connect_error());
}
$sql="INSERT INTO STUDENT(name,branch,mark) VALUES('annu','BCA','200')";
if(mysqli_query($conn,$sql))
{
echo " a new record is inserted successfully!";
}
else
{
echo "error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>
