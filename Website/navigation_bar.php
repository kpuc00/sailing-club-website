<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
    </head>
    <body>
        <a class="active" href="index.php"><i class="fa fa-home"></i> Home</a>
        <a href="about.php"><i class="fa fa-user-circle"></i> About us</a>
        <div class="dropdown">
            <button class="dropbtn">
                <i class="fa fa-anchor"></i> Classes <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href=""><i class="fa fa-ship"></i> Optimist</a>
                <a href=""><i class="fa fa-ship"></i> Laser</a>
                <a href=""><i class="fa fa-ship"></i> 49er</a>
                <a href=""><i class="fa fa-ship"></i> Finn</a>
                <a href=""><i class="fa fa-ship"></i> 420</a>
                <a href=""><i class="fa fa-ship"></i> 470</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">
                <i class="fa fa-list"></i> Regattas <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="regatta.php?regattaID=1" $_><i class="fa fa-file"></i> Optimist Regatta 2019</a>
                <a href="regatta.php?regattaID=2"><i class="fa fa-file"></i> Laser 4.7 Regatta 2019</a>
                <a href="regatta.php?regattaID=3"><i class="fa fa-file"></i> 49er Regatta 2019</a>
                <a href="regatta.php?regattaID=4"><i class="fa fa-file"></i> Finn Regatta 2019</a>
                <a href="regatta.php?regattaID=5"><i class="fa fa-file"></i> 470 Regatta 2019</a>
                <a href="regatta.php?regattaID=6"><i class="fa fa-file"></i> 420 Regatta 2019</a>
            </div>
        </div>
        <div class="contact-button">
            <a href="contact.php"><i class="fa fa-address-card"></i> Contact</a>
            <a href='login.php'><i class='fa fa-sign-in'></i> Login</a>
        </div>
    </body>

</html>