<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> User Dash Board</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="#">Menu</a>
                </h1>
                <span>M</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                
                <li>
                    <a href="notification.php">
                        <i class="far fa-envelope"></i>
                        Mailbox
                    </a>
                </li>
                <li>
                    <a href="events.html">
                        My Events
                        
                    </a>
                </li>
				<li>
                    <a href="createEventForm.php"> 
                        Create A new Event
                    </a>
                </li>
                
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
						<?php
						echo "Welcome  ".$_SESSION['username']."</br>";
						?>
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
              
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                 
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits"><?php
										echo $_SESSION['username'];?></h3>
                                        <a href="mailto:info@example.com">saigrace2000@gmail.com</a>
                                    </div>
                                </div>
                                <a href="userdashboard.php" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-user mr-3"></i>My Profile</h4>
                                </a>
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            
                    
            <!-- Simple-chart -->
            <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Notifications<br>
<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'funds';  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
//echo 'Connected successfully<br/>';  
$sql = "SELECT * FROM createEvents";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval))
 { echo '<br>';
    	echo " EventName: {$row['eventId']} "."<br>".  
            " Description: {$row['eventDesc']} "."<br>"." NGO Name: {$row['ngoName']} "."<br>".
" budget: {$row['budget']} ";
		$_SESSION['eventId']=$row['eventId'];
	echo "
	<br><br><a href='beavolunteer.php' target='_parent'><button name='beavolunteer' type='submit' value='Be a Volunteer'>Be a Volunteer</button></a>
<a href='onSubmit.html' target='_parent'><button name='Investor' type='submit' value='Investor'>Investor</button></a><br><br>
</form>";
 }
}else{  
echo "No Events";  
}  
mysqli_close($conn);  
?>  

 </h4>
                <div id="Hybridgraph" class="simple-chart1">
                </div>
            </div>
            <!--// Simple-chart -->

         


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->
    
    <!-- loading-gif Js -->
    <script src="js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->
    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>