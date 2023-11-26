
<html>
<head>
<link rel="stylesheet" href="style.css">
<style>
	h1{
		text-align:center;
	}
	.container{
		display: flex;
		height: 80vh;
		justify-content: center;
		align-items: center;
	}
    table{
		border-collapse:collapse;
	}
	table,td,th{
		border:2px solid green;

	}

	td,th{
		padding:10px;
		font-size:16pt;
	}
  a:link {
	color: red;
  }
  a:visited {
	color: green;
  }
  a:hover {
	color: hotpink;
  }
  a:active {
	color: blue;
  }
</style>
</head>
<body>
<h1>Delivery services List</h1>
<?php // dbexample1.php
	require_once 'login.php';

	$conn = new mysqli($hn, $un, $pw, $db);

	if ($conn->connect_error) 
		die("Fatal Error");

	$query = "SELECT * FROM info";

	$result = $conn->query($query);

	if (!$result) 
		die("Fatal Error");

	//echo $result->num_rows;
	
	$rows = $result->num_rows;
?>
<div class="container">
	<table >
	<tr>
		<th>Delivery Id</th>
		<th>Name</th>
		<th>CPM</th>
        <th>MOT</th>
	</tr>
</div>	
<?php
	for ($j = 0 ; $j < $rows ; ++$j)
	{
		$row = $result->fetch_assoc()  ;//$result->fetch_array(MYSQLI_ASSOC);
		echo '<tr><td>' . htmlspecialchars($row['delivery_id']) . '</td>';
		echo '<td>' . htmlspecialchars($row['name']) . '</td>';
        echo '<td>' . htmlspecialchars($row['CPM']) . '</td>';
		echo '<td>' . htmlspecialchars($row['MOT']) . '</td></tr>';
		
	}

?>
	</table>
<?php

	$result->close();
	$conn->close();

?>
</body>
</html>