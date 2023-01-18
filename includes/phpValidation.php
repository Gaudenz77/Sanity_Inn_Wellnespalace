<?php 
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
            if((number_format($_POST[$lastPageID]) < $questions[$pageID]['max']) || (number_format($_POST[$lastPageID]) > $questions[$pageID]['min'])){
                $_SESSION[$lastPageID] = $_POST;
            }
    }
}

// DEVONLY: Gibt die aktuelle Session in die Seite aus zum checken

prettyprint($_SESSION);
prettyprint($_GET);
?>