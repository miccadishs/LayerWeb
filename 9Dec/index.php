<?php
session_start()
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>My Profile</title>
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
        <a href="index.php" class="nav__link nav__link--active">
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
        <a href="inventory.php" class="nav__link">
          <i class="material-icons">store</i>
          <p>Inventory and stock</p>
        </a>
      </li>
      <li class="nav__item">
        <a href="accounting.php" class="nav__link">
          <i class="material-icons">location_ons</i>
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
          <p>Training and support</p>
        </a>
      </li>
    </ul>
  </aside>

  <!--Section-->
  <section>
      <nav class="navbar navbar-expand-lg navbar-transparent">
        <!--<div class="container-fluid">-->
          <div class="navbar-wrapper">
            <a href="" class="navbar-brand">Dashboard</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
          </div>
        <!--</div>-->
      </nav>
      <div class="content">
        <div class="container-fluid">
          <!-- 1st row-->
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <!--Card-->
              <div class="card">
                  <div class="card__header">
                    <div class="card__icon card__icon--orange">
                      <i class="material-icons">account_circle</i>
                    </div>
                    <p class="card__category">My Info</p>
                    <h3 class="card__title">

                    </h3>
                </div>
                  <div class="card__footer">
                    <i class="material-icons text-danger"></i>
                    <a href="" ></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <!--Card-->
              <div class="card">
                  <div class="card__header">
                    <div class="card__icon card__icon--green">
                      <i class="material-icons">attach_money</i>
                    </div>
                    <p class="card__category">Profit</p>
                    <h3 class="card__title">
                      $0,00
                      <small</small>
                    </h3>
                </div>
                  <div class="card__footer">
                    <i class="material-icons">date_range</i>
                    <a href=""></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <!--Card-->
             <div class="card">
                  <div class="card__header">
                    <div class="card__icon card__icon--red">
                      <i class="material-icons">store</i>
                    </div>
                    <p class="card__category">Available Stock</p>
                    <h3 class="card__title">
                      $0,00
                    </h3>
                </div>
                  <div class="card__footer">
                    <i class="material-icons">update</i>
                    <a href=""> Just updated</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <!--Card-->

            </div>
          </div>

           <!--Charts 2nd Row-->
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="card__header">
                  <div class="chart chart--green">
                    <h4>Production : Feed</h4>
                 <!-- markup -->

                  </div>
                </div>
                <div class="card__body">

                  <p>This shows the ratio of the eggs produced in relation to the amount of feed and water they consumeds </p>
                </div>
                <div class="card__footer">
                   <i class="material-icons">update</i><a href=""></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="card__header">
                  <div class="chart chart--orange" >
                    <h4>Feed Consumed Over Time</h4>
                   <!-- markup -->

                  </div>
                </div>
                <div class="card__body">

                  <p>This shows feed (kgs) that the layers have consumed over time</p>
                </div>
                <div class="card__footer">
                   <i class="material-icons">update</i><a href=""></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card">
                    <div class="card__header">
                      <div class="chart chart--red" >
                        <h4>Weekly Deliveries</h4>
                      <!-- markup -->
                      </div>
                    </div>
                    <div class="card__body">

                      <p>This shows an overview of the past week's deliveries</p>
                    </div>
                    <div class="card__footer">
                       <i class="material-icons">update</i><a href=""></a>
                    </div>
                  </div>/
            </div>
           </div>

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
