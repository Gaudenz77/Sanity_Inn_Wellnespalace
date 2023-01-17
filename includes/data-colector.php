<?php
session_start();
include 'includes/tools.php';
if (isset($_POST['lastPageID'])) {
    $lastPageID = $_POST['lastPageID'];
    $_SESSION[$lastPageID] = $_POST;
}
prettyPrint($_SESSION);
?>