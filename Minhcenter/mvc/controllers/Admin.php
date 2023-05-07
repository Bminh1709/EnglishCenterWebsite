<?php
class Admin extends Controller
{

    // Form Login
    public function login()
    {
        $this->view("AccessAdmin",[
            "Page"=>"ad_login",
            "title"=>"Login form for Admin"
        ]);


        if(isset($_POST['btn-ad-login']))
        {
            $ad_gmail = $_POST['ad_gmail'];
            $ad_pass = $_POST['ad_pass'];

            // Call model
            $checkAdminAc = $this->model("AdminModel");
            $checkAdminAc->validateGmailPass($ad_gmail, $ad_pass);
        }
    }

    // Main Page
    public function Home()
    {
        if (isset($_SESSION['emailAdmin']) && $_SESSION['emailAdmin'] != "")
        {
                $emailAdmin = $_SESSION['emailAdmin'];
                // Call model
                $getAdminInfo = $this->model("AdminModel");
                $arrAdmin = $getAdminInfo->getAdmin($emailAdmin);

                // Show all course that got below function
                // $arrCourses = $this->getCourses();
                $getCoursesArr = $this->model("ManageCourses");
                $arrCourses = $getCoursesArr->getCourses();

                $this->view("HomeAdmin",[
                    "title"=>"Home",
                    "Page"=>"course_manage",
                    "arrAdmin"=>$arrAdmin,
                    "arrCourses"=>$arrCourses
                ]);
        }
    }

    public function Add()
    {
        $this->view("HomeAdmin",[
                "title"=>"Add New Course",
                "Page"=>"course_add",
                // Use $_SESSION['arrAdminInfo'] because above function "Home" got the admin's information
                "arrAdmin"=>$_SESSION['arrAdminInfo']
        ]);

        if(isset($_POST['btn-add-course']))
                {
                    $co_Id = $_POST['co_Id']; 
                    $co_name = $_POST['co_name']; 
                    $co_teacher = $_POST['co_teacher']; 
                    $co_startday = $_POST['co_startday']; 
                    $co_endday = $_POST['co_endday']; 
                    $co_des = $_POST['co_des']; 
                    $co_price = $_POST['co_price'];
                    // Get url of Image
                    $co_img = basename($_FILES['co_img']['name']);

                    // Upload files
                    $target_dir = "public/images/img_course/";
                    $target_file = $target_dir . $co_img;
                    
                    move_uploaded_file($_FILES["co_img"]["tmp_name"], $target_file);

                    $arr = array(
                        'co_Id' => $co_Id,
                        'co_name' => $co_name,
                        'co_teacher' => $co_teacher,
                        'co_startday' => $co_startday,
                        'co_endday' => $co_endday,
                        'co_des' => $co_des,
                        'co_price' => $co_price,
                        'co_img' => $target_file
                    );

                    $AddCourses = $this->model("ManageCourses");
                    $AddCourses->AddCourse($arr);
                    } 
        
    }

    public function Update($id_course)
    {

        $getCourseInfo = $this->model("ManageCourses");
        $getCourseInfoArr = $getCourseInfo->getCourse($id_course);

        $this->view("HomeAdmin",[
            "title"=>"Update Course",
            "Page"=>"course_update",
            // Use $_SESSION['arrAdminInfo'] because above function "Home" got the admin's information
            "arrAdmin"=>$_SESSION['arrAdminInfo'],
            "course"=>$getCourseInfoArr
        ]);

        if(isset($_POST['btn-update-course']))
                {
                    $co_Id = $id_course; 
                    $co_name = $_POST['co_name']; 
                    $co_teacher = $_POST['co_teacher']; 
                    $co_startday = $_POST['co_startday']; 
                    $co_endday = $_POST['co_endday']; 
                    $co_des = $_POST['co_des']; 
                    $co_price = $_POST['co_price'];

                    $arr = array(
                        'co_Id' => $co_Id,
                        'co_name' => $co_name,
                        'co_teacher' => $co_teacher,
                        'co_startday' => $co_startday,
                        'co_endday' => $co_endday,
                        'co_des' => $co_des,
                        'co_price' => $co_price
                    );

                    $updateCourse = $this->model("ManageCourses");
                    $updateCourse->UpdateCourse($arr);
                    } 

    }


    public function Orders()
    {

        $getCoursesUnconfirm = $this->model("ManageCourses");
        $CoursesUnconfirm = $getCoursesUnconfirm->getCoursesUnconfirm();

        $this->view("HomeAdmin",[
            "title"=>"Confirm",
            "Page"=>"orders_manage",
            "arrAdmin"=>$_SESSION['arrAdminInfo'],
            "Orders"=>$CoursesUnconfirm
        ]);

    }

    public function setConfirm($or_id)
    {

        $updateConfirm = $this->model("ManageCourses");
        $updateConfirm->updateConfirm($or_id);

        header("location:/Admin/Home");

    }

    public function deleteCourse($id_course)
    {
        echo $id_course;
        $deleCourse = $this->model("ManageCourses");
        $deleCourse->deleteCourse($id_course);
    }


    // Log out
    public function logout()
    {
        session_destroy(); //destroy the session
        header("location:/admin/login"); //to redirect back to "index.php" after logging out
        exit();
    }

}
?>