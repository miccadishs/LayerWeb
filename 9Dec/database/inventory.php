<?php
session_start();

$db = mysqli_connect("localhost", "root","","shoop");
if(isset($_POST['eggProduction'])){
  $bagsize = ($_POST['bagSize']);
  $bagQ = ($_POST['bagQ']);
  $date = ($_POST['date']);
  $sql;
  if(!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "Insert into inventory(bagSize,numBags,date) values ('$bagsize','$bagQ','$date')";
  $results = mysqli_query($db, "Select * from inventory");
  $sql2 = "Update inventory set bagQ = " . $bagQ. " where bagSize = " .$bagsize;
if (mysqli_num_rows($results))== 0){

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
else {
  if (mysqli_query($db, $sql2))
  {
    echo '<script type="text/javascript">prompt("Updated successfully");</script>';
    header("Location: feedTry.php");
  }
  else{
    echo '<script type="text/javascript">prompt("Error Occured");</script>';
    header("Location: feedTry.php");
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
}
?>
