<?php
// define variables and set to empty values
  $emailErr = $genderErr = $fNameErr = $lNameErr = $ageErr = $phoneErr = $levelErr = $commentaryErr =  "";
  $email = $gender = $fName = $lName = $age = $phone = $level = $commentary = "";
  $valid = true;
  

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["email"])) {
  $valid=false;
  $emailErr = "Email is required";
} else {
  $email = test_input($_POST["email"]);
  // check if e-mail address is well-formed
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
} // if input "text" then "else" necessary if "email" not necessary, field say "invalid" format is alerted.

if (empty($_POST["gender"])) {
  $valid=false;
  $genderErr = "Gender is required";
} else {
  $gender = test_input($_POST["gender"]);
}
 


if (empty($_POST["fName"])) {
  $valid=false;
  $fNameErr = "First Name is required";
} else {
  $fName = test_input($_POST["fName"]);
}

if (empty($_POST["lName"])) {
  $valid=false;
  $lNameErr = "Last Name is required";
} else {
  $lName = test_input($_POST["lName"]);
}


if (empty($_POST["age"])) {
  $valid=false;
  $ageErr = "Age is required";
  
} /* elseif (!preg_match ("/^[0-9]{2}*$/", $age)){
  $valid=false;
  $ageErr = "invalid";
  
}  *//* elseif ( $length < 2 && $length >  ) {
  $age=strlen;
  $valid=false;
  $ageErr="only two digit";
 
  } */
  else {
    $age = test_input($_POST["age"]);
  }

/* 
  if (!$age($ageval < 18 && £ageval > 99 )) {
    $valid=false;
    $ageErr = "not good age";
} */


if (empty($_POST["phone"])) {
  $valid=false;
  $phoneErr = "Phone-No. is required";
} else {
  $phone = test_input($_POST["phone"]);
}

if (empty($_POST["level"])) {
  $valid=false;
  $levelErr = "Level is required";
} else {
  $level = test_input($_POST["level"]);
}

if (empty($_POST["commentary"])) {
  $valid=false;
  $commentaryErr = "Please enter a commentary";
} else {
  $commentary = test_input($_POST["commentary"]);
}

if($valid){
  require('/home/petra/Documents/webdev_tools_documets/php_one/Stranger_Languages_Classes_PHP/includes/confirmation.php');
  exit();
}





}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

