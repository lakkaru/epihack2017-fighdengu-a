<?php
session_start();
ob_start();
session_unset();
session_destroy();
unset($_SESSION['center_no']);
unset($_SESSION['center_id']);
header("Location:index.php");
?>