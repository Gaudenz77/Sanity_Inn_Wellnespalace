function validateAll() {
    if (!valRangeslider()) return false;              // question1
    if (!valRadio()) return false;                    // question2
    if (!valRangeslider2()) return false;             // question3
    if (!valCheckbox()) return false;                 // question4
    if (!valRangeslider3()) return false;             // question5
    if (!valNumber1()) return false;         // question6
    if (!valNumber2()) return false;         // question7
    if (!valNumber3()) return false;             // question8
    if (!valNumber4()) return false;              // question9
    if (!valNumber5()) return false;              // question10


    alert("All inputfields are filled in correctly and its good to go!");
    return true;
  }
// JS valRangeslider(question1)
function valRangeslider() {
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
// JS valRadio(question2)
  function valRadio() { 
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
// JS valRangeslider2(question3)
function valRangeslider2() {
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
// JS valCheckbox(question4)
function valCheckbox() {
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
// JS valRangeslider3(question5)
function valRangeslider3() {
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
// JS valNumber1(question6)
function valNumber1() {
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
// JS valNumber2(question7)
function valNumber2() { 
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

// JS valNumber3(question8)
function valNumber3() { 
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
// JS valNumber4(question9)
function valNumber4() { 
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

// JS valNumber5(question10)
function valNumber5() { 
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

//----SURVEY NEW--SURVEY NEW--SURVEY NEW--SURVEY NEW--SURVEY NEW--SURVEY NEW--SURVEY NEW--SURVEY NEW--SURVEY NEW-

slider.oninput = function() {
  output.innerHTML = this.value;
}

var slider = document.getElementById("slider");
var output = document.getElementById("sliderValue");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}


var slider = document.getElementById("slider");
output.innerHTML = slider.value;
slider.oninput = function() {
output.innerHTML = this.value;
}




// CHRIS INPUT ------------------------------------------------------------------------

function validateQuestion1() {
/*   debugger; */
  // check if slider has changed
  if (!sliderHasChanged()) {
    setWarning("please change slider position");
    // stoppt die Srpung-action
    return false;
  }
  else return true;
}

function sliderChanged() {
  // getInputElementByID "range-slider-changed" and its value to 1
  let hiddenInputElement = document.getElementById("range-slider-changed");
  hiddenInputElement = "1";

}

function sliderHasChanged() {
  // get hidden inputelement reange-slidedr and return true if it is "1"
  // else return false
  let hiddenInputElement = document.getElementById("range-slider-changed");
  if (hiddenInputElement.value === "1") return true;
  else return false;
}

function setWarning(text) {
  let warningElement = document.getElementById("validation-warning");
  warningElement.innerText = text;

} 




function deleteAllCookies() {
  const cookies = document.cookie.split(";");

  for (let i = 0; i < cookies.length; i++) {
      const cookie = cookies[i];
      const eqPos = cookie.indexOf("=");
      const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
      document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
  }
  window.location.href = 'index.php';

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

  /* wechsel Hell Dunkel */
function buttonWechselHellDunkel(){
  let sollHellDunkel = localStorage.getItem('sollHellDunkel');
  if(sollHellDunkel === 'Dunkel'){
      localStorage.setItem('sollHellDunkel' , 'Hell');
  } else {
      localStorage.setItem('sollHellDunkel' , 'Dunkel');
  }
}
function wechselDunkel(){
  /* Bilder Hell aus */
  document.getElementById('logoHell').style.display = 'none';
  /* Bilder Dunkel ein */
  document.getElementById('logoDunkel').style.display = 'inline-flex';
}
function wechselHell(){
  /* Bilder Hell aus */
  document.getElementById('logoHell').style.display = 'inline-flex';
  /* Bilder Dunkel ein */
  document.getElementById('logoDunkel').style.display = 'none';
}
function wechselHellDunkel(){
  /* so oder so */
  document.body.classList.toggle('bodyDark');
  /* haeder wechseln */
  let haeder = document.querySelectorAll('.haederHell');

  for (let h = 0; h < haeder.length; h++) {
      haeder[h].classList.toggle('headerDark');
  }
  
  let buttons = document.querySelectorAll('.btn-light');

  for (let b = 0; b < buttons.length; b++) {
      buttons[b].classList.toggle('btn-dark');
  }
  /* spetifischer wechsel */
  let istHellDunkel = localStorage.getItem('istHellDunkel');
  if(istHellDunkel === 'Hell'){
      wechselDunkel();
      localStorage.setItem('istHellDunkel' , 'Dunkel');
  } else {
      wechselHell();
      localStorage.setItem('istHellDunkel' , 'Hell');
  }
}
function pruefungHellDunkel(){
  let istHellDunkel = localStorage.getItem('istHellDunkel');
  let sollHellDunkel = localStorage.getItem('sollHellDunkel');
  if(!(istHellDunkel === sollHellDunkel)){
      wechselHellDunkel();
  }
}
var intervalWechselHellDunkel;
function StartWechselHellDunkel(){
  localStorage.setItem('istHellDunkel' , 'Hell');
  let sollHellDunkel = localStorage.getItem('sollHellDunkel');
  if(!(sollHellDunkel === 'Dunkel')){
      localStorage.setItem('sollHellDunkel' , 'Hell');
  }
  intervalWechselHellDunkel = setInterval(function(){pruefungHellDunkel();} , 1);
}
/* Start Haeder */

  StartWechselHellDunkel();