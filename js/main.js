
    if (!range()) return false;    // question Id by type
    if (!radio()) return false;          // question Id by type
    if (!checkbox()) return false;       // question Id by type
    if (!number()) return false;         // question Id by type
  
    alert("All inputfields are filled in correctly and its good to go!");
    return true;

// JS valRangeslider(question-type slider)
function range() {
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
// JS valRadio(question-type radio)
  function radio() { 
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

// JS valCheckbox(question-type Checkbox)
function checkbox() {
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

// JS valNumber1(question-type num,ber)
function number() {
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

function range() {
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