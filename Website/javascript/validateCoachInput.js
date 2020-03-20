function validate() {
    var coachFirstName = document.getElemtById("coachFirstName");
    var coachLastName = document.getElemtById("coachLastname");
    var coatDescription = document.getElemtById("coachDescription");
    var coachClass = document.getElemtById("coachClass");

    var pattern = /^([A-Za-z]+ )+[A-Za-z]+$|^[A-Za-z]+$/;

    if (coachFirstName.value.length == 0) {
        alert("name");
        return false;
    } 
    else if (coachLastName.value.length == 0) {
        alert("last");
        return false;
    } 
    else if (coachFirstName.value.length == 0) {
        alert("desc");
        return false;
    }
    else if (coachClass.value.length == 0) {
        alert("pic");
        return false;
    }
    else {
        alert("Did not vall");
        return true;
    }

}