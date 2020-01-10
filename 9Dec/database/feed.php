<?php
	session_start();


	if($_SERVER['REQUEST_METHOD']=='POST'){

	$db=mysqli_connect("localhost","root", "","shoop");
	if(isset($_POST['submit'])) {

		$fNum = ($_POST['clfeed']);
		$fType = ($_POST['feed']);
		$date = date("Y-m-d");
		$sql;

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT  into feed (fNum,fType,dateY) values ('$fNum','$fType','$date')";

if (mysqli_query($db, $sql))
{
	echo "New record created successfully";
	header("Location: ../tasks.php");
}
else
{
	echo "Error Occured";
	header("Location: feedTry.php");

    echo "Error: " . $sql . "<br>" . mysqli_error($db);
	}
}
}
?>
