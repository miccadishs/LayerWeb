<?php
	session_start();

	$db=mysqli_connect("localhost","root", "","shoop");
	if(isset($_POST['deliv'])) {
		$prodQ = ($_POST['quantity']);
		$prod = "Eggs";
		$price = ($_POST['unitprice']);
		$date = date("Y-m-d");
		$totalC = $prodQ * $price;
		$payType = "Cash";
		$paidA = $totalC;
		$owing = 0;
		$name = "";
		$sql;

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "Insert into deliveries(prodQ,prod, name,totalC, payType, paidA,owing, date ) values ('$prodQ','$prod','$name','$totalC','$payType','$paidA','$owing','$date')";

if (mysqli_query($db, $sql))
{
	echo '<script>
	alerts("Sale Made");
	window.location = "../deliveries.php"
	</script>';
}
else
{
	echo '<script>
	alerts("Error Occured");
	window.location = "../deliveries.php"
	</script>';
	}
}
?>
