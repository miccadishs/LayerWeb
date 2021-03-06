<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Deliveries</title>
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
        <a href="deliveries.php" class="nav__link nav__link--active">
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
          <i class="material-icons">bubble_chart</i>
          <p>Inventory and stock</p>
        </a>
      </li>
      <li class="nav__item">
        <a href="accounting.php" class="nav__link">
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
            <a href="" class="navbar-brand">Deliveries</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
          </div>
        <!--</div>-->
      </nav>
      <div class="content">
        <div class="container-fluid">


          <!--Charts 2nd Row-->
          <div class="row">

            <div class="col-md-6 col-lg-8">
              <div class="card">
                <div class="card__header">
                  <div class="chart chart--orange" >
                    <i class="material-icons" style="font-size: 60px; color: black;">directions_car</i>
                    <i class="material-icons" style="font-size: 60px; color: black;">trending_flat</i>
                    <i class="material-icons" style="font-size: 60px; color: black;">store</i>
                    <i class="material-icons" style="font-size: 60px; color: black;">trending_flat</i>
                    <i class="material-icons" style="font-size: 60px; color: black;">attach_money</i>
                    <i class="material-icons"style="font-size: 60px; color: black;">attach_money</i>
                    <i class="material-icons" style="font-size: 60px; color: black;">attach_money</i>

                   <!-- markup -->

                  </div>
                </div>
                <div id=deliv class="card__body">
                  <form class="form-horizontal" method= "post" action="database/deliveriesP.php">
                    <div class="form-group">
                      <label class="control-label col-sm-4" for="color">Customer Type:</label>
                      <div class="col-sm-6">
                        <select class="eggcolour" name="payType" id= "payType">
                          <option value="Cash">Cash </option>
                          <option value="Account">Account</option>
                          <option value="Part Payment">Part Payment </option>
                        </select>
                      </div>
                    </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" for="customername">Customer Name:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="customername" placeholder="Enter customer's name" name="customername">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" for="quantity">Quantity:</label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="quantity" placeholder="Enter the No. of eggs solds " name="quantity">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" for="unitprice">Price Per Egg:</label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="unitprice" placeholder="Enter unit price" name="unitprice">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-4" for="unitprice">Total $ Due:</label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="amntdue" placeholder="Enter total amount due" name="amntdue">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-4" for="unitprice">Total $ Paid:</label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="amntpaid" placeholder="Enter total amount paid" name="amntpaid">
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-3">
                      <button type="save" class="btn btn-default" name="deliv">Save</button><br><br>
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
               <div class="card__header" style="  background-image: linear-gradient(60deg, #ffa602, #fff)">

                </div>
                 <table class="table" >
                   <thead>
                     <h2 style="  background-image: linear-gradient(60deg, #ffa602, #fff)"> Deliveries History</h2>
                   </thead>
                   <form class="" action="index.html" method="post">
                     Search by: name:
                   </form>

                    <tbody>
                      <th> Date</th>
                      <th>Type</th>
                      <th>Name</th>
                      <th>Quantity</th>
                      <th>Unit Price</th>
                      <th>Total Due</th>
                      <th>Total Paid</th>
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

    </div>
  </footer>
</main>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.3/chartist.min.js'></script><script  src="./script.js"></script>

</body>
</html>
