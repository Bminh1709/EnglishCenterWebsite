<?php
class Courses extends Controller{

    public function current()
    {
        $getAllCourses = $this->model("ManageCourses");
        $arrAllCourses = $getAllCourses->getCourses();

        if (isset($_SESSION['us_gmail']) && $_SESSION['us_gmail'] != "")
        {
            $this->getCart();
        }


        if(isset($_POST["co_keyword"]))
        {
            $co_keyword = $_REQUEST['co_keyword'];

            // Call model
            $getCourseByKey = $this->model("ManageCourses");
            $arrCourseKey = $getCourseByKey->getCourseByKey($co_keyword);

            if(!empty($arrCourseKey))
            {
                $this->view("CoursesPage",[
                    "title"=>"Manage Courses",
                    "Page"=>"courses",
                    "arrCoursesShow"=>$arrCourseKey
                    ]);
            }
            else
            {
                $this->view("CoursesPage",[
                    "title"=>"Page not found",
                    "Page"=>"notFound"
                    ]);
            }

        }
        else if (isset($_POST["co_keyword"]) == "")
        {
            $this->view("CoursesPage",[
                "title"=>"Manage Courses",
                "Page"=>"courses",
                "arrCoursesShow"=>$arrAllCourses
                ]);

        }
    }


    public function detail($co_Id)
    {
        $getCourseDetail = $this->model("ManageCourses");
        $getCourseDetailArr = $getCourseDetail->getCourse($co_Id);

        $this->view("MainPage",[
                "title"=>"Course Detail",
                "Page"=>"courseDetail",
                "arrCourseDetail"=>$getCourseDetailArr
        ]);

    }

    public function invoice()
    {
        $getCourseCart = $this->model("ManageCourses");
        // $CourseCartArr = $getCourseCart->getCourseFromCart($co_Id);

        list($CourseCartArr, $totalPrice) = $getCourseCart->getCourseFromCart();

        $this->getCart();

        $this->view("MainPage",[
                "title"=>"Invoice",
                "Page"=>"invoice",
                "CourseCartArr"=>$CourseCartArr,
                "totalPrice"=>$totalPrice
        ]);

    }

    public function saveToOrder()
    {
        $saveToOrder = $this->model("ManageCourses");
        list($CourseCartArr, $totalPrice) = $saveToOrder->getCourseFromCart();
        $saveToOrder->saveToOrder($totalPrice);

        header("location:/user/profile");
    }


    public function deleteCourseInCart($id_course)
    {
        $deleCourse = $this->model("ManageCourses");
        $deleCourse->deleteCourseInCart($id_course);
    }


    public function addCart($co_Id)
    {
        $addToCart = $this->model("ManageCourses");
        $addToCart->addCart($co_Id,$_SESSION['us_id']);
    }


    public function getCart()
    {
        $getCart = $this->model("ManageCourses");
        $arrCart = $getCart->getCart();
    }
}
?>