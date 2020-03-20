function validate() {
    const pattern = /Regatta/;
    let raceName = document.getElementById("raceName");

    if(!pattern.test(raceName.value)) {
        raceName.placeholder = "The race name is of invalid format!";
        raceName.style.borderWidth = "2px";
        raceName.style.borderColor = "red";
        return false;
    }
    else {
        return true;
    }

    

}