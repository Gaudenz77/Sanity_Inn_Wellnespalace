//JS-RANGE-SLIDER-VALIDATION ------------------------------------------------------------------------ CHRIS INPUT/

function range() {
  /* debugger; */
/* alert('validateRange'); */
console.log("range");
  // check if slider has changed
  if (!sliderHasChanged()) {
    setWarning("Bitte bewege den Slider.\nDanke."); // Deutscher Text da deutsche Warnung
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
  setWarning('Bitte wähle mindestens eine Aktivität aus.\nDanke.');
  return false;
}
//JS-RADIOBUTTON-VALIDATION ------------------------------------------------------------------------------------------------
function radio(){
  let elemetRadio = document.getElementsByName('question2');
  for(let i= 0 ; i < elemetRadio.length ; i++){
    if(elemetRadio[i].checked)return true;
  }
  setWarning('Um Dich optimal beraten zu können, bitten wir Dich, dieses Feld auszufüllen.\nDanke.');
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
  document.getElementById('headerWrapperDay').style.display = 'none'; 
  /* Pictures Dark ein */
  document.getElementById('headerWrapperNight').style.display = 'inline-flex';
}
function changeBright(){
  /* Pictures Bright off */
  document.getElementById('headerWrapperDay').style.display = 'inline-flex'; 
  /* Pictures Dark on */
  document.getElementById('headerWrapperNight').style.display = 'none'; 
}
function changeBrightDark(){
  /* so oder so ??? */
  document.body.classList.toggle('bodyDark');

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
