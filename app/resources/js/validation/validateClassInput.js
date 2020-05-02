function validate() {
    let className = document.getElementById("className");
    let classDescription = document.getElementById("subject");
    let classPicture = document.getElementById("classPicture");
    let classNameError = document.getElementById("classNameError");
    let classDescriptionError = document.getElementById("classDescriptionError");
    let classPictureError = document.getElementById("classPictureError");
    let pictureValue = classPicture.value;

    if (className.value == "") {
        className.placeholder = "The class name is required!";
        className.style.borderColor = "red";
        className.style.borderWidth = "2px";
        classNameError.textContent = "Name can't be blank";
        classNameError.style.color = "red";
        return false;
    }
    else {
        className.style.borderColor = "#ccc";
        className.style.borderWidth = "1px";
        classNameError.textContent = "";
        true;
    }
    if (classDescription.value == ""){
        classDescription.placeholder = "The class description is required!";
        classDescription.fontcolor = "red"; 
        classDescription.style.borderColor = "red";
        classDescription.style.borderWidth = "2px";
        classDescriptionError.textContent = "Descrption can't be blank";
        classDescriptionError.color = "red";
        return false;
    }
    else{
        classDescription.style.borderColor = "#ccc";
        classDescription.style.borderWidth = "1px";
        classDescriptionError.textContent = "";
        true;
    }
    if (classDescription.value.length > 1000) {
        classDescription.placeholder = "The class description is too long!";
        classDescription.fontcolor = "red"; 
        classDescription.style.borderColor = "red";
        classDescription.style.borderWidth = "2px";
        classDescriptionError.textContent = "Descrption is too long please enter less than 1000 characters";
        classDescriptionError.color = "red";
        return false;
    }
    else {
        classDescription.style.borderColor = "#ccc";
        classDescription.style.borderWidth = "1px";
        classDescriptionError.textContent = "";
        true;
    }
    if(classPicture.value == ""){
        alert("You must select a file");
        classPictureError.textContent = "A file must be selected!";
        classPictureError.style.color = "red";
        return false;
    }
    else{
        let extension = pictureValue.substring(pictureValue.lastIndexOf('.') + 1).toLowerCase();
        if (extension == "png"){
            classPictureError.textContent = "";
            true;
        }
        else{
            alert("file must be .png");
            classPictureError.textContent = "A file must be png type!";
            classPictureError.style.color = "red";
            return false;
        }
    }
    


}