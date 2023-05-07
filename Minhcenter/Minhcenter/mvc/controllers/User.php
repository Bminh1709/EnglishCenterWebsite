<?php
class User extends Controller
{

    // Form Login
    public function login()
    {
        $this->view("AccessUser",[
            "Page"=>"us_login",
            "title"=>"Login form for User"
        ]);

        if(isset($_POST['btn-us-login']))
        {
            $us_gmail = $_POST['us_gmail'];
            $us_pass = $_POST['us_pass'];

            // Validate User gmail and pass
            $checkUserExist = $this->model("UserModel");
            $checkUserExist->validateGmailPass($us_gmail, $us_pass);

            // Get Info of User
            $getInfoUser = $this->model("UserModel");
            $getInfoUser->getInfoUser($us_gmail);

            echo $_SESSION['us_firstname'];
        }
    }

    public function signup()
    {

        $this->view("AccessUser",[
            "Page"=>"us_signup",
            "title"=>"Register form for User"
        ]);

        if(isset($_POST['btn-us-signup']))
                {
                    $us_firstname = $_POST['us_firstname']; 
                    $us_lastname = $_POST['us_lastname']; 
                    $us_gmail = $_POST['us_gmail']; 
                    $us_pass = $_POST['us_pass']; 
                    $us_phone = $_POST['us_phone']; 
                    $us_gender = $_POST['us_gender'];
                    // Get url of Image
                    $us_img = basename($_FILES['us_img']['name']);

                    // Upload files
                    $target_dir = "public/images/img_user/";
                    $target_file = $target_dir . $us_img;
                    
                    move_uploaded_file($_FILES["us_img"]["tmp_name"], $target_file);

                    $arr = array(
                        'us_firstname' => $us_firstname,
                        'us_lastname' => $us_lastname,
                        'us_gmail' => $us_gmail,
                        'us_pass' => $us_pass,
                        'us_phone' => $us_phone,
                        'us_gender' => $us_gender,
                        'us_img' => $target_file
                    );

                    $AddUser = $this->model("UserModel");
                    $AddUser->AddUser($arr);
                    } 
    }

    // Form Login
    public function profile()
    {
        $getCoursesJoinArr = $this->model("ManageCourses");
        $CoursesJoinArr = $getCoursesJoinArr->getCoursesJoined($_SESSION['us_id']);

        $this->view("MainPage",[
            "Page"=>"profile",
            "title"=>"Profile",
            "arrCourseJoin"=>$CoursesJoinArr
        ]);
    }

    // Log out
    public function logout()
    {
        session_destroy(); //destroy the session
        header("location:/home/main"); //to redirect back to "index.php" after logging out
        exit();
    }

}