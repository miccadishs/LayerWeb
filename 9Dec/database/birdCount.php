<?php
	session_start();

	if($_SERVER['REQUEST_METHOD']=='POST'){

	$db=mysqli_connect("localhost","root", "","shoop");
	if(isset($_POST['count'])) {

		$num = ($_POST['birds']);

		$sql;

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "Update birdCount Set birds = '". $num . "'where id = '1'";

if (mysqli_query($db, $sql))
{
	echo "New record created successfully";
	header("Location: ../tasks.php");
}
else
{
	echo "Error Occured";
	header("Location: ../tasks.php");

    echo "Error: " . $sql . "<br>" . mysqli_error($db);
	}
}
}
?>
