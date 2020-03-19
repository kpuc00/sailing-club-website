let x = document.getElementById("hiddenlinks");

function expandMenu() {
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function showMenu() {
    if (document.body.clientWidth > 760) {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}