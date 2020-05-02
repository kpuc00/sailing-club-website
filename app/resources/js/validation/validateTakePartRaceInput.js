function validate() {
    let firstName = document.getElementById("firstName");
    let lastName = document.getElementById("lastName");
    let age = document.getElementById("age");
    let club = document.getElementById("club");

    let firstNameError = document.getElementById("firstNameError");
    let lastNameError = document.getElementById("lastNameError");
    let ageError = document.getElementById("ageError");
    let clubError = document.getElementById("clubError");
    
    if(firstName.value.trim() == "") {
        firstName.placeholder = "First-name is required";
        firstName.style.borderColor = "red";
        firstName.style.borderWidth = "2px";
        firstNameError.textContent = "First-name can't be blank";
        firstNameError.style.color = "red";
        return false;
    }
    else {
        firstName.style.borderColor = "#ccc";
        firstName.style.borderWidth = "1px";
        firstNameError.textContent = "";
        true;
    }

    if(lastName.value.trim() == "") {
        lastName.placeholder = "First-name is required";
        lastName.style.borderColor = "red";
        lastName.style.borderWidth = "2px";
        lastNameError.textContent = "First-name can't be blank";
        lastNameError.style.color = "red";
        return false;
    }
    else {
        lastName.style.borderColor = "#ccc";
        lastName.style.borderWidth = "1px";
        lastNameError.textContent = "";
        true;
    }

    if(age.value.trim() == "") {
        age.placeholder = "Age is required";
        age.style.borderColor = "red";
        age.style.borderWidth = "2px";
        ageError.textContent = "Age can't be blank";
        ageError.style.color = "red";
        return false;
    }
    else {
        age.style.borderColor = "#ccc";
        age.style.borderWidth = "1px";
        ageError.textContent = "";
        true;
    }

    if(club.value.trim() == "") {
        club.placeholder = "Club is required";
        club.style.borderColor = "red";
        club.style.borderWidth = "2px";
        clubError.textContent = "Club can't be blank";
        clubError.style.color = "red";
        return false;
    }
    else {
        club.style.borderColor = "#ccc";
        club.style.borderWidth = "1px";
        clubError.textContent = "";
        true;
    }

}