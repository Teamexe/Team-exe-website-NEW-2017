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

    <title>About - Team .EXE</title>

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
    <center>
    <div class="container">
    <h1>Team .EXE</h1>
    <p> We are departmental team of Computer Science & Engineering Department for Techfest NIMBUS.<br/>
We are passionate about technology & our curiousity drives us towards the development of new things and taking new projects. </p>
</div>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotrona">
        <img src="images/team.jpg" alt="Team .EXE" title="Team .EXE - credits : Pixonoids" style="width: 100%" />
    </div>
    </center>
    <section class="global-page-header">
        </section>
      <div class="container">
      <center>
        <h1>Our <a>Vision</a> & <a>Mission</a></h1>
        <ul>
        <li>Professional as well as Personal growth.</li>
        <li>Achieve excellence in Team work.</li>
        </ul>
      </center>
      </div>
        <section class="global-page-header">
        </section>

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
