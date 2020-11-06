<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sports Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include("./includes/styles.php");?>

</head>


<body>

<!-----------------------------------------------
                    Header 
------------------------------------------------->

<?php include("./components/header/header.php");?>

<!-----------------------------------------------
                    Banner
------------------------------------------------->

<?php include("./components/banner/banner.php");?>
 
<!-----------------------------------------------
                    Latest Events 
------------------------------------------------->
<?php include("./components/events/latest-events.php");?>

<!-----------------------------------------------
                    Comming Events
------------------------------------------------->

<?php include("./components/events/comming-soon.php");?>


<!-----------------------------------------------
                    About Us
------------------------------------------------->
<?php include("./components/about/about-front.php");?>


<!-----------------------------------------------
                    Sponsers
------------------------------------------------->
<?php include("./components/sponsers/sponsers.php");?>

<!-----------------------------------------------
                    FAQ
------------------------------------------------->
<?php include("./components/faq/faq.php");?>

<!-----------------------------------------------
                    footer
------------------------------------------------->
<?php include("./components/footer/footer.php");?>

<?php include("./includes/scripts.php");?>
</body>

</html>