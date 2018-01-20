<!DOCTYPE html>
<html lang="en">
<head>

  <?php include 'analytics.php';?>

<meta charset="utf-8" />
<meta name="description" content="I’m a graphic designer and web designer. I make creative designs and websites that are user friendly, meet client’s goals and business objectives.">
<meta name="keywords" content="Milos Lacko,portfolio,web development,web design,HTML,CSS,JavaScript, WordPress development, website creation, web design freelancer, freelancer, freelance, website, graphic designer, hire web designer">
<meta name="author" content="Milos Lacko">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Work | Miloš Lacko - Freelance Web & Graphic Designer</title>

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/style.css"/>

<link rel="icon" href="/favicon.ico" type="image/x-icon">

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--[if lt IE 9]>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
<![endif]-->

</head>

<body>

  <header>

     <?php include 'navigation.php';?>

  </header>

  <section class="page-title">
    <div class="container">
      <h1>WORK</h1>
    </div>
  </section>

   <?php include 'portfolio-gallery.php';?>

    <?php include 'contact-section.php';?>

    <?php include 'footer.php';?>


  <script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
  </script>


</body>
</html>
