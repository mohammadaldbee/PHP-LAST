<?php

session_start();
session_unset();
session_destroy();
?>
<?php
if(empty($_SESSION['name']) || $_SESSION['name'] == ''){
    header("Location:index.php");
    die();
}