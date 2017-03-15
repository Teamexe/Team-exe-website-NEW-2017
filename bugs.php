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

    <title>Bugs - Team .EXE</title>

  </head>

  <body>
<?php
      include_once('stylesheets.php');          
      include_once('dbconnect.php');
      include_once('header.php');
      include_once('navigation.php');

      if(isset($_POST['bug-submit']))
{

//catch the details from form here
  $nam=$_POST['nam'];
  $info=$_POST['info'];

  $dat=date("h:i:sa");
  $day=date("D");
  
  $fp = fopen('bugs.txt', 'a');
  fwrite($fp, ''.$day.','.$dat.' - '.$nam.' -> '.$info.''.PHP_EOL);
  fclose($fp);

?>       
    
    <?php
          echo "<center>";
          echo "<br><h2><code>Thanks for reporting bug<br>Your contribution will help making this website better<br><a>Report Another</a></code></h2><br><br>";
          echo "</center>";
          } 
    ?>
    <center>
    <div class="container">
    <h1>Bugs in Team .EXE Website (Beta)</h1>
    <p>Please report bugs you've encountered while accessing Team .EXE's website</p>
    <form id="elective-form" action="" method="post" role="form" >
                  <div class="form-group">
                    <input type="text" name="nam" id="nam" tabindex="1" class="form-control" placeholder="Your Name" value="" required>
                  </div>
                  <div class="form-group">
                    <textarea name="info" class="form-control" placeholder="Add detailed information about the bug you've encountered, Please mention mobile/Desktop view" required></textarea>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="bug-submit" id="bug-submit" tabindex="4" class="form-control btn btn-info" value="Report Bug">
                      </div>
                    </div>
                  </div>
    </form>
</div>
    

<?php
    include_once('footer.php');
?> 
</body>
</html>
