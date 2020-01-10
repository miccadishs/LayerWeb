<?php
session_start();

$db = mysqli_connect("localhost", "root","","online");
if(isset($_POST['eggProduction'])){

  $waterL = ($_POST['waterL']);
  $reason = ($_POST['reason']);
  $date = ($_POST['date']);
  $sql;

  if(!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "Insert into water(waterL,reason,date) values ('$waterL','$reason','$date')";

if (mysqli_query($db, $sql))
{
  echo '<script type="text/javascript">prompt("New record created successfully");</script>';
	header("Location: feedTry.php");
}
else{
  echo '<script type="text/javascript">prompt("Error Occured");</script>';
	header("Location: feedTry.php");

  echo "Error: " . $sql . "<br>" . mysqli_error($conn);

  }
}
?>
