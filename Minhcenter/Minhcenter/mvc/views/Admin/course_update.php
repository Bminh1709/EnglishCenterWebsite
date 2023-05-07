</div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="card">
        <div class="card-header p-2">
          <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="/Admin/Home" data-toggle="tab">Update</a></li>
            <li class="nav-item"><a class="nav-link" href="/Admin/Add" data-toggle="tab">Add Courses</a></li>
            <li class="nav-item"><a class="nav-link" href="/Admin/Orders" data-toggle="tab">Orders</a></li>
          </ul>
        </div><!-- /.card-header -->
        
        <div class="card-body">
        <div class="tab-content">




        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update course</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form enctype="multipart/form-data" method="post">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input name="co_Id" type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo $data["course"]["co_Id"];?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="co_name" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data["course"]["co_name"];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Teacher</label>
                    <input name="co_teacher" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data["course"]["co_teacher"];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Start Day</label>
                    <input name="co_startday" type="date" class="form-control" id="exampleInputEmail1" value="<?php echo $data["course"]["co_startday"];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">End Day</label>
                    <input name="co_endday" type="date" class="form-control" id="exampleInputEmail1" value="<?php echo $data["course"]["co_endday"];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input name="co_des" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data["course"]["co_des"];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input name="co_price" type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $data["course"]["co_price"];?>">
                  </div>
                  <div class="form-group">
                    <!-- <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="co_img" type="file" accept="image/*" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div> -->
                      <label class="form-label">Image</label>
                      <input style="display:none;" id="img" type="file" accept="image/*" class="form-control" name="co_img"><span for="img" class="form-control" style="overflow: hidden;"><?php echo $data["course"]["co_img"];?></span>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="btn-update-course" class="btn btn-primary">Upfate</button>
                </div>
              </form>
            </div>
            <!-- /.card -->