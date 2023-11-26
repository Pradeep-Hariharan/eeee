<html>
    <head><title>Register</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h2{
            text-align: center;
            margin-top: 100px;
        }
    </style>
</head>
<?php
$sn="localhost";
$un="root";
$ps="";
$db="testdb";
$a=$_POST['email'];
$b=$_POST['password'];
$c=$_POST['uname'];
$con=new mysqli($sn,$un,$ps,$db);
$query="insert into login values('$c','$a','$b')";
$res=$con->query($query);
if($con->query($query)==true)
{
    header("location:home.html");
}
else
{
	echo '<h2>Try again!<h2>';
}
?>
</html>