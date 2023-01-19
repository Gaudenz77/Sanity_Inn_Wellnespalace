<?php 
include 'includes/tools.php';
require 'includes/pseudo01.php';
/* löschen */
echo "<br><br><br><br><br><br>";
prettyprint($_POST);
prettyprint($_SESSION);
/* löschen */
/* TEST SESSION */
$_SESSION['körperlich'] = 'Antwort No. 1';
$_SESSION['wichtig']  = 'Antwort No. 3';
$_SESSION['zusätzliche']  = 'Antwort No. 4';
$_SESSION['körperlicheAktivitäten'] = 'Antwort No. 5';
function sportValidation(){
    $sportPoint = 0;
    if(isset($_SESSION['question1']['question1'])){
        if((number_format($_SESSION['question1']['question1']) > 2 )){
            $_SESSION['körperlich'] = 'Gesund';
            $sportPoint++;
        } else {
            $_SESSION['körperlich'] = 'Ungesund';
        }
    }
    if(isset($_SESSION['question3']['question3'])){
        if((number_format($_SESSION['question3']['question3']) > 2)){
            $_SESSION['wichtig'] = 'Gesund';
            $sportPoint++;
        } else {
            $_SESSION['wichtig'] = 'Ungesund';
        }
    }
    if(isset($_SESSION['question4'])){
        if((count($_SESSION['question4']) > 2 )&&(count($_SESSION['question4']) > 5)){
            $_SESSION['zusätzliche'] = 'Gesund';
            $sportPoint++;
        } else {
            $_SESSION['zusätzliche'] = 'Ungesund';
        }
    }
    if(isset($_SESSION['question5']['question5'])){
        if((number_format($_SESSION['question5']['question5']) > 2 )){
            $_SESSION['körperlicheAktivitäten'] = 'Gesund';
            $sportPoint++;
        } else {
            $_SESSION['körperlicheAktivitäten'] = 'Ungesund';
        }
    }
    if ($sportPoint > 2){
        return true;
    } else {
        return false;
    }
}
$_SESSION['Kohlenhydrate'] = 'Antwort No. 6';
$_SESSION['Protein'] = 'Antwort No. 7';
$_SESSION['Gemüse'] = 'Antwort No. 8';
$_SESSION['Früchte'] = 'Antwort No. 9';
$_SESSION['Mikrowelle'] = 'Antwort No. 10';

function eatValidation(){
    $eatPoint = 0;
    if(isset($_SESSION['question6']['question6'])){
        if((number_format($_SESSION['question6']['question6']) > 3 )&&(number_format($_SESSION['question6']['question6']) < 50)){
            $_SESSION['Kohlenhydrate'] = 'Gesund';
            $eatPoint++;
        } else {
            $_SESSION['Kohlenhydrate'] = 'Ungesund';
        }
    }
    if(isset($_SESSION['question7']['question7'])){
        if((number_format($_SESSION['question7']['question7']) > 3 )&&(number_format($_SESSION['question7']['question7']) < 50)){
            $_SESSION['Protein'] = 'Gesund';
            $eatPoint++;
        } else {
            $_SESSION['Protein'] = 'Ungesund';
        }
    }
    if(isset($_SESSION['question8']['question8'])){
        if((number_format($_SESSION['question8']['question8']) > 3 )&&(number_format($_SESSION['question8']['question8']) < 50)){
            $_SESSION['Gemüse'] = 'Gesund';
            $eatPoint++;
        } else {
            $_SESSION['Gemüse'] = 'Ungesund';
        }
    }
    if(isset($_SESSION['question9']['question9'])){
        if((number_format($_SESSION['question9']['question9']) > 3 )&&(number_format($_SESSION['question9']['question9']) < 50)){
            $_SESSION['Früchte'] = 'Gesund';
            $eatPoint++;
        } else {
            $_SESSION['Früchte'] = 'Ungesund';
        }
    }
    if(isset($_POST['question10'])){
        if((number_format($_POST['question10']) > 3 )&&(number_format($_POST['question10']) < 50)){
            $_SESSION['Mikrowelle'] = 'Gesund';
            $eatPoint++;
        } else {
            $_SESSION['Mikrowelle'] = 'Ungesund';
        }
    }
    if ($eatPoint > 3){
        return true;
    } else {
        return false;
    }
}

function endValidation(){

    for ($in = 1 ; $in < 10 ; $in ++ ){
        $question = 'question' . $in;
        $eat = eatValidation();
        $sport = sportValidation();
        if ((isset($_SESSION[$question])) && (!isset($_POST['question10']))) {
            $result = 'hacker';
        }   elseif ($eat === true && $sport === true){
            $result = "helthy";
        } elseif ($eat === true && $sport === false) {
            $result = "sport";
        } elseif ($eat === false && $sport === true) {
            $result = "eat";
        } else {
            $result = "unhalthy";
        }
    }
    return $result;
}


// DEVONLY: Gibt die aktuelle Session in die Seite aus zum checken
