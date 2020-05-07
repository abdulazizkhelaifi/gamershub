<?php

session_start(); /* Starts the session */
session_destroy(); /* Destroy started session */
header("location:/gamingWebsite-php/website/web/index.php");
exit();
?>