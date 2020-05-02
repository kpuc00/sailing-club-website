<!-- <?php


// //get user picture path from database
// $getnavpic = $conn->prepare('SELECT profilepicture FROM accounts WHERE id = ?');
// $getnavpic->bind_param('i', $_SESSION['id']);
// $getnavpic->execute();
// $getnavpic->bind_result($navprofilepic);
// $getnavpic->fetch();
// $getnavpic->close();
?> -->
<?php
    include 'app/resources/php/head.php';

    $courseObj = new courseView();
    $regattaObj = new regattaView();
?>
<html>
    <body onresize="showMenu()">
        <nav>
            <div class="hamburger"><a href="javascript:void(0);" onclick="expandMenu()" title="Expand Menu"><i class='fa fa-bars'></i></a></div>
            <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
            <div id="hiddenlinks">
                <a href="about.php"><i class="fa fa-info"></i> About us</a>
                <div class="dropdown">
                    <button class="dropbtn">
                        <i class="fa fa-anchor"></i> Classes <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <?php 
                            $courseObj->viewCourseIdName();
                        ?>            
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">
                        <i class="fa fa-list"></i> Regattas <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <?php 
                            $regattaObj->viewRegattaIdName();
                        ?>      
                </div>
            </div>
            <a href="contact.php"><i class="fa fa-address-card"></i> Contact</a>
            <div class="right-button">
            <!-- <?php
                            
                            if(isset($_SESSION['loggedin']) && $_SESSION['usertype'] == "User"){
                                echo "<a href='auth/logout.php'><i class='fa fa-sign-out'></i> Logout</a>";
                                echo "<div class='profilebtn'><a href='profile.php' title='Profile'><marquee scrollamount='3'><img class='navprofilepic' src='images/profilepictures/".$navprofilepic."'> <span>" . $_SESSION['displayname'];
                                echo "</span></marquee></a></div>"; 
                            }
                            else if(isset($_SESSION['loggedin']) && $_SESSION['usertype'] == "Admin"){
                                echo "<a href='auth/logout.php'><i class='fa fa-sign-out'></i> Logout</a>";
                                echo "<div class='profilebtn'><a href='adminpage.php' title='Profile'><marquee scrollamount='3'><img class='navprofilepic' src='images/profilepictures/".$navprofilepic."'> <span>" . $_SESSION['displayname'];
                                echo "</span></marquee></a></div>"; 
                            }
                            else{
                                echo "<a href='login.php'><i class='fa fa-sign-in'></i> Login</a></div>";
                            }
                        ?> -->
                </div>
            </div>

            <script src="app/resources/js/navbar.js"></script>

        </nav>
    </body>

</html> 
