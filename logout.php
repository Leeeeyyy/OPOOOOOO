<?php

@include 'once_db.php';

session_start();
session_unset();
session_destroy();

header('location: /Web System/Landing_Page/Register/Login/login.php');

?>