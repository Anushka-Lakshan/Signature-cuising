<?php

if( !isset($_SESSION['Customer_Id'])){
    header("Location: /login");
    die;
}

include("app/views/my-account.view.php");