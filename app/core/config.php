<?php

//database name
define('DB_NAME', "Signature");
define('DB_HOST', "Localhost");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_TYPE', "mysql");


define('DEBUG', true);
if(DEBUG){
    ini_set('display_errors', 1);
}else{
    ini_set('display_errors', 0);
}