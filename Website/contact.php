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
        <?php require_once("navigation_bar.php"); ?>
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
        <?php require_once("footer.php"); ?>
    </footer>

</body>

</html>