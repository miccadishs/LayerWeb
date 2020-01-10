<?php
	session_start();

	if($_SERVER['REQUEST_METHOD']=='POST'){

	$db=mysqli_connect("localhost","root", "","shoop");
	if(isset($_POST['count'])) {
		$num = ($_POST['birds']);
		$mort = ($_POST['mort']);
	  $reason = "";
	  $date = date("Y-m-d");
		$sql;
		$sq2;
		$sql3;
		$hState;

		if(isset($_POST['remember'])){
			$hState = "Leveled";
		}
		else{
			$hState = "Not Ideal";
		}

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "Update birdCount Set birds = '". $num . "'where id = '1'";
$sql2 = "Insert into mort(mortQ,cause,date) values ('$mort','$reason','$date')";
$sql3 = "Insert into health(hState,reason,date) values ('$hState','$reason','$date')";


//must make the entries independent of each other
if ((mysqli_query($db, $sql))
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
}
?>
