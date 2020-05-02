<?php
    include 'app/includes/main.inc.php';        
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Contact</title>
        <link rel="stylesheet" type="text/css" href="app/resources/css/bodystyle.css">
        <link rel="stylesheet" type="text/css" href="app/resources/css/contact.css">
    </head>

    <body>     
        <!-- Navigation Bar -->
        <?php include 'app/resources/views/layout/navbar.php'; ?>

        <div class="content">

            <h1>Contact</h1>

            <div class="leftColumn">

                <div class="form">
                    <form action="app/resources/php/InsertContactMessage.php" method="POST">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your Name" value="" required>

                        <label for="email">E-mail</label>
                        <input type="text" id="email" name="email" placeholder="yourname@domain.com" required>

                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" placeholder="+359234567890" required>

                        <label for="subject">Message</label>
                        <textarea id="subject" name="subject" placeholder="Your message here.." style="height:200px" required></textarea>

                        <input type="submit" value="Submit" >
                    </form>
                </div>

            </div>

            <div class="rightColumn">
                <h3>Feel free to message us. We will respond you as soon as we can!</h3>
                <h4>Coaches:</h4>
                <p>
                    <?php echo "<img class='profilepic' src='images/profilepictures/". $pickpuc . "'><br>"?>
                    <strong>Kristiyan Strahilov</strong><br>
                    k.strahilov@student.fontys.nl
                </p>
                <p>
                    <?php echo "<img class='profilepic' src='images/profilepictures/". $picmichael . "'><br>"?>
                    <strong>Michael Groenewegen van der Weijden</strong><br>
                    m.groenewegenvanderweijden@student.fontys.nl
                </p>
            </div>

        </div>
        <!-- Footer -->
        <footer>
            <?php include 'app/resources/views/layout/footer.php'; ?>
        </footer>

    </body>

</html>