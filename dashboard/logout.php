<?php
require_once '../core/init.php';
session_destroy();
$_SESSION = array();
header("Location: ../index.php");
?>