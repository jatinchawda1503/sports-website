<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sports Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include("./../includes/styles.php");?>

</head>


<body>

<!-----------------------------------------------
                    Header 
------------------------------------------------->

<?php include("./../components/header/header.php");?>

  <!-----------------------------------------------
                    Events Banner
------------------------------------------------->
<?php include("./../components/events/events-inner/events-banner.php");?>


<!-----------------------------------------------
                    Events content
------------------------------------------------->
<div class="section-bg">
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">

              <!-----------------------------------------------
                              Events Tabs
          ------------------------------------------------->
          <?php include("./../components/events/events-inner/events-tabs.php");?>
      
              </div>

              <div class="col-lg-4 col-md-4 col-sm-12">

               <!-----------------------------------------------
                                    Events Tabs
                ------------------------------------------------->
                <?php include("./../components/events/events-inner/event-sidebar.php");?>

              

              </div>
        
    </div>
</div>
</div>
<!-----------------------------------------------
                    Sponsers
------------------------------------------------->
<?php include("./../components/sponsers/sponsers.php");?>

<!-----------------------------------------------
                    FAQ
------------------------------------------------->
<?php include("../components/faq/faq.php");?>

<!-----------------------------------------------
                    footer
------------------------------------------------->
<?php include("../components/footer/footer.php");?>

<?php include("../includes/scripts.php");?>
</body>

</html>