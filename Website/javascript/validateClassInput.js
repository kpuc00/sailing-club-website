function validate() {
    var className = document.getElementById("className");
    var classDescription = document.getElementById(classDescription);

    if (className.value.length == 0) {
        var errorClassName = document.getElementById("errorClassName");
        className.placeholder = "The class name is of invalid format!";
        className.fontcolor = "red"; 
        className.style.borderColor = "red";
        className.style.borderWidth = "2px"
        return false;
    }
    if (classDescription.value.length > 1000 || classDescription.value.length < className.value.length) {
        classDescription.placeholder = "The class description is of invalid format!";
        classDescription.fontcolor = "red"; 
        classDescription.style.borderColor = "red";
        classDescription.style.borderWidth = "2px"
        return false;
    }
    else {
        return true;
    }
}