<?php
class ManageCourses extends DB{

    public function getCourses()
    {
        
        $getCoursesArr = array();

        $sq = "SELECT * FROM courses";
        $res = mysqli_query($this->con,$sq);

        while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
            {
                $arr = array(
                    'co_Id' => $row["co_Id"],
                    'co_name' => $row["co_name"],
                    'co_teacher' => $row["co_teacher"],
                    'co_startday' => $row["co_startday"],
                    'co_endday' => $row["co_endday"],
                    'co_des' => $row["co_des"],
                    'co_price' => $row["co_price"],
                    'co_img' => $row["co_img"]
                );
                array_push($getCoursesArr, $arr);
            }
        return $getCoursesArr;
    }

    public function deleteCourse($id_course)
    {
        mysqli_query($this->con,"DELETE FROM `courses` WHERE co_Id ='$id_course'");
        header("Location:/Admin/home");
    }

    public function AddCourse($arr)
    {
        $sq = "SELECT * FROM `courses` WHERE co_Id='$arr[co_Id]' ";
        $res = mysqli_query($this->con,$sq);
        
            if(mysqli_num_rows($res)==0)
            {
                mysqli_query($this->con, "INSERT INTO `courses`(`co_Id`, `co_name`, `co_teacher`, `co_startday`, `co_endday`, `co_des`, `co_price`, `co_img`) 
                VALUES ('$arr[co_Id]','$arr[co_name]','$arr[co_teacher]','$arr[co_startday]','$arr[co_endday]','$arr[co_des]','$arr[co_price]','$arr[co_img]')") 
                or die(mysqli_error($this->con));

                // $_SESSION['AddCourseSuccess']="The course has been added";
                echo '<script>alert("The course has been added")</script>';
            }
            else
            {
                // $_SESSION['AddCourseFail'] = "The course alreay exists";
                echo '<script>alert("The course alreay exists")</script>';
            }
    }

    public function UpdateCourse($arr)
    {
        mysqli_query($this->con, "UPDATE `courses` SET `co_name`='$arr[co_name]',`co_teacher`='$arr[co_teacher]',`co_startday`='$arr[co_startday]',
        `co_endday`='$arr[co_endday]',`co_des`='$arr[co_des]',`co_price`='$arr[co_price]' WHERE co_Id='$arr[co_Id]'") 
        or die(mysqli_error($this->con));

        echo '<script>alert("The course has been updated")</script>';
        echo "<script>window.location.href='/Admin/home';</script>";
    }

    public function getCourse($id_course)
    {
        $arr = [];

        $sq = "SELECT * FROM courses where co_Id='$id_course'";
        $res = mysqli_query($this->con,$sq);

        while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
        {
            $arr = array(
                'co_Id' => $id_course,
                'co_name' => $row["co_name"],
                'co_teacher' => $row["co_teacher"],
                'co_startday' => $row["co_startday"],
                'co_endday' => $row["co_endday"],
                'co_des' => $row["co_des"],
                'co_price' => $row["co_price"],
                'co_img' => $row["co_img"]
            );
        }
        return $arr;
    }



    public function getCoursesJoined($us_id)
    {
        
        $getCoursesJoinArr = array();

        $sq = "SELECT c.co_Id, c.co_name, c.co_teacher, c.co_des, c.co_price, c.co_img, o.or_dayjoin, o.or_state 
                FROM `orders` o
                LEFT JOIN `user_wait` t on t.us_id = o.us_id
                LEFT JOIN courses c on c.co_Id = t.co_Id
                WHERE t.us_id = '$us_id' and t.or_id = o.or_id;";
        $res = mysqli_query($this->con,$sq);

        while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
            {
                $arr = array(
                    'co_Id' => $row["co_Id"],
                    'co_name' => $row["co_name"],
                    'co_teacher' => $row["co_teacher"],
                    'co_des' => $row["co_des"],
                    'co_price' => $row["co_price"],
                    'co_img' => $row["co_img"],
                    'or_dayjoin' => $row["or_dayjoin"],
                    'or_state' => $row["or_state"]
                );
                array_push($getCoursesJoinArr, $arr);
            }
        return $getCoursesJoinArr;
    }

    public function getCourseByKey($co_keyword)
    {
        $getCoursesKeyArr = array();

        $sq = "SELECT * FROM `courses` WHERE co_name like '%$co_keyword%' or co_des like '%$co_keyword%'";
        $res = mysqli_query($this->con,$sq);

        while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
            {
                $arr = array(
                    'co_Id' => $row["co_Id"],
                    'co_name' => $row["co_name"],
                    'co_teacher' => $row["co_teacher"],
                    'co_startday' => $row["co_startday"],
                    'co_endday' => $row["co_endday"],
                    'co_des' => $row["co_des"],
                    'co_price' => $row["co_price"],
                    'co_img' => $row["co_img"]
                );
                array_push($getCoursesKeyArr, $arr);
            }
        return $getCoursesKeyArr;
    }


    public function addCart($co_Id)
    {
        $sq = "SELECT * FROM `user_cart` WHERE `us_id`='$_SESSION[us_id]' and `co_Id`= '$co_Id'";
        $res = mysqli_query($this->con,$sq);

        if(mysqli_num_rows($res)==0)
            {
                mysqli_query($this->con, "INSERT INTO `user_cart`(`cart_id`, `co_Id`, `us_id`) 
                VALUES (NULL,'$co_Id','$_SESSION[us_id]')") 
                or die(mysqli_error($this->con));

                // $_SESSION['AddCourseSuccess']="The course has been added";
                echo '<script>alert("The course has been added to your cart")</script>';
                echo "<script>window.location.href='/courses/current';</script>";

            }
            else
            {
                // $_SESSION['AddCourseFail'] = "The course alreay exists";
                echo '<script>alert("The course has existed in your cart")</script>';
                echo "<script>window.location.href='/courses/current';</script>";
            }
    }

    public function getCart()
    {
        $getCartArr = array();

        $sq = "SELECT c.co_img, c.co_name, c.co_price FROM `user_cart` ca
                LEFT join courses c on c.co_Id = ca.co_Id
                WHERE `us_id`='$_SESSION[us_id]' ";
        // $sq = "SELECT * FROM `user_cart` WHERE `us_id`='$_SESSION[us_id]'";
        $res = mysqli_query($this->con,$sq);

        while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
            {
                $arr = array(
                    'co_img' => $row["co_img"],
                    'co_name' => $row["co_name"],
                    'co_price' => $row["co_price"]
                );
                array_push($getCartArr, $arr);
            }
        $_SESSION['arrCart'] = $getCartArr;
    }

    public function getCourseFromCart()
    {
        $getCourseFromCartArr = array();
        $TotalPrice = 0;

        $sq = "SELECT c.co_Id, c.co_name, c.co_teacher, c.co_startday, c.co_endday, c.co_img, c.co_price 
                FROM `user_cart` ca
                LEFT JOIN courses c on c.co_Id = ca.co_Id
                WHERE `us_id`='$_SESSION[us_id]'";

        $res = mysqli_query($this->con,$sq);

        while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
            {
                $arr = array(
                    'co_Id' => $row["co_Id"],
                    'co_name' => $row["co_name"],
                    'co_teacher' => $row["co_teacher"],
                    'co_startday' => $row["co_startday"],
                    'co_endday' => $row["co_endday"],
                    'co_img' => $row["co_img"],
                    'co_price' => $row["co_price"]
                );
                array_push($getCourseFromCartArr, $arr);
            }

            foreach ($getCourseFromCartArr as $priceCourse) 
            {
                $TotalPrice += $priceCourse["co_price"];
            }


        return array($getCourseFromCartArr, $TotalPrice);
    }

    public function saveToOrder($totalPrice)
    {
        $getUser_cart = array();

        // Get data from Cart and then go to the next step (before verify-course will be in user_wait)
        $q_getUser_cart = "SELECT * FROM `user_cart` WHERE `us_id`='$_SESSION[us_id]'";
        $res = mysqli_query($this->con,$q_getUser_cart);

        while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
        {
            $arr = array(
                'co_Id' => $row["co_Id"],
                'us_id' => $row["us_id"]
            );
            array_push($getUser_cart, $arr);
        }

        $setOrder_Id;
        $sq = "SELECT * FROM `orders`";
        $res = mysqli_query($this->con,$sq);
        $setOrder_Id = mysqli_num_rows($res) + 1;


        // Save into orders
        $sq = "INSERT INTO `orders`(`or_id`, `us_id`, `or_price`, `or_dayjoin`, `or_state`) 
        VALUES ('$setOrder_Id', '$_SESSION[us_id]', '$totalPrice', CURRENT_TIMESTAMP, '0')";
        $res = mysqli_query($this->con,$sq);

        foreach ($getUser_cart as $cart) 
            {
                $sq = "INSERT INTO `user_wait`(`w_id`, `co_Id`, `us_id`,`or_id`) VALUES (NULL,'$cart[co_Id]','$cart[us_id]','$setOrder_Id')";
                $res2 = mysqli_query($this->con,$sq);
            }


        // Save data from Cart to user_wait 
        // Because cart can change everytime

    }

    public function getCoursesUnconfirm()
    {
        $getCoursesUnconfirm = array();

        $sq = "SELECT us.us_img, o.or_id, us.us_id, us.us_firstname, us.us_gmail, us.us_phone, o.or_dayjoin, o.or_price, o.or_state 
                    FROM `orders` o
                    LEFT JOIN user us on us.us_id = o.us_id
                    WHERE o.or_state = '0';";
        $res = mysqli_query($this->con,$sq);

        while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
            {
                $arr = array(
                    'us_img' => $row["us_img"],
                    'or_id' => $row["or_id"],
                    'us_id' => $row["us_id"],
                    'us_firstname' => $row["us_firstname"],
                    'us_gmail' => $row["us_gmail"],
                    'us_phone' => $row["us_phone"],
                    'or_dayjoin' => $row["or_dayjoin"],
                    'or_price' => $row["or_price"],
                    'or_state' => $row["or_state"]
                );
                array_push($getCoursesUnconfirm, $arr);
            }
        return $getCoursesUnconfirm;
    }

    public function updateConfirm($or_id)
    {
        mysqli_query($this->con,"UPDATE `orders` 
                        SET `or_state`='paid' 
                        WHERE or_id='$or_id'");
    }

    public function deleteCourseInCart($id_course)
    {
        mysqli_query($this->con,"DELETE FROM `user_cart` WHERE co_Id ='$id_course'");
        header("Location:/courses/invoice");
    }

}
?>