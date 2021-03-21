<html>
<head>
<title>login</title>
</head>
<body>
<?php
if($_post["username"] == "php" && $_post["password"] =="php")
{
$_SESSION["login"]="YES";
echo "<h1> you are now logged correctly in</h1>";
echo "<p><a href='document.php'>link to protected file</a><p/>";
}
else
{
session_start();
$_SESSION["Login"] = "No";
echo "<h1>you are not logged correctly in </h1>";
echo "<p><a href='document.php'>link to protected file</a></p>";
}
?>
</body>
</html>