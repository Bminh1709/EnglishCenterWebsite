<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "share/head.php"; ?> 
</head>
<body>
    <?php include "pages/navigationbar.php"; ?> 


    <!-- <img style="height:640px; object-fit:cover;" src="/public/images/teachers.jpg" class="d-block w-100" alt="..."> -->

    <div class="container section-title-container" >
        <h2 class="section-title section-title-center">
            <span class="section-title-main" style="font-size:130%;color:rgb(0, 0, 0); margin-top:30px;">CURRENT COURSES IN OUR CENTER</span>
            <div id="courses"></div>
        </h2></div>
    <div>
        <p class="title" style="text-align: center;margin-bottom: 40px;"><span style="font-size: 95%;">THE BEST PLACE TO FULFIL YOUR POTENTIAL </span></p> 
    </div>


    <!-- Search bar -->
    <section class="content">
            <div class="container-fluid">
                <h4 class="text-center">Search your course</h4>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="" method="POST">
                            <div class="input-group">
                                <input type="search" class="form-control form-control-lg" name="co_keyword" placeholder="Type your keywords here">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <?php require_once "./mvc/views/pages/".$data["Page"].".php" ?>


    <?php include "pages/footerbar.php"; ?> 

</body>
    <?php include "share/footer.php"; ?> 
</html>