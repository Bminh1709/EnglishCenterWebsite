<header>
  <!-- Navbar -->
  <nav style="backdrop-filter: blur(10px);" class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
    <div class="container">
      <a class="navbar-brand" href="/home/main"><span style="color: #5e9693;">MB</span><span style="color: #fff;">Center</span></a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="/home/main">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#introduction">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/courses/current">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#staffs">Staffs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav d-flex flex-row">

        <?php if (isset($_SESSION['us_gmail']) && $_SESSION['us_gmail'] != "")
          {
        ?>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="#">
                <div class="popup" onclick="myFunction()"><i class="fas fa-shopping-cart"></i>
                  <div class="popuptext" id="myPopup">

              <div class="card">
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Name</th>
                      <th style="width: 40px">Price</th>
                    </tr>
                  </thead>
                  <tbody>
        <?php
            foreach ($_SESSION['arrCart'] as $cartDetail) 
            {
        ?> 
              
                    <tr>
                      <td><img src="/<?php echo $cartDetail["co_img"];?>" style="width:70px;"></td>
                      <td><?php echo $cartDetail["co_name"];?></td>
                      <td><?php echo $cartDetail["co_price"];?></td>
                    </tr>
                  
        <?php
            }
        ?> 
        </tbody>
                </table>
              </div>
              
              <button type="button" onclick="location.href='/courses/invoice'" class="btn" style="background-color:#649996; font-weight:400; color:#fff;">View Order</button>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
                  </div>
                </div>
              </a>
            </li>
        <?php
          }
        ?> 


          


          <!-- STATE OF USER LOGIN SUCCESS -->
          <?php include "UserLoginState.php"; ?> 

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

</header>