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
<div id="login">
<form name="loginForm" method="post" action="feed.php">
<table align="left" width="150%">
<tr>
 <td align="center">
   <h2>Feed</h2>
 </td>
</tr>
<tr>
 <td>
   <input type="number" name="fNum" id="feedNum" placeholder="Bags Used" required>
 </td>
</tr>
<br>
<tr>
 <td>
   <input type="text" name="fType" id="fType" placeholder="Feed Type" required>
 </td>
</tr>
<tr>
 <td>
   <input type="submit" name="login" value="Save" class="click">
 </td>
</tr>
<
</table>
</form>
</div>

</body>

</html>
