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
                        <ul class="navbar-right">
                            <li>
                            <a href="index.php"><button class="btn <?php if($head_nm!=='index.php') echo 'abc'; ?>" type="button">Home</button></a>
                            <a href="about.php"><button class="btn <?php if($head_nm!=='about.php') echo 'abc'; ?>" type="button">About</button></a>
                            <a href="contact.php"><button class="btn <?php if($head_nm!=='contact.php') echo 'abc'; ?>" type="button">Contact</button></a>
                            <a href="projects.php"><button class="btn <?php if($head_nm!=='projects.php') echo 'abc'; ?>" type="button">Projects</button></a>
                            <a href="events.php"><button class="btn <?php if($head_nm!=='events.php') echo 'abc'; ?>" type="button">Events</button></a>

<?php 
include_once('user_session.php');
 
   if(!isset($_SESSION['login_user']))
   {
       echo '<a href="login.php"><img class="btlog" src="images/signin_button.png"></a>';
   }
   //if user session is set then redirecting user to profile
   else
   {
       echo '<a href="profile.php"><button class="btn abc" type="button">';
       echo $session_usr;
       echo '</button></a>'; 
       echo '<a href="logout.php"><button class="btn  abc" type="button">Logout</button></a>';
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