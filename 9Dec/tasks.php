<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Tasks</title>
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
        <a href="tasks.php" class="nav__link nav__link--active">
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
          <i class="fas fa-hand-holding-usd"></i>
          <p>Inflow</p>
        </a>
      </li>
      <li class="nav__item">
        <a href="inventory.php" class="nav__link">
          <i class="material-icons">bubble_chart</i>
          <p>Inventory and stock</p>
        </a>
      </li>
      <li class="nav__item">
        <a href="accounting.php" class="nav__link">
          <i class="fas fa-cash-register"></i>
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
            <a href="" class="navbar-brand">Tasks</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
          </div>
        <!--</div>-->
      </nav>
      <div class="content">
        <div class="container-fluid">
          <!-- 1st row-->

          <!--Charts 2nd Row-->
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="card__header">
                  <div class="chart chart--green" id="eggcard">
                    <img src="img/trayedeggs.png" alt="">
                    <h4>Egg Produced</h4>
                 <!-- markup -->

                  </div>
                </div>
                <div id=eggProduction class="card__body">
                  <form class="form-horizontal" method="post" action="database/egg.php">
                  <div class="form-group">
                    <label class="control-label col-sm-4" for="eggspicked">Eggs Picked:</label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="eggsbroken" placeholder="Enter estimate eggs expected" name="eggspicked">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" for="eggspicked">Breakages:</label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="eggsbroken" placeholder="Enter estimate eggs expected" name="eggbroken">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" for="pwd">Average Size:</label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="eggsbroken" placeholder="Enter No. eggs broken" name="eggsbroken">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-4" for="color">Size:</label>
                    <div class="col-sm-6">
                      <select class="eggcolour" name="sizeE">Size
                        <option value="Small">small</option>
                        <option value="medium">medium</option>
                        <option value="large">large</option>
                        <option value="mixed">mixed</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-4" for="color">Colour:</label>
                    <div class="col-sm-6">
                      <select class="eggcolour" name="eggcolour">Colour
                        <option value="brown">brown </option>
                        <option value="white">white</option>
                        <option value="speckled">speckled</option>
                        <option value="dirty">dirty</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-3">
                      <button type="save" class="btn btn-default" name ="eggProduction">Save</button><br><br>
                    </div>
                  </div>
                </form>
                </div>
                <div class="card__footer">
                   <i class="material-icons">update</i><a href="">Updated 4mins ago</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="card__header">
                  <div class="chart chart--orange" id="birdcard">
                    <img src="img/chicken-silhouette-clipart-1.png" alt="">
                        <h4>Birds</h4>
                   <!-- markup -->

                  </div>
                </div>
                <div class="card__body" id="count">

                  <form class="form-horizontal" action="database/birdCount.php" method="post">
                  <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Batch Name:</label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="eggstarget" placeholder="Enter target" name="eggstarget">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" for="eggspicked">Number of birds:</label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="birds" placeholder="Enter No. of birds" name="birds">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" for="pwd">Mortality:</label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="mort" placeholder="Enter Dead Birds" name="mort">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-4">
                      <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Health</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                      <button type="save" class="btn btn-default" name = "count">Save</button><br><br>
                    </div>
                  </div>
                </form>
                </div>
                <div class="card__footer">
                   <i class="material-icons">update</i><a href="">Updated 4mins ago</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card">
                    <div class="card__header">
                      <div class="chart chart--red" id="feedcard">
                        <img src="img/water-drop.png" alt="">
                        <h4>Feed & Water</h4>
                      <!-- markup -->
                      </div>
                    </div>
                    <div id= "submit" class="card__body">

                      <form class="form-horizontal" method= "post" action="database/feed.php">
                      <div class="form-group">
                        <label class="control-label col-sm-4" for="email">Feed:</label>
                        <div class="col-sm-2">
                          <select class="" name="feed">
                            <option value="10kg">10kg</option>
                            <option value="25kg">25kg</option>
                            <option value="50kg">50kg</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-4" for="pwd">Bags Used:</label>
                        <div class="col-sm-6">
                          <input type="number" class="form-control" id="closing feed" placeholder="" name="clfeed">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-4">
                          <div class="checkbox">
                            <label><input type="checkbox" name="reminder"> Did you replace water</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-3">
                          <button type=save class="btn btn-default" name ="submit">Save</button><br><br>
                        </div>
                      </div>
                      </form>
                    </div>
                    <div class="card__footer">
                       <i class="material-icons">update</i><a href="">Updated 4mins ago</a>
                    </div>
                  </div>
            </div>
           </div>

          <!--3rd row -->
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <div class="card">
               <div class="card__header" style=" background-image: linear-gradient(60deg, #ffa602, #fff)">
             </thead>

                </div>
                 <table class="table">
                   <thead>
                     <h2 style="  background-image: linear-gradient(60deg, #ffa602, #fff)"> Deliveries History</h2>
                   </thead>
                   </thead>
                    <tbody>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Batch</th>
                      <th>Eggs Picked</th>
                      <th>Everage Size</th>
                      <th>Eggs Broken</th>
                      <th>Bird Count</th>
                    </tbody>
                  </table>
              </div>
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
        Copy right K Masuku 2019
      </div>
    </div>
  </footer>
</main>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.3/chartist.min.js'></script><script  src="./script.js"></script>

</body>
</html>
