<?php
session_start();

$db = mysqli_connect("localhost", "root","","online");
if(isset($_POST['eggProduction'])){

  $hState = ($_POST['hState']);
  $reason  = ($_POST['reason']);
  $date = ($_POST['date']);
  $sql;

  if(!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "Insert into health(hState,reason,date) values ('$hState','$reason','$date')";

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
