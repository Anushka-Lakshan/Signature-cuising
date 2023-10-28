<?php

include("app/models/Branch.model.php");

$Branch = new Branch();

$AllBranches =$Branch::get_all();

$errors = [];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    show($_POST);
    
    include("app/models/Customer.model.php");

    $Customer = new Customer();

    $errors = $Customer::Reister();


}

include("app/views/register.view.php");

