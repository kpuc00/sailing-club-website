function validate() {
    const pattern = /Regatta/;
    let raceName = document.getElementById("raceName");
    let addRaceError = document.getElementById("addRaceError")

    if(!pattern.test(raceName.value)) {
        raceName.placeholder = "Format: Example Regatta 2019";
        raceName.style.borderWidth = "2px";
        raceName.style.borderColor = "red";
        addRaceError.textContent = "The race name is of invalid format!";
        addRaceError.style.color = "red";
        return false;
    }
    else {
        raceName.style.border = "1px";
        raceName.style.borderColor = "#ccc";
        addRaceError.textContent = "";
        return true;
    }

    

}