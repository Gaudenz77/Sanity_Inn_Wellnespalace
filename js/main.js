
/* if (!range()) return false; // question Id by type
if (!radio()) return false; // question Id by type
if (!checkbox()) return false; // question Id by type
if (!number()) return false; // question Id by type
alert("All inputfields are filled in correctly and its good to go!");
return true; */

// JS valRangeslider(question-type slider)
/* function range() {
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

} */
// JS valRadio(question-type radio)
/* function radio() { 
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
*/
// JS valCheckbox(question-type Checkbox)
/* function checkbox() {
let inputElement = document.getElementById('lName');
let value = inputElement.value;

if (!value) { //'', null, undefined
// do something 
setMessage4("last name must be filled out");
return false;

}
else {

setLocalStorage("lName", value); // lname
// setMessage4(value);
return true;

}
} */

// JS valNumber1(question-type num,ber)
/* function number() {
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
} */

/* PHP */

/* function run() {
document.getElementById("resultGender").innerHTML = document.getElementById("valGender").value;
} */

//----SURVEY NEW--SURVEY NEW--SURVEY NEW--SURVEY NEW--SURVEY NEW--SURVEY NEW--SURVEY NEW--SURVEY NEW--SURVEY NEW-

/* slider.oninput = function() {
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
} */

//JS-RANGE-SLIDER-VALIDATION ------------------------------------------------------------------------ CHRIS INPUT/

function range() {
  /* debugger; */
/* alert('validateRange'); */
console.log("range");
  // check if slider has changed
  if (!sliderHasChanged()) {
    setWarning("Bitte die Position wechseln"); // Deutscher Text da deutsche Warnung
    // stoppt die Srpung-action
    return false;
  }
  else return true;
}

function sliderChanged() {
  console.log("notworking");
  // getInputElementByID "range-slider-changed" and its value to 1
  let hiddenInputElement = document.getElementById("range-slider-changed");
  hiddenInputElement.value = "1";

}

function sliderHasChanged() {
  console.log("sliderHasChanged");
  // get hidden inputelement reange-slidedr and return true if it is "1"
  // else return false
  let hiddenInputElement = document.getElementById("range-slider-changed");
  if (hiddenInputElement.value === "1") return true;
  
  else return false;
}

function setWarning(text) {
  let warningElement = document.getElementById("sliderValue");
  warningElement.innerText = text;

}
//JS-CHECKBOX-VALIDATION ---------------------------------------------------------------------------------------------------
function checkbox(){
  let elemetCheckbox = document.querySelectorAll('.check');
  for(let i= 0 ; i < elemetCheckbox.length ; i++){
    if(elemetCheckbox[i].checked)return true;
  }
  setWarning('Bitte irgend eine Wahl treffen');
  return false;
}
//JS-RADIOBUTTON-VALIDATION ------------------------------------------------------------------------------------------------
function radio(){
  let elemetRadio = document.getElementsByName('question2');
  for(let i= 0 ; i < elemetRadio.length ; i++){
    if(elemetRadio[i].checked)return true;
  }
  setWarning('Bitte irgend eine Wahl treffen');
  return false;
}
//JS-NUMBER-VALIDATION -----------------------------------------------------------------------------------------------------
/* ???? wie bei der automatischen erstellung*/
/*
function number(element){
  console.log(element)
  let elemetNumber = document.querySelectorAll('.check');
    console.log(element.min);
    console.log(element.max);
    console.log(element.value);
  return false;
} */
// FUNCTION DELETE ALL COOKIES ---------------------------------------------------------------------------------------------

function deleteAllCookies() {
  const cookies = document.cookie.split(";");

  for (let i = 0; i < cookies.length; i++) {
      const cookie = cookies[i];
      const eqPos = cookie.indexOf("=");
      const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
      document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
  }
  window.location.href = "index.php";

}

// FUNCTION DARK-MODE TOGGLE ---------------------------------------------------------------------------------------------
// sollHellDunkel = mustBrightDark
// so oder so ??? ln 247 ???


/* Change Bright to Dark */
function buttonChangeBrightDark(){
  let mustBrightDark = localStorage.getItem('mustBrightDark');
  if(mustBrightDark === 'Dark'){
      localStorage.setItem('mustBrightDark' , 'Bright');
  } else {
      localStorage.setItem('mustBrightDark' , 'Dark');
  }
}
function changeDark(){
  /* Pictures Bright off */
  //document.getElementById('logoBright').style.display = 'none'; beispiel
  /* Pictures Dark ein */
  //document.getElementById('logoDark').style.display = 'inline-flex'; beispiel
}
function changeBright(){
  /* Pictures Bright off */
  //document.getElementById('logoBright').style.display = 'inline-flex'; beispiel
  /* Pictures Dark on */
  //document.getElementById('logoDark').style.display = 'none'; beispiel
}
function changeBrightDark(){
  /* so oder so ??? */
  document.body.classList.toggle('bodyDark');
  /* header change */
  let header = document.querySelectorAll('.headerBright');

  for (let h = 0; h < header.length; h++) {
      header[h].classList.toggle('headerDark');
  }
  
  let buttons = document.querySelectorAll('.btn-light');

  for (let b = 0; b < buttons.length; b++) {
      buttons[b].classList.toggle('btn-dark');
  }
  /* specific change */
  let isBrightDark = localStorage.getItem('isBrightDark');
  if(isBrightDark === 'Bright'){
      changeDark();
      localStorage.setItem('isBrightDark' , 'Dark');
  } else {
      changeBright();
      localStorage.setItem('isBrightDark' , 'Bright');
  }
}
function checkBrightDark(){
  let isBrightDark = localStorage.getItem('isBrightDark');
  let mustBrightDark = localStorage.getItem('mustBrightDark');
  if(!(isBrightDark === mustBrightDark)){
      changeBrightDark();
  }
}
var intervalChangeBrightDark;

function startChangeBrightDark(){
  localStorage.setItem('isBrightDark' , 'Bright');
  let mustBrightDark = localStorage.getItem('mustBrightDark');
  if(!(mustBrightDark === 'Dark')){
      localStorage.setItem('mustBrightDark' , 'Bright');
  }
  intervalChangeBrightDark = setInterval(function(){checkBrightDark();} , 10);
}
 // END BRIGHT-DARK-TOGGLE ------------------------------------------------------------------------------------------
