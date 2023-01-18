<?php 
include 'includes/tools.php';
prettyprint($_POST);

if (isset($_POST["lastPageID"])) {
    $lastPageID = $_POST["lastPageID"];
    switch($_POST['type']){
        case 'range':
            $_SESSION[$lastPageID] = $_POST;
        case 'radio':
            $_SESSION[$lastPageID] = $_POST;
        case 'checkbox':
            $_SESSION[$lastPageID] = $_POST;
        case 'number':
            if((number_format($_POST[$lastPageID]) < $questions[$pageid]['max']) || (number_format($_POST[$lastPageID]) > $questions[$pageid]['min'])){
                $_SESSION[$lastPageID] = $_POST;
            }
    }
}

// DEVONLY: Gibt die aktuelle Session in die Seite aus zum checken

prettyprint($_SESSION);
prettyprint($_GET);
?>