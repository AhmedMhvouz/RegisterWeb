<?php

    
include('connect.php');
session_start();
session_unset();
session_destroy();
header('location:https://localhost/RegisterWeb/index.php');

    

?>