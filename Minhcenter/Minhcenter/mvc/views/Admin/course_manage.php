</div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="card">
        <div class="card-header p-2">
          <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="/Admin/Home" data-toggle="tab">Courses</a></li>
            <li class="nav-item"><a class="nav-link" href="/Admin/Add" data-toggle="tab">Add Courses</a></li>
            <li class="nav-item"><a class="nav-link" href="/Admin/Orders" data-toggle="tab">Orders</a></li>
          </ul>
        </div><!-- /.card-header -->
        
        <div class="card-body">
        <div class="tab-content">





        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Courses Table</h3>

                <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Teacher</th>
                      <th style="width:100px;">Start Day</th>
                      <th style="width:100px;">End Day</th>
                      <th style="width:200px;">Description</th>
                      <th>Price</th>
                      <th>Image</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php 
                    foreach ($data["arrCourses"] as $courseDetail) 
                    {
                  ?>

                    <tr>
                      <td><?php echo $courseDetail["co_Id"];?></td>
                      <td><?php echo $courseDetail["co_name"];?></td>
                      <td><?php echo $courseDetail["co_teacher"];?></td>
                      <td><?php echo $courseDetail["co_startday"];?></td>
                      <td><?php echo $courseDetail["co_endday"];?></td>
                      <td><?php echo $courseDetail["co_des"];?></td>
                      <td><?php echo $courseDetail["co_price"];?></td>
                      <td><img class="img_course" style="height:150px; width:200px;object-fit:cover;" 
                          src="/<?php echo $courseDetail["co_img"];?>">
                      </td>
                      <td style="display:flex; justify-content:center; border:none;">
                          <a href="/Admin/update/<?php echo $courseDetail["co_Id"];?>">
                          <i style="margin-top:4px; color:#345971;" class="fas fa-edit"></i></a>
                      </td>
                      <td>
                          <a href="deleteCourse/<?php echo $courseDetail["co_Id"];?>" onclick="return deleteConfirm();">
                          <i style="margin-left:17px; color:#d63031;" class="fas fa-trash-alt"></i></a>
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





        