<img style="height:620px; object-fit:cover;" src="/public/images/banner2.png" class="d-block w-100" alt="...">

<div class="container section-title-container" >
    <h2 class="section-title section-title-center">
        <span class="section-title-main" style="font-size:130%;color:rgb(0, 0, 0);">CURRENT COURSES IN OUR CENTER</span>
        <div id="courses"></div>
    </h2></div>
<div>
    <p class="title" style="text-align: center;margin-bottom: 40px;"><span style="font-size: 95%;">THE BEST PLACE TO FULFIL YOUR POTENTIAL </span></p> 
</div>


<!-- Main content -->
<section class="content" style="width:80%; margin:auto; margin-bottom:50px;">
<!-- Default box -->
<div class="card card-solid">
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-sm-6">
        <div class="col-12" style="margin:auto;">
          <img src="/<?php echo $data["arrCourseDetail"]["co_img"];?>" style="width:560px; border-radius:15px;" class="product-image" alt="Product Image">
        </div>
      </div>
      <div class="col-12 col-sm-6">
        <h3 class="my-3"><?php echo $data["arrCourseDetail"]["co_name"];?></h3>
        <p><?php echo $data["arrCourseDetail"]["co_des"];?></p>

        <hr>

        <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
                <b>Teacher</b> <a class="float-right"><?php echo $data["arrCourseDetail"]["co_teacher"];?></a>
            </li>
            <li class="list-group-item">
                <b>Start Day</b> <a class="float-right"><?php echo $data["arrCourseDetail"]["co_startday"];?></a>
            </li>
            <li class="list-group-item">
                <b>End Day</b> <a class="float-right"><?php echo $data["arrCourseDetail"]["co_endday"];?></a>
            </li>
        </ul>

        <div class="bg-gray py-2 px-3 mt-4">
          <h5 class="mb-0">
            Price - <?php echo $data["arrCourseDetail"]["co_price"];?>VND
          </h5>
        </div>

        <div class="mt-4">
          <div class="btn btn-primary btn-lg btn-flat">
            <a href="/courses/addCart/<?php echo $data["arrCourseDetail"]["co_Id"];?>" style="text-decoration:none;color:unset;"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Join Course</a>
          </div>
        </div>


      </div>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>
<!-- /.content -->