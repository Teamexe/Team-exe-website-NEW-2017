<section class="global-page-header">
        </section>
        <?php
                include_once('dbconnect.php');
                
                //Get the name of current page open in browser
                $namee=basename($_SERVER['PHP_SELF']); 
                
                //fetching page count from database for particular page
                $qry=mysqli_query($link,"SELECT * from hits where nam='$namee'");
                while($rowa = mysqli_fetch_assoc($qry))
                {
                    //getting count INT
                    $out=$rowa['cnt'];
                }

                //now incrementing 1 in the fetched value
                ++$out;
                //updating the new value in database
                $qryu=mysqli_query($link,"UPDATE hits SET cnt='$out' WHERE nam='$namee'");

        ?>
<footer class="footer">
    <div class="container">
    <div class="col-md-8">
    <p class="copyright">&copy; : <span>All rights reserved</span> | Designed, Developed & Hosted by <b><a href="index.php" title="Team EXE official">Team .EXE</a></b></p>
    </div>
    <div class="col-md-4">
                       <!--  Social Media -->
                            
    <a href="https://www.facebook.com/teamexe/" target="_blank" title="Like us on Facebook" class="Facebook">
        <img class="ft" src="images/fb.svg" /><!--<i class="ion-social-facebook"></i>-->
    </a>
        
    <a href="https://www.instagram.com/teamexenith/" target="_blank" title="Follow on Instagram" class="Instagram">
        <img class="ft" src="images/insta.svg" /><!--<i class="ion-social-instagram"></i>-->
    </a>
                          
    <a href="https://www.youtube.com/channel/UCTIpvLaM1G-uUsthgCDauKw" target="_blank" title="Subscribe us on Youtube" class="Youtube">
        <img class="ft" src="images/youtube.svg" /><!--<i class="ion-social-youtube"></i>-->
    </a>
                          
    </div>
    </div>
</footer>