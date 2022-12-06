<?php
    //include the db
    include('../model/constants.php');

    //distroy the session 
    session_destroy();

    //redirect to login page
    header('location: ../view/loginType.php');
?>