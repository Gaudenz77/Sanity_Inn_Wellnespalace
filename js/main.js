function validateAll() {
    if (!validateMail()) return false; 
    if (!validateGender()) return false; 
    if (!validatefName()) return false; 
    if (!validatelName()) return false; 
    if (!validateAge()) return false; 
    if (!validatePhone()) return false; 
    if (!validateLevel()) return false;
    if (!validateComment()) return false;
    if (!validateHidden()) return false;

    alert("All inputfields are filled in correctly and its good to go!");
    return true;
  }

function validateMail() {
  let inputElement = document.getElementById("valMail");
  let value = inputElement.value;

  if (!value) {
    setMessage1("Please enter your e-mail")
    return false;
  }

  else if (value.indexOf('@', '#') < 0) {
    setMessage1("please use an '@' in the adress")
    return false;
  }

  else {
    setLocalStorage("valMail", value);
    //setMessage1(value);
    return true;
  }

}

  function validateGender() { 
    let inputElement = document.getElementById('valGender');
    let value = inputElement.value;




    if (!value) {
    setMessage2("please insert your gender");
    return false;
  }
  else {
    setLocalStorage("valGender", value);
    // setMessage2(value);
    return true;
  }
}

function validatefName() {
  let inputElement = document.getElementById('fName');
  let value = inputElement.value;

  
  if (!value) { // '', null, undefined
    setMessage3("first name must be filled out");
    return false;
  }
  else {
    
    setLocalStorage("fName", value); //  fname
    // setMessage3(value);
    return true;
    
  }
}

function validatelName() {
  let inputElement = document.getElementById('lName');
  let value = inputElement.value;

  if (!value) { //'', null, undefined
      // do something 
      setMessage4("last name must be filled out");
      return false;

  }
  else {

      setLocalStorage("lName", value); //  lname
      // setMessage4(value);
      return true;

  }
      
}

function validateAge() {
  let inputElement = document.getElementById('valAge');
  let value = inputElement.value;
  if (!value) {
    setMessage5("please insert your age");
    return false;

  } 

  else if( value < 18 || value > 99 ) { 
    
    setMessage5('number is either smaller 18 or greater than 99, please use numbers from 0 to 10 only!');
  

  }

else {

    setLocalStorage("valAge", value); // age
    // setMessage5(value);
    return true;

  }
}

function validatePhone() {
  let inputElement = document.getElementById("telNumber");
  let value = inputElement.value;

  if (!value) {
    setMessage6("Please enter your phone");
    return false;
  }

  /* else if (value.indexOf('@') < 0) {
    setMessage6("please enter a valid phone number");
    return false;
  } */

  else {
    setLocalStorage("telNumber", value);
    // setMessage6(value);
    return true;
  }

}

function validateLevel() { 
  let inputElement = document.getElementById('classLevel');
  let value = inputElement.value;

  if (!value) {
  setMessage7("please chose a level");
  return false;
}
else {
  setLocalStorage("classLevel", value);
  //setMessage7(value);
  return true;
}
}

function validateComment() { 
  let inputElement = document.getElementById('myComment');
  let value = inputElement.value;

  /* if (!value) {
  setMessage8("please tell us about your needs..");
  return false;
} */
  setLocalStorage("myComment", value);
  //setMessage8(value);
  return true;
}

function validateHidden() { 
  let inputElement = document.getElementById('myHidden');
  let value = inputElement.value;

  /* if (!value) {
  setMessage8("please tell us about your needs..");
  return false;
} */
  setLocalStorage("myHidden", value);
  //setMessage8(value);
  return true;
}


function setMessage1(value) {
  document.getElementById("message-1").innerText = value;
} 

function setMessage2(value) {
  document.getElementById("message-2").innerText = value;
} 


function setMessage3(value) {
  document.getElementById("message-3").innerText = value;
} 

function setMessage4(value) {
  document.getElementById("message-4").innerText = value;
} 

function setMessage5(value) {
  document.getElementById("message-5").innerText = value;
} 

function setMessage6(value) {
  document.getElementById("message-6").innerText = value;
} 

function setMessage7(value) {
  document.getElementById("message-7").innerText = value;
} 


/* PHP */

function run() {
  document.getElementById("resultGender").innerHTML = document.getElementById("valGender").value;
}












































// Phone Number---------------
/* function start() {

  var userNumber = prompt("Enter Your Cell Number");
  
  var result = userNumber.match(/^(1|)?(\d{3})(\d{3})(\d{4})$/);
  
  var cCode = result[1] ? "+41" : "";
  
  var formattedNumber =
  
  cCode + " (" + result[2] + ") " + result[3] + "-" + result[4];
  
  document.getElementById("number").innerHTML =
  
  "The international number is: " + formattedNumber;
  
  } */
