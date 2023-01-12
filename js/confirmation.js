function setLocalStorage(key, value) {
    localStorage.setItem(key, value);
}

function getLocalStorage(key) {
    return localStorage.getItem(key);
}

function writeConfirmation () {

    let eMail = getLocalStorage("valMail");
    let checkedNL = getLocalStorage("newsletter");

    let gender = getLocalStorage("valGender");
    let firstName = getLocalStorage("fName");
    let lastName = getLocalStorage("lName");
    let age = getLocalStorage("valAge");
    let phone = getLocalStorage("telNumber");
    let classLevel = getLocalStorage("classLevel");
    let comment = getLocalStorage("myComment");
    let hidden = getLocalStorage("myHidden")

    let confirmation = `<p><span class="confirmationLabel">e-Mail:</span> ${eMail}</p>
                            <span class="confirmationLabel">newsletter y/n:</span> ${checkedNL}</p>
                            <span class="confirmationLabel">gender:</span> ${gender}</p>
                            <span class="confirmationLabel">1st name:</span> ${firstName}</p>
                            <span class="confirmationLabel">last name:</span> ${lastName}</p>
                            <span class="confirmationLabel">age:</span> ${age}</p>
                            <span class="confirmationLabel">phone:</span> ${phone}</p>
                            <span class="confirmationLabel">level:</span> ${classLevel}</p>
                            <span class="confirmationLabel">commentary:</span> ${comment}</p>
                            <span class="confirmationLabel">your language of choice:</span> ${hidden}</p>`;
        // die Beastätigung wird als innerHGTML gesetzt
        document.getElementById("confirmation-message").innerHTML = confirmation;
        console.log(confirmation);

 }

 