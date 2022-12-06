<?php
    
    //check user login or nor
    if(!isset($_SESSION['user']))
    {
        $_SESSION['no-login-message'] = "<div class='error'>Please Login for access user</div>";

        header('location: ../view/loginAdmin.php');
    }
?>