<?php
//include 'db.php';
$server='localhost';
$user='Anshul';
$password='AsdfZxcv909';
$db='php_course';
$myConnection = mysqli_connect($server,$user,$password,$db);
if(!$myConnection){
	die("Connection Failed!:".mysqli_connect_error());
}
$name=$_POST["name"];
$email=$_POST["email"];
$contact=$_POST["number"];
$address=$_POST["address"];
$password=$_POST["password"];

/*if(isset($_POST['submit'])){
	$university=strip_tags($_POST['university']);
	$college=strip_tags($_POST['college']);
	$semester=htmlspecialchars($_POST['semester'])
	$branch=strip_tags($_POST['branch']);
	$book=strip_tags($_POST['book_name']);
	$ins_sql="INSERT INTO comment(university,college,semester,branch,book_name) VALUES('$university','$college','$semester','$branch','$book')";
	$run_sql=mysqli_query($myConnection,$ins_sql)
}
else{

}*/
$sql = "INSERT INTO info (name, password,mobile,address, email)
VALUES ('$name', '$password','$contact','$address', '$email')";
if ($myConnection->query($sql) === TRUE) {
    echo "New record created successfully";
    ?>
    <script type="text/javascript">
    	window.location="#";
    </script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>