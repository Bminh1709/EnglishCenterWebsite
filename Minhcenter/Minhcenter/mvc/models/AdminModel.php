<?php
class AdminModel extends DB{

    
    public function validateGmailPass($ad_gmail, $ad_pass)
    {
        
        $sq = "SELECT * FROM admin WHERE ad_gmail='$ad_gmail' and ad_pass='$ad_pass'";
        $res = mysqli_query($this->con,$sq);

        if(mysqli_num_rows($res)==1)
            {
                $_SESSION['AdminLoginSuccess']="You loged in successfully";
                $_SESSION['emailAdmin'] = $ad_gmail;
                // Show session at the same time
                // header("Location:/Admin/login");
                echo "<script>window.location.href='/Admin/login';</script>";
            }
            else 
            {
                $_SESSION['AdminLoginFail']="Check your gmail and password again";
                // Show session at the same time
                // header("Location:/Admin/login");
                echo "<script>window.location.href='/Admin/login';</script>";
            }
    }

    public function getAdmin($ad_gmail)
    {
        $arr;

        $sq = "SELECT * FROM admin WHERE ad_gmail='$ad_gmail'";
        $res = mysqli_query($this->con,$sq);

        while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
            {
                $arr = array(
                    'ad_id' => $row["ad_id"],
                    'ad_firstname' => $row["ad_firstname"],
                    'ad_lastname' => $row["ad_lastname"],
                    'ad_gmail' => $row["ad_gmail"],
                    'ad_img' => $row["ad_img"]
                );
            }
        $_SESSION['arrAdminInfo'] = $arr;
        return $arr;
    }

}
?>