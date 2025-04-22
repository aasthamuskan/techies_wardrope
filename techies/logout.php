<?php
include("component/nav.php");

$name="user";
session_start();
session_unset();
session_destroy();
header("location: home.php");
exit;


?>