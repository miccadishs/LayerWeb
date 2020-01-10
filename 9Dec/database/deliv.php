<?php
session_start();
?>

<html>
<head>
<link rel="stylesheet" href="css/head.css">
<link rel="icon" href="res/ThinkGeek-pt.png" sizes="16x16">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
<script type="text/javascript" src="scripts/signupForm.js"></script>
<script type="text/javascript" src="scripts/loginForm.js"></script>
<title>Layers | Unlocking Africa's Potential.</title>
</head>
<body>
<h1><center>Layers | Unlocking Afriica's Potential</center></h1>

<!-- feed -->
<div id="deliv">
<form name="loginForm" method="post" action="egg.php">
<table align="left" width="150%">
<tr>
 <td align="center">
   <h2>Feed</h2>
 </td>
</tr>

<tr>
 <td>
   <select id = "payType" name="payType">
               <option value = "Cash">Cash</option>
               <option value = "Account">Account</option>
               <option value = "Part Payment">Part Payment</option>
             </select>
 </td>
</tr>
<tr>
 <td>
   <input type="text" name="name" id="name" placeholder="Customer Name" required>
 </td>
</tr>
<br>
<tr>
 <td>
   <select id = "prod" name="prod">
             <option value = "Eggs">Eggs</option>
             </select>
 </td>
</tr>
<tr>
 <td>
   <input type="number" name="bought" id="bought" placeholder="Eggs bought" required>
 </td>
</tr>
<tr>
 <td>
   <select id = "quality" name="quality">
               <option value = "Dark">Dark</option>
               <option value = "Light">Light</option>
               <option value = "Dirty">Dirty</option>
             </select>
</tr>
<tr>
 <td>
   <input type="submit" name="deliv" value="Save" class="click">
 </td>
</tr>
<
</table>
</form>
</div>

</body>

</html>
