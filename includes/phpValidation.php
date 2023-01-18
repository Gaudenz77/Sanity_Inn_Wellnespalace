<?php 
session_start();
include 'includes/tools.php';
prettyprint($_POST);
$lastPageID = $_POST["lastPageID"];
if (isset($_POST["lastPageID"])) {
    switch($_POST['type']){
        case 'range':
            $_SESSION[$lastPageID] = $_POST;
        case 'radio':
            $_SESSION[$lastPageID] = $_POST;
        case 'checkbox':
            $_SESSION[$lastPageID] = $_POST;
        case 'number':
            if((number_format($_POST['question6']) < 4) || (number_format($_POST['question6']) > 10)){
                $_SESSION[$lastPageID] = $_POST;
            }
    }
}

// DEVONLY: Gibt die aktuelle Session in die Seite aus zum checken

prettyprint($_SESSION);
prettyprint($_GET);
?>