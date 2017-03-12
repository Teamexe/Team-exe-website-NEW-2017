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
?>       
    
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
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
    </div><!-- /.carousel -->
<div><center>
</center></div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      <center>
        <h1>Ongoing Events</h1>
        <p>Ongoing events with pictures.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </center>
      </div>
    </div>
    <div class="jumbotron">
      <div class="container">
      <center>
        <h1>Upcoming Events</h1>
        <p>Upcoming events with pictures.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </center>
      </div>
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
?> <!-- /container -->

    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    
  </body>
</html>
