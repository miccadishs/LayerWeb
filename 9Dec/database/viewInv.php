<?php
session_start();


$db = mysqli_connect("localhost", "root","","online");
if(isset($_POST['eggProduction'])){
  $sql;
  $sql2;

  if(!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "Select * from inventory";
  $sql2 = "Select stockQ from stock where id = 1";
  $resultInv = mysqli_query($db, $sql);
  $resultStock = mysqli_query($db, $sql2);

  }
 ?>
7
