<?php
session_start();


$db = mysqli_connect("localhost", "root","","shoop");
$sql;
$sql2;
if(isset($_POST['eggProduction'])){

  $picked = ($_POST['eggspicked']);
  $broken = ($_POST['eggbroken']);
  $size = ($_POST['sizeE']);
  $quality = ($_POST['eggcolour']);
  $date = date("Y-m-d");
  $stock = mysqli_query($db, "Select stockQ from stock where id = 1");
  $deStock = mysqli_fetch_array($stock);
  $newStock = $picked + $deStock['stockQ'];

  if(!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "Insert into eggP(picked,broken,date,size,quality) values ('$picked','$broken','$date','$size','$quality')";
  $sql2 = "Update stock Set stockQ = '". $newStock . "' where id = '1'";

//fix error handling case for sql2
if (mysqli_query($db, $sql))
{
  mysqli_query($db, $sql2);
  echo "New record created successfully";
	header("Location: ../tasks.php");
}
else{
  echo "Error Occured";
	header("Location: ../tasks.php");

  echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

  }
 ?>
