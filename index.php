<?php 'include/db.php';?>
<html>
<head>
	<title>Retrieving Data From Database</title>
<script src="jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
	<body>
		<div class="container">
			<table class="table table-striped">
				<thead>
					<th>Id</th>
					<th>University</th>
					<th>College</th>
					<th>Semester</th>
					<th>Branch</th>
					<th>Book</th>
				</thead>
				<tbody>
		<?php
		$db_host = "localhost";

		$db_username = "Anshul"; 

		$db_pass = "AsdfZxcv909"; 

		$db_name = "php_course";
		$myConnection= mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql"); 

		mysqli_select_db($myConnection, "php_course") or die ("no database");
		$sql="SELECT * FROM comment";
		$run_sql=mysqli_query($myConnection, $sql);
		//$myConnection= mysqli_query("SELECT university,college,semester,branch,bookname FROM comment")or die ("could not connect to mysql"); 
		//$run_sql=mysqli_select_db($myConnection, "mrmagicadam") or die ("no database");
		//$sql="SELECT university,college,semester,branch,bookname FROM comment";
		//$run_sql= mysqli_query($sql,$conn)or die(mysql_error());
		if($run_sql === FALSE) { 
		    die('result empty'); // TODO: better error handling
		}
		while($rows= mysqli_fetch_assoc($run_sql)){
			echo '
			<tr>
			<td>'.$rows['id'].'</td>
			<td>'.$rows['university'].'</td>
			<td>'.$rows['college'].'</td>
			<td>'.$rows['semester'].'</td>
			<td>'.$rows['branch'].'</td>
			<td>'.$rows['book_name'].'</td>
		</tr>
		';
		}
		?></tbody>
	</table>
</div>
</body>
</html>
