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


<div class="content">
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
        </div>

<section class="global-page-header">
        </section>
        
 <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/image.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Event name</h1>
              <p>Event description here</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Event page link</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/image.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Event name</h1>
              <p>Event description here</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Event page link</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/image.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Event name</h1>
              <p>Event description here</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Event page link</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
        </div> <!--/.carousel -->
    <div>    
</div>



    <div class="container">
      <center>
      <h1>All Events</h1>
      </center>
      <div class="row">
      <!-- script loop from here -->
        <div class="col-md-4">
          <h2>Name 1</h2>
          <p>Fetch names from database using php.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      <!-- script loop ends here -->

      <!-- script loop from here -->
        <div class="col-md-4">
          <h2>Name 1</h2>
          <p>Fetch names from database using php.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      <!-- script loop ends here -->
      <!-- script loop from here -->
        <div class="col-md-4">
          <h2>Name 1</h2>
          <p>Fetch names from database using php.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      <!-- script loop ends here -->        
      </div>
      </div>

<?php
    include_once('footer.php');
?>     
  </body>
</html>
