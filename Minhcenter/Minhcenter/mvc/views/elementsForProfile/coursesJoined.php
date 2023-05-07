    <!-- TABLES -->
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Joined Courses</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 500px; width: 1000px;">
                <table class="table table-head-fixed text-wrap">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Teacher</th>
                        <th style="width:100px;">Join Day</th>
                        <th style="width:200px;">Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>State</th>
                    </tr>
                  </thead>
                  <tbody>


                  <?php 
                    foreach ($data["arrCourseJoin"] as $coursesJoinedDetail) 
                    {
                  ?>


                    <tr>
                      <td><?php echo $coursesJoinedDetail["co_Id"];?></td>
                      <td><?php echo $coursesJoinedDetail["co_name"];?></td>
                      <td><?php echo $coursesJoinedDetail["co_teacher"];?></td>
                      <td><?php echo $coursesJoinedDetail["or_dayjoin"];?></td>
                      <td><?php echo $coursesJoinedDetail["co_des"];?></td>
                      <td><?php echo $coursesJoinedDetail["co_price"];?></td>
                      <td>
                          <img class="img_course" style="height:150px; width:200px;object-fit:cover;" 
                          src="/<?php echo $coursesJoinedDetail["co_img"];?>">  
                      </td>
                      <td>
                        <?php if ($coursesJoinedDetail["or_state"] == "paid")
                              {
                        ?> 
                        <i style="color:green; margin-left:10px;" class="fas fa-check-circle"></i>
                        <?php 
                              }
                              else
                              {
                        ?>
                        <i style="color:red; margin-left:10px;" class="fas fa-times-circle"></i>
                        <?php 
                              }
                        ?>
                    </tr>




                  <?php 
                    }
                  ?>



                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->