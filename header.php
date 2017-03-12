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
<?php 
include_once('user_session.php');
 
   if(!isset($_SESSION['login_user']))
   {
       echo '<a href="login.php"><img class="btlog" src="images/signin_button.png"></a>';
   }
   //if user session is set then redirecting user to profile
   else
   {
       echo '<a><button class="btn sr-btn" type="button">'.$session_usr;'</button></a>'; 
       echo '<a href="logout.php"><button class="btn sr-btn" type="button">Logout</button></a>';
   }
?>
                                  
                            </li>
                        </ul>
                  </div>
                </nav>
            </div>
        </header>