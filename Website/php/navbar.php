<?php
require 'fetchData/connection.php';

//get user picture path from database
$getnavpic = $conn->prepare('SELECT profilepicture FROM accounts WHERE id = ?');
$getnavpic->bind_param('i', $_SESSION['id']);
$getnavpic->execute();
$getnavpic->bind_result($navprofilepic);
$getnavpic->fetch();
$getnavpic->close();
?>

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
                    require_once("fetchData/getClassID_Name.php");
                    while ($row = mysqli_fetch_array($classID_Name)) {
                ?>
                        <a href="class.php?classID=<?php echo $row["classID"]; ?>"><i class="fa fa-ship"></i> <?php echo $row["ClassName"]; ?></a>
                <?php
                    }
                    mysqli_free_result($classID_Name);
                    mysqli_close($conn);
                ?>            
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">
                <i class="fa fa-list"></i> Regattas <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <?php
                    include("fetchData/getRacesID_Name.php");
                    while ($row = mysqli_fetch_array($raceID_Name)) {
                ?>
                        <a href="regatta.php?regattaID=<?php echo $row["raceID"]; ?>"><i class="fa fa-file"></i> <?php echo $row["RaceName"]?></a>   
                <?php
                    }
                    mysqli_free_result($raceID_Name);
                    mysqli_close($conn);
                ?>    
            </div>
        </div>
  <a href="contact.php"><i class="fa fa-address-card"></i> Contact</a>
  <div class="right-button">
  <?php
                if(isset($_SESSION['loggedin']) && $navprofilepic ==""){
                    echo "<a href='auth/logout.php'><i class='fa fa-sign-out'></i> Logout</a>";
                    echo "<div class='profilebtn'><a href='profile.php' title='Profile'><marquee scrollamount='3'><img class='navprofilepic' src='images/profilepictures/default.png'> <span>" . $_SESSION['displayname'];
                    echo "</span></marquee></a></div>";
                }
                else if(isset($_SESSION['loggedin'])){
                    echo "<a href='auth/logout.php'><i class='fa fa-sign-out'></i> Logout</a>";
                    echo "<div class='profilebtn'><a href='profile.php' title='Profile'><marquee scrollamount='3'><img class='navprofilepic' src='images/profilepictures/".$navprofilepic."'> <span>" . $_SESSION['displayname'];
                    echo "</span></marquee></a></div>";
                    
                }
                else{
                    echo "<a href='login.php'><i class='fa fa-sign-in'></i> Login</a></div>";
                }
            ?>
    </div>
  </div>

  <script src="javascript/navbar.js"></script>

</nav>
</body>

</html> 
