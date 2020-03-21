function validate() {
    let coachFirstName = document.getElementById("coachFirstName");
    let coachLastName = document.getElementById("coachLastName");
    let coachDescription = document.getElementById("coachDescription");
    let coachClass = document.getElementById("coachClass");
    let coachPicture = document.getElementById("coachPicture");
    let coachFirstNameError = document.getElementById("coachFirstNameError");
    let coachLastNameError = document.getElementById("coachLastNameError");
    let coachDescriptionError = document.getElementById("coachDescriptionError");
    let coachClassError = document.getElementById("coachClassError");
    let coachPictureError = document.getElementById("coachPictureError");
    let coachPictureValue = coachPicture.value;

    if (coachFirstName.value == "") {
        coachFirstName.placeholder = "The coach name is required!";
        coachFirstName.style.borderColor = "red";
        coachFirstName.style.borderWidth = "2px";
        coachFirstNameError.textContent = "Name can't be blank";
        coachFirstNameError.style.color = "red";
        return false;
    } 
    else{
        coachFirstName.style.borderColor = "#ccc";
        coachFirstName.style.borderWidth = "1px";
        coachFirstNameError.textContent = "";
        true;
    }
    if (coachLastName.value == "") {
        coachLastName.placeholder = "The coach last name is required!";
        coachLastName.style.borderColor = "red";
        coachLastName.style.borderWidth = "2px";
        coachLastNameError.textContent = "Last name can't be blank";
        coachLastNameError.style.color = "red";
        return false;
    } 
    else{
        coachLastName.style.borderColor = "#ccc";
        coachLastName.style.borderWidth = "1px";
        coachLastNameError.textContent = "";
        true;
    }
    if (coachClass.value == "") {
        coachClass.placeholder = "The coach class is required!";
        coachClass.style.borderColor = "red";
        coachClass.style.borderWidth = "2px";
        coachClassError.textContent = "Class can't be blank";
        coachClassError.style.color = "red";
        return false;
    }
    else{
        coachClass.style.borderColor = "#ccc";
        coachClass.style.borderWidth = "1px";
        coachClassError.textContent = "";
        true;
    }
    if (coachDescription.value == "") {
        coachDescription.placeholder = "The coach description is required!";
        coachDescription.style.borderColor = "red";
        coachDescription.style.borderWidth = "2px";
        coachDescriptionError.textContent = "Description can't be blank";
        coachDescriptionError.style.color = "red";
        return false;
    }
    else{
        coachDescription.style.borderColor = "#ccc";
        coachDescription.style.borderWidth = "1px";
        coachDescriptionError.textContent = "";
        true;
    }
    if (coachDescription.value.length > 1000){
        coachDescription.placeholder = "The coach description is too long!";
        coachDescription.style.borderColor = "red";
        coachDescription.style.borderWidth = "2px";
        coachDescriptionError.textContent = "Descrption is too long please enter less than 1000 characters";
        coachDescriptionError.style.color = "red";
        return false;
    }
    else{
        coachDescription.style.borderColor = "#ccc";
        coachDescription.style.borderWidth = "1px";
        coachDescriptionError.textContent = "";
        true;
    }
    if(coachPicture.value == ""){
        alert("You must select a file");
        coachPictureError.textContent = "A file must be selected!";
        coachPictureError.style.color = "red";
        return false;
    }
    else{
        let coachExtension = coachPictureValue.substring(coachPictureValue.lastIndexOf('.') + 1).toLowerCase();
        if (coachExtension == "png"){
            coachPictureError.textContent = "";
            true;
        }
        else{
            alert("file must be .png");
            coachPictureError.textContent = "A file must be png type!";
            coachPictureError.style.color = "red";
            return false;
        }
    
    }

}

