</div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="card">
        <div class="card-header p-2">
          <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link" href="/Admin/Home" data-toggle="tab">Courses</a></li>
            <li class="nav-item"><a class="nav-link" href="/Admin/Add" data-toggle="tab">Add Courses</a></li>
            <li class="nav-item"><a class="nav-link active" href="/Admin/Orders" data-toggle="tab">Orders</a></li>
          </ul>
        </div><!-- /.card-header -->
        
        <div class="card-body">
        <div class="tab-content">


        

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Confirm Orders</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Image</th>
                      <th>#Order</th>
                      <th>#User</th>
                      <th>Name</th>
                      <th>Gmail</th>
                      <th>Phone</th>
                      <th>Day Join</th>
                      <th>Price</th>
                      <th>Paid</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php 
                    foreach ($data["Orders"] as $Order) 
                    {
                  ?>

                    <tr>
                    <td><img class="img_course" style="height:100px; width:100px;object-fit:cover; padding:3px; border: 2px solid #adb5bd;" 
                          src="/<?php echo $Order["us_img"];?>">
                      </td>
                      <td><?php echo $Order["or_id"];?></td>
                      <td><?php echo $Order["us_id"];?></td>
                      <td><?php echo $Order["us_firstname"];?></td>
                      <td><?php echo $Order["us_gmail"];?></td>
                      <td><?php echo $Order["us_phone"];?></td>
                      <td><?php echo $Order["or_dayjoin"];?></td>
                      <td><?php echo $Order["or_price"];?></td>
                      <td style="display:flex; justify-content:center; border:none;">
                          <a href="/Admin/setConfirm/<?php echo $Order["or_id"];?>">
                          <i style="margin-top:4px; color:#345971;" class="fas fa-user-check fa-lg"></i></a>
                      </td>
                    </tr>
                  </tbody>

                  <?php 
                    }
                  ?>
                 

                </table>
                  </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

        