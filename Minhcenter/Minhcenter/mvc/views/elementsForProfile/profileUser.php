<!-- Profile Image -->
<div style="width:300px;">
        <div class="card card-primary card-outline">
        <div class="card-body box-profile">
        <div class="text-center">
            <img class="profile-user-img img-fluid img-circle"
                src="/<?php echo $_SESSION['us_img'];?>"
                alt="User profile picture">
        </div>
        <h3 class="profile-username text-center"></h3>

        <p class="text-muted text-center"></p>

        <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
                <b>Name</b><a class="float-right"><?php echo $_SESSION['us_lastname']." ".$_SESSION['us_firstname'];?></a>
            </li>
            <li class="list-group-item">
                <b>Gmail</b><a class="float-right"><?php echo $_SESSION['us_gmail'];?></a>
            </li>
            <li class="list-group-item">
                <b>Phone</b><a class="float-right"><?php echo $_SESSION['us_phone'];?></a>
            </li>
            <li class="list-group-item">
                <b>Gender</b><a class="float-right"><?php echo $_SESSION['us_gender'];?></a>
            </li>
        </ul>
        <a href="#" class="btn btn-primary btn-block btn__green"><b>Edit Info</b></a>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>