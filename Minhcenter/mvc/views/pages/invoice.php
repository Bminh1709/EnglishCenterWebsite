<img style="height:640px; object-fit:cover;" src="/public/images/banner3.png" class="d-block w-100" alt="...">

<section class="content" style="width:90%; border: 1px #cbc6c6 solid; margin:40px auto; border-radius:15px;">
      <div class="container-fluid">


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row" style="margin-bottom:20px;">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> MB Center, Inc.
                    <small class="float-right">Date: <?php echo date("Y/m/d"); ?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Teacher</th>
                      <th>Start Day</th>
                      <th>End Day</th>
                      <th>Image</th>
                      <th>Price</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>


                    <?php 
                    foreach ($data["CourseCartArr"] as $coursecart) 
                    {
                    ?>


                    <tr>
                      <td><?php echo $coursecart["co_Id"];?></td>
                      <td><?php echo $coursecart["co_name"];?></td>
                      <td><?php echo $coursecart["co_teacher"];?></td>
                      <td><?php echo $coursecart["co_startday"];?></td>
                      <td><?php echo $coursecart["co_endday"];?></td>
                      <td><img src="/<?php echo $coursecart["co_img"];?>" style="width:200px;"></td>
                      <td><?php echo $coursecart["co_price"];?></td>
                      <td><a href="deleteCourseInCart/<?php echo $coursecart["co_Id"];?>" onclick="return deleteConfirm();">
                          <i style="margin-left:17px; color:#d63031;" class="fas fa-trash-alt"></i></a></td>
                    </tr>


                    <?php 
                    }
                    ?>


                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6" style="text-align:center;">
                  <p class="lead">Payment Methods:</p>
                  <img src="/public/images/bank.jpg" style="width:500px;border-radius:20px;" alt="Visa">
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due 2/22/2014</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td><?php echo $data["totalPrice"]; ?></td>
                      </tr>
                      <tr>
                        <th>Tax (9.3%)</th>
                        <td>0 VND</td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>0 VND</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td><?php echo $data["totalPrice"]; ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="/courses/saveToOrder"><button onclick="return paymentConfirm();" name="btn-order" type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button></a>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->