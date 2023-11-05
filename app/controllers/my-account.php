<?php

if( !isset($_SESSION['Customer_Id'])){
    header("Location: ".BASE_URL."/login");
    die;
}

include("app/views/my-account.view.php");