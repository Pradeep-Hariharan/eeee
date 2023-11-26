<html>
    <head><title>Update</title>
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
$query="update info set name='$b',CPM='$c',MOT='$d' where delivery_id='$a';";
$res=$con->query($query);
if($con->query($query)==true)
{
    echo 'Updated Successfully';
}
else
{
    echo 'Error!';
}
?>
<h3><a href='home.html'>Home Page</a></h3>
</html>