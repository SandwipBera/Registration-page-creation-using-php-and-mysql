<?php
require 'conn.php';
$_session=[];
session_unset();
session_destroy();
header("Location:login.php")
?>