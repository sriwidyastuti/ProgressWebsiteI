<?php

session_start();
session_destroy();
$url="http://localhost/web-main";
header('Location: '.$url.'/admin/index.php');
?>