<html>
    <head><title>Add</title>
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
$b=$_POST['name'];
$c=$_POST['CPM'];
$d=$_POST['MOT'];
$con=new mysqli($sn,$un,$ps,$db);
$sql="insert into info values('$a','$b','$c','$d');";
if($con->query($sql)==true)
{
    echo '<h1>Added Successfully</h1>';
}
else
{
    echo '<h1>Error!<h1>';
}
?>
<h3><a href='home.html'>Home Page</a></h3>
</html>