<?php
// Check if session has been started, if not then start
if(!isset($_SESSION))
{
    session_start();
}

// Set global session variables.
$_SESSION["sql_user"] = "nnoble_nrnoble";
$_SESSION["sql_database"] = "nnoble_profile";
$_SESSION["sql_password"] = "J\$p1ter2";

//user admin account
$_SESSION["user_admin"] = "admin";
$_SESSION["user_admin_password"] = "@dm1n";

// email
$_SESSION["email_subject"] = "Thank you!";

$_SESSION["email_from"] =  "nnoble@greenrivertech.net";
#$_session["email_from"] = "kaneses@greenrivertech.net";
$_SESSION["email_cc"] = "neal@nnoble.greenrivertech.net";
$_SESSION["site_HTTP_REFERER"] = "nnoble.greenrivertech.net";





?>