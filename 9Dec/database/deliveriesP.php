<?php
session_start();
$db = mysqli_connect("localhost", "root","","shoop");
if(isset($_POST['deliv'])){
  $stock = mysqli_query($db, "Select stockQ from stock where id = 1");
  $deStock = mysqli_fetch_array($stock);
  if(($deStock['stockQ'])>0){

  $type = ($_POST['payType']);
  if($type == "Cash"){
    include 'cash.php';
  }
  if($type == "Account"){
    include 'account.php';
  }
  if($type == "Part Payment"){
    include 'partpay.php';
  }

  $prod = ($_POST['quantity']);
  $stock = mysqli_query($db, "Select stockQ from stock where id = 1");
  $deStock = mysqli_fetch_array($stock);
  $newStock = $deStock['stockQ'] - $prod;
  $sql;
  if(!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql2 = "Update stock Set stockQ = '". $newStock . "'where id = '1'";

if (mysqli_query($db, $sql2)){
  echo '<script>
  alert("Sale Made");
  window.location = "../deliveries.php";
  </script>';
}
else{
  echo '<script>
  alert("Error Occured");
	window.location = "../deliveries.php";
  </script>';
  }
}
else{
  echo '<script>
  alert("No Stock");
  window.location = "../deliveries.php";
  </script>';

}
}
?>
