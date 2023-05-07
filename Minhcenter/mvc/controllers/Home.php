<?php
class Home extends Controller{

    public function main()
    {
        if (isset($_SESSION['us_gmail']) && $_SESSION['us_gmail'] != "")
        {
            $this->getCart();

            $this->view("MainPage",[
                "title"=>"Main Page",
                "Page"=>"home"
            ]);
        }
        else
        {
            $this->view("MainPage",[
                "title"=>"Main Page",
                "Page"=>"home"
            ]);
        }

    }

    public function getCart()
    {
        $getCart = $this->model("ManageCourses");
        $arrCart = $getCart->getCart();
    }

}
?>