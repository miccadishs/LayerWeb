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
<div id="eggProduction">
<form name="loginForm" method="post" action="egg.php">
<table align="left" width="150%">
<tr>
 <td align="center">
   <h2>Feed</h2>
 </td>
</tr>
<tr>
 <td>
   <input type="number" name="picked" id="pick" placeholder="Collected Eggs" required>
 </td>
</tr>
<br>
<tr>
 <td>
   <input type="number" name="broken" id="broke" placeholder="Broken Eggs" required>
 </td>
</tr>
<tr>
 <td>
   <select id = "size" name="size">

               <option value = "Uniform">Uniform</option>
               <option value = "Non Uniform">Non Uniform</option>
             </select>
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
   <input type="submit" name="eggProduction" value="Save" class="click">
 </td>
</tr>
<
</table>
</form>
</div>

</body>

</html>
