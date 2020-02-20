<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <nav>
        <a href="index.html"><i class="fa fa-home"></i> Home</a>
        <a href="about.html"><i class="fa fa-user-circle"></i> About us</a>
        <div class="dropdown">
            <button class="dropbtn">
                <i class="fa fa-anchor"></i> Classes <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href=""><i class="fa fa-ship"></i> Optimist</a>
                <a href=""><i class="fa fa-ship"></i> Laser</a>
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
                <a href="optimistregatta2019.html"><i class="fa fa-file"></i> Optimist Regatta 2019</a>
                <a href=""><i class="fa fa-file"></i> Laser 4.7 Regatta 2019</a>
                <a href=""><i class="fa fa-file"></i> Finn Regatta 2019</a>
                <a href=""><i class="fa fa-file"></i> 49er Regatta 2019</a>
                <a href=""><i class="fa fa-file"></i> 420 Regatta 2019</a>
                <a href=""><i class="fa fa-file"></i> 470 Regatta 2019</a>
            </div>
        </div>
        <div class="contact-button">
            <a class="active" href="contact.html"><i class="fa fa-address-card"></i> Contact</a>
        </div>

    </nav>

    <div class="content">

        <h1>Contact</h1>

        <div class="leftColumn">

            <div class="form">
                <form action="#action_page.php">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="John Doe">

                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="j.doe@fontys.nl">

                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="+35923456789">

                    <label for="subject">Message</label>
                    <textarea id="subject" name="subject" placeholder="Your message here.." style="height:200px"></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>

        </div>

        <div class="rightColumn">
            <h3>Feel free to message us. We will respond you as soon as we can!</h3>
            <h4>Coaches:</h4>
            <p><strong>Kristiyan Strahilov</strong><br>k.strahilov@student.fontys.nl</p>
            <p><strong>Michael Groenewegen van der Weijden</strong><br>m.groenewegenvanderweijden@student.fontys.nl</p>
        </div>

    </div>

    <footer>

        <img src="images/SCF.png" alt="SCF Logo" width="10%">
        <br>
        <a href=""><i class="fa fa-address-card"></i> Contact</a>
        <a href=""><i class="fa fa-sitemap"></i> Sitemap</a>
        <br>
        <br><strong>Social networks:</strong><br>
        <a href="https://www.facebook.com/kristiyanstrahilov" target="_blank"><i class="fa fa-facebook"></i> Kristiyan Strahilov</a>
        <a href="https://www.instagram.com/kpuc00/" target="_blank"><i class="fa fa-instagram"></i> kpuc00</a>
        <a href="https://www.facebook.com/profile.php?id=100007862648519" target="_blank"><i class="fa fa-facebook"></i> Michael Groenewegen van der Weijden</a>
        <a href="https://www.instagram.com/michael_gvdw/" target="_blank"><i class="fa fa-instagram"></i> michael_gvdw</a>
        <div class="copyright">
            Copyright © Kristiyan Strahilov, Michael Groenewegen van der Weijden - 2020
        </div>

    </footer>

</body>

</html>