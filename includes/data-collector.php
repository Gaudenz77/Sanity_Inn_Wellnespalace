<?php 
session_start();
include './includes/tools.php';
if (isset($_POST["lastPageID"])) {
$lastPageID = $_POST["lastPageID"];
$_SESSION[$lastPageID] = $_POST;
}

// DEVONLY: Gibt die aktuelle Session in die Seite aus zum checken
prettyprint($_SESSION);
?>