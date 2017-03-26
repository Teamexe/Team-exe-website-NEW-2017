         <?php
              //Get the name of current page open in browser
                $head_nm=basename($_SERVER['PHP_SELF']); 
         ?>
         <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.php" >
                            <img src="images/logo.png" alt="Team .EXE logo" title="Team .EXE logo"> 
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="projects.php">Projects</a></li>
                            <li><a href="events.php">Events</a></li>

<?php 
include_once('user_session.php');
 
   if(!isset($_SESSION['login_user']))
   {
       echo '<li><a href="login.php">Sign In</a></li>';
   }
   //if user session is set then redirecting user to profile
   else
   {
       echo '<li><a href="profile.php">';
       echo $session_usr;
       echo '</a></li>'; 
       echo '<li><a href="logout.php">Logout</a>';
   }
?>
                            </li>
                        </ul>
                  </div>
                </nav>
            </div>
        </header>
<!-- Experimental, can be removed -->
<section class="global-page-header">
</section>
