<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
    <body>
      <!-- start of alpha/beta banner -->
      <?php include("navbar.php")?>
      <!-- content from other pages in loaded here -->
      <div id="main" class="main-content">
          <?php 

            $whichPage = $_SESSION['whichPage'];
            
            // handle root call
            if ($whichPage == ""){
              $whichPage = 'home';
            }

            include($whichPage.".php");

          ?>
      </div>
      <!-- start of footer -->
      <?php include("footer.php"); ?>
      <!-- end of footer --> 
    </body>
</html>
