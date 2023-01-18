<?php 
include 'includes/tools.php';
prettyprint($_POST);

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
            echo "$_POST[$lastPageID]<br>";
            echo "$questions[$pageid]['max']<br>";
            echo "$questions[$pageid]['min']<br>";
            if((number_format($_POST[$lastPageID]) < $questions[$pageid]['max']) || (number_format($_POST[$lastPageID]) > $questions[$pageid]['min'])){
                $_SESSION[$lastPageID] = $_POST;
            }
            break;

    }
}

// DEVONLY: Gibt die aktuelle Session in die Seite aus zum checken

prettyprint($_SESSION);
prettyprint($_GET);
?>