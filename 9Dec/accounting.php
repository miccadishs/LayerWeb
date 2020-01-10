<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Accounting</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.3/chartist.min.css'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<main id="app">
  <div class="backdrop"></div>

  <aside class="sidebar">
    <div class="sidebar__logo">
      <img src="img/hamara.png" alt="">
    </div>
    <!--Sidenav-->
    <ul class="nav">
      <li class="nav__item">
        <a href="index.php" class="nav__link">
          <i class="material-icons">dashboard</i>
          <p>My Profile and Dashboard</p>
        </a>
      </li>
      <li class="nav__item">
        <a href="tasks.php" class="nav__link">
          <i class="material-icons">content_paste</i>
          <p>Tasks</p>
        </a>
      </li>
      <li class="nav__item">
        <a href="deliveries.php" class="nav__link">
          <i class="material-icons">directions_car</i>
          <p>Deliveries</p>
        </a>
      </li>
      <li class="nav__item">
        <a href="inflow.php" class="nav__link">
          <i class="material-icons">attach_money</i>
          <p>Inflow</p>
        </a>
      </li>
      <li class="nav__item">
        <a href="inventory.php" class="nav__link ">
          <i class="material-icons">bubble_chart</i>
          <p>Inventory and stock</p>
        </a>
      </li>
      <li class="nav__item">
        <a href="accounting.php" class="nav__link nav__link--active">
          <i class="material-icons">library_books</i>
          <p>Accounting</p>
        </a>
      </li>
      <li class="nav__item">
        <a href="notifications.php" class="nav__link">
          <i class="material-icons">notifications</i>
          <p>Notifications</p>
        </a>
      </li>
      <li class="nav__item">
        <a href="training.php" class="nav__link">
          <i class="material-icons">language</i>
          <p>Training & Support</p>
        </a>
      </li>
    </ul>
  </aside>

  <!--Section-->
  <section>
      <nav class="navbar navbar-expand-lg navbar-transparent">
        <!--<div class="container-fluid">-->
          <div class="navbar-wrapper">
            <a href="" class="navbar-brand">Accounting</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
          </div>
        <!--</div>-->
      </nav>
      <div class="content">
        <div class="container-fluid">



        </div>
      </div>
  </section>
  <footer>
    <div class="container-fluid">
      <nav class="float-left">
        Some links
      </nav>
      <div class="copy float-right">
        Copy right
      </div>
    </div>
  </footer>
</main>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.3/chartist.min.js'></script><script  src="./script.js"></script>

</body>
</html>
