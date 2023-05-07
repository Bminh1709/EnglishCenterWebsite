<!-- Profile Image -->
<div class="card card-primary card-outline">
<div class="card-body box-profile">




  <div class="text-center">
    <img class="profile-user-img img-fluid img-circle"
          src="<?php echo $data["arrAdmin"]["ad_img"];?>"
          alt="User profile picture">
  </div>
  <h3 class="profile-username text-center"><?php echo $data["arrAdmin"]["ad_lastname"] .' '. $data["arrAdmin"]["ad_firstname"];?></h3>

  <p class="text-muted text-center"><?php echo $data["arrAdmin"]["ad_gmail"];?></p>

  <ul class="list-group list-group-unbordered mb-3">
      <li class="list-group-item">
          <b>Id Admin</b> <a class="float-right"><?php echo $data["arrAdmin"]["ad_id"];?></a>
      </li>
      <li class="list-group-item">
          <b>Last Name</b> <a class="float-right"><?php echo $data["arrAdmin"]["ad_lastname"];?></a>
      </li>
      <li class="list-group-item">
          <b>First Name</b> <a class="float-right"><?php echo $data["arrAdmin"]["ad_firstname"];?></a>
      </li>
  </ul>


  <a href="#" class="btn btn-primary btn-block btn__green"><b>Edit Info</b></a>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->