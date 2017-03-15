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
    <section id="works" class="works">
    <center>
                <div class="jumbotrona">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s"><b>Our Events Schedule</b></h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            Below is the list of our ongoing events, with their status mentioned.<br/>Click on the event to know more about it.
                        </p>
                    </div>

                    <div class="row">
                    <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                                <div class="img-wrapper">
                                    
                                </div>
                                <figcaption>
                                <h3>
                                <a href="http://goo.gl/forms/JC6hMFQKFV" target="_blank" title="register now">
                                    CodeSense<sup id="nimbus"> During Nimbus</sup>
                                </a>
                                </h3>
                                <p>
                                    08/04/16 &nbsp&nbsp11:00 AM
                                </p>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                                <div class="img-wrapper">
                                    
                                </div>
                                <figcaption>
                                <h3>
                                <a href="http://goo.gl/forms/ygxZ83T4LD" target="_blank" title="starting soon">
                                    Exeplore<sup id="nimbus"> During Nimbus</sup>
                                </a>
                                </h3>
                                <p>
                                    08/04/16 &nbsp&nbsp2:00 PM
                                </p>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                                <div class="img-wrapper">
                                    
                                </div>
                                <figcaption>
                                <h3>
                                <a href="http://goo.gl/forms/ygxZ83T4LD" target="_blank" title="starting soon">
                                    CodeSwap<sup id="nimbus"> During Nimbus</sup>
                                </a>
                                </h3>
                                <p>
                                    08/04/16 onwards
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                                <div class="img-wrapper">
                                    
                                </div>
                                <figcaption>
                                <h3>
                                <a href="http://goo.gl/forms/JC6hMFQKFV" target="_blank" title="register now">
                                    HackHunt<sup id="nimbus"> During Nimbus</sup>
                                </a>
                                </h3>
                                <p>
                                    08/04/16 onwards
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                    <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                                <div class="img-wrapper">
                                    
                                </div>
                                <figcaption>
                                <h3>
                                <a href="http://hackerearth.com/game_of_codes" target="_blank" title="starting soon">
                                    Game of codes<sup id="Over"> Over</sup>
                                </a>
                                </h3>
                                <p>
                                    06/04/16  &nbsp&nbsp&nbsp9:00 PM - 11:59 PM
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                    <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                                <div class="img-wrapper">
                                    
                                </div>
                                <figcaption>
                                <h3>
                                <a href="paradox/" title="select theme">
                                    Paradox<sup id="ongoing"> Ongoing</sup> 
                                </a>
                                </h3>
                                <p>
                                    29/03/16
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                    <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                                <div class="img-wrapper">
                                    
                                </div>
                                <figcaption>
                                <h3>
                                <a href="webbed" target="_blank" title="select theme">
                                    Webbed<sup id="ongoing"> Ongoing</sup>
                                </a>
                                </h3>
                                <p>
                                    18/03/16 - 03/04/16
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="img-wrapper">
                                    
                                </div>
                                <figcaption>
                                <h3>
                                <a href="https://www.facebook.com/teamexe/posts/1080498001971000" target="_blank" target="_blank" title="View photos">
                                    Ethical hacking <sup id="Over"> Over</sup>
                                </h3>
                                <p>
                                    12/03/16 & 13/03/16 
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        
                        
                    <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                                <div class="img-wrapper">
                                    
                                </div>
                                <figcaption>
                                <h3>
                                <a href="huntcode.html" title="click to participate">
                                    Hunt the code <sup id="Over"> Over</sup>
                                </a>
                                </h3>
                                <p>
                                    15/03/16 - 18/03/16
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="img-wrapper">
                                    
                                </div>
                                <figcaption>
                                <h3>
                                <a title="a whatsApp event">
                                    Brain busters <sup id="Over"> Over</sup>
                                </a>
                                </h3>
                                <p>
                                    11/03/16 - 15/03/16 
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        
                    <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="img-wrapper">
                                    
                                </div>
                                <figcaption>
                                <h3>
                                <a href="https://www.facebook.com/media/set/?set=a.1058962394124561.1073741826.189296577757818&amp;type=3" target="_blank" title="View photos">
                                    Linux Installation Fest <sup id="Over"> Over</sup>
                                </a>
                                </h3>
                                <p>
                                    13/02/16
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="img-wrapper">
                                    
                                </div>
                                <figcaption>
                                <h3>
                                <a href="https://www.facebook.com/media/set/?set=a.1059623360725131.1073741827.189296577757818&amp;type=3" target="_blank" title="View photos">
                                    Linux Command Line <sup id="Over"> Over</sup>
                                </a>
                                </h3>
                                <p>
                                    21/02/16 
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                <div class="img-wrapper">
                                    <!-- <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" > -->
                                
                                </div>
                                <figcaption>
                                <h3>
                                <a href="https://www.facebook.com/teamexe/" target="_blank" title="View event live">
                                    Trolled <sup id="Over"> Over</sup>
                                </a>
                                </h3>
                                <p>
                                    9/03/16 - 18/03/16 
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                </center>
            </section> <!-- #works -->


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
