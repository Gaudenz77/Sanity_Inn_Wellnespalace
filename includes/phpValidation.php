<?php 
include 'includes/tools.php';
require 'includes/pseudo01.php';
/* prettyprint($_POST); */

if (isset($_POST["lastPageID"])) {
    $lastPageID = $_POST["lastPageID"];
    switch($_POST['type']){
        case 'range':
            $_SESSION[$lastPageID] = $_POST;
            break;
        case 'radio':
            $_SESSION[$lastPageID] = $_POST;
            break;
        case 'checkbox':
            $_SESSION[$lastPageID] = $_POST;
            break;
        case 'number':
            if((number_format($_POST[$lastPageID]) < $questions[$pageID]['max']) || (number_format($_POST[$lastPageID]) > $questions[$pageID]['min'])){
                $_SESSION[$lastPageID] = $_POST;
            }
            break;

    }
}

// DEVONLY: Gibt die aktuelle Session in die Seite aus zum checken

/* prettyprint($_SESSION);
prettyprint($_GET); */
?>