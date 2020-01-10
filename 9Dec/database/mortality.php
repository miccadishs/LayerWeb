<?php
session_start();

$db = mysqli_connect("localhost", "root","","shoop");
if(isset($_POST['counts'])){
  $mort = ($_POST['mort']);
  $reason = "";
  $date = date("Y-m-d");
  $sql;

  if(!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "Insert into mort(mortQ,cause,date) values ('$mort','$reason','$date')";

if (mysqli_query($db, $sql))
{
  echo '<script>
  alert("Saved");
  window.location ="../tasks.php";
  </script>';
}
else{
  echo '<script>
  alert("Error Occured");
  window.location ="../tasks.php";
  </script>';
  }
}
?>
