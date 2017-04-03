<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="307712715810-5gqv439ef8l9hmmod3ggpbdplcc7t7gq.apps.googleusercontent.com">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Team .EXE is the technical team of Computer Science & Engineering Department for technical fest NIMBUS at NIT Hamirpur.">
    <meta name="author" content="Team .EXE">
    <link rel="icon" href="images/title.png">
    <meta property="og:image" content="images/logo.png"/>
    <meta property="og:title" content="Team .EXE -  NIT Hamirpur"/>
    <meta property="og:url" content="http://exe.nith.ac.in"/>
    <meta property="og:site_name" content="Team .EXE - NIT Hamirpur"/>

    <title>Team .EXE</title>

    <?php 
          include_once('stylesheets.php');          
          include_once('dbconnect.php');
    ?>
  </head>

  <body>
<?php 
      include_once('header.php');
      include_once('navigation.php');
?>       

<!-- Fade & scale -->
<div id="fadeandscale" class="content cover">
<center>
<img src="images/logo.png" />
    <svg viewBox="0 0 1200 200">
                <symbol id="s-text">
                    <text text-anchor="middle" x="50%" y="50%" dy=".35em">
                        Team .EXE
                    </text>
                </symbol>
                <use xlink:href="#s-text" class="text"></use>
                <use xlink:href="#s-text" class="text"></use>
                <use xlink:href="#s-text" class="text"></use>
                <use xlink:href="#s-text" class="text"></use>
                <use xlink:href="#s-text" class="text"></use>
            </svg>
            
            <svg viewBox="0 0 1900 200">
                <symbol id="s-text">
                    <text text-anchor="middle" x="50%" y="50%" dy=".35em" class="text--line">
                        welcomes you
                    </text>
                </symbol>
                <clippath id="cp-text">
                    <text text-anchor="middle" x="50%" y="50%" dy=".35em" class="text--line">
                        welcomes you
                    </text>
                </clippath>
                <g clip-path="url(#cp-text)" class="shadow">
                    <rect width="100%" height="100%" class="anim-shape anim-shape--shadow"></rect>
                </g>
                <g clip-path="url(#cp-text)" class="colortext">
                    <rect width="100%" height="100%" class="anim-shape"></rect>
                    <rect width="80%" height="100%" class="anim-shape"></rect>
                    <rect width="60%" height="100%" class="anim-shape"></rect>
                    <rect width="40%" height="100%" class="anim-shape"></rect>
                    <rect width="20%" height="100%" class="anim-shape"></rect>
                </g>
                <use xlink:href="#s-text" class="text--transparent"></use>
            </svg>
    <button class="fadeandscale_close btn-lg btn btn-info">Enter Website</button>
</center>
</div>

<script>
$(document).ready(function () {

    $('#fadeandscale').popup({
        pagecontainer: '.container',
        autoopen: 'true',
        opacity: '0.85',
        transition: 'all 0.3s'
    });

});
</script>
 <a href="http://exe.nith.ac.in/confess" target="_blank"><img src="images/confess.png" alt="NITH Confessions" style="width: 100%" /></a>

<!-- Projects,events &workshops of Team .EXE -->
<section id="blog-full-width">
                <div class="container">
                <center><h1><b>OUR CONTRIBUTION THIS NIMBUS</b></h1></center>
                   <?php
                        include_once('projects_embed.php');
                        include_once('event_embed.php');
                        include_once('workshop_embed.php');
                   ?>                     
                   </div>
                    <center><h1><b>OUR ONGOING EVENTS</b></h1></center>
                   <?php
                        include_once('huntcode_embed.php');
                   ?>                     
                   </div>
                   </div>
                   </section>
                   
                  
                   

      </div>
      </div>

<?php
    include_once('footer.php');
?>     
</script>
  </body>
</html>
