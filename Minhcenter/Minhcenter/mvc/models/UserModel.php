<?php
class UserModel extends DB{

    public function getInfoUser($us_gmail)
    {
        $sq = "SELECT * FROM user WHERE us_gmail='$us_gmail'";
        $res = mysqli_query($this->con,$sq);

        while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
            {
                $_SESSION['us_id']=$row["us_id"];
                $_SESSION['us_firstname']=$row["us_firstname"];
                $_SESSION['us_lastname']=$row["us_lastname"];
                $_SESSION['us_gmail']=$row["us_gmail"];
                $_SESSION['us_phone']=$row["us_phone"];
                $_SESSION['us_gender']=$row["us_gender"];
                $_SESSION['us_img']=$row["us_img"];
            }
    }
    
    public function validateGmailPass($us_gmail, $us_pass)
    {
        
        $sq = "SELECT * FROM user WHERE us_gmail='$us_gmail' and us_pass='$us_pass'";
        $res = mysqli_query($this->con,$sq);

        if(mysqli_num_rows($res)==1)
            {
                $_SESSION['UserLoginSuccess']="You loged in successfully";
                // $_SESSION['emailAdmin'] = $ad_gmail;
                // Show session at the same time
                // header("Location:/Admin/login");
                echo "<script>window.location.href='/user/login';</script>";
            }
            else 
            {
                $_SESSION['UserLoginFail']="Check your gmail and password again";
                // Show session at the same time
                // header("Location:/Admin/login");
                echo "<script>window.location.href='/user/login';</script>";
            }
    }

    public function AddUser($arr)
    {
        $sq = "SELECT * FROM `user` WHERE us_gmail='$arr[us_gmail]' ";
        $res = mysqli_query($this->con,$sq);
        
            if(mysqli_num_rows($res)==0)
            {
                mysqli_query($this->con, "INSERT INTO `user`(`us_id`, `us_firstname`, `us_lastname`, `us_gmail`, `us_pass`, `us_phone`, `us_gender`, `us_img`) 
                VALUES (NULL,'$arr[us_firstname]','$arr[us_lastname]','$arr[us_gmail]','$arr[us_pass]','$arr[us_phone]','$arr[us_gender]','$arr[us_img]')") 
                or die(mysqli_error($this->con));

                $_SESSION['SignupSuccess']="Sign Up Success";
                echo "<script>window.location.href='/User/signup';</script>";
            }
            else
            {
                $_SESSION['SignupFail'] = "Email exists, use another one!";
                echo "<script>window.location.href='/User/signup';</script>";
            }
    }

}
?>