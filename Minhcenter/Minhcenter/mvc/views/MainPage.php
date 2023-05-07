<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "share/head.php"; ?> 
</head>
<body>
    <?php include "pages/navigationbar.php"; ?> 


    <?php require_once "./mvc/views/pages/".$data["Page"].".php" ?>


    <?php include "pages/footerbar.php"; ?> 

</body>
    <?php include "share/footer.php"; ?> 
</html>