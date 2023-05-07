<!-- BODY - COURSES -->
<section class="courses-container">

    <div class="row courses-container-inside">

    <?php 
        foreach ($data["arrCoursesShow"] as $courseDetailShow) 
        {
    ?>



        <div class="course-container">
        <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="/<?php echo $courseDetailShow["co_img"];?>" alt="Dist Photo 1" style="width:375px; height:375px; object-fit:cover;">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
                <div class="container-text-courses shadow-lg">
                    <h5 class="card-title text-primary text-dark"><?php echo $courseDetailShow["co_name"];?></h5>
                    <p class="card-text text-dark pb-2 pt-1"><?php echo $courseDetailShow["co_des"];?></p>
                    <a href="/courses/detail/<?php echo $courseDetailShow["co_Id"];?>" class="text-dark">More information</a>
                </div>
            </div>
        </div>
        </div>


    <?php 
        }
    ?>

    </div>
</section>











  <div style="margin-bottom:50px"></div>