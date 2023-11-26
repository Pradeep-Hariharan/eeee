<html>
    <head><title>Delete</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1{
            text-align: center;
            margin-top: 100px;
        }
        h3{
            text-align: center;
        }
    </style>
</head>
<?php
$sn="localhost";
$un="root";
$ps="";
$db="testdb";
$a=$_POST['delivery_id'];
$con=new mysqli($sn,$un,$ps,$db);
$query="delete from info where delivery_id='$a';";
$res=$con->query($query);
if($con->query($query)==true)
{
    echo '<h1>Deleted Successfully<h1>';
}
else
{
    echo '<h1>Error!<h1>';
}
?>
<h3><a href='home.html'>Home Page</a></h3>
</html>