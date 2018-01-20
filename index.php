<!DOCTYPE html>
<html lang="en">
<head>

  <?php include 'analytics.php';?>

<meta charset="utf-8" />
<meta name="description" content="I’m a graphic designer and web designer. I make creative designs and websites that are user friendly, meet client’s goals and business objectives.">
<meta name="keywords" content="Milos Lacko,portfolio,web development,web design,HTML,CSS,JavaScript, WordPress development, website creation, web design freelancer, freelancer, freelance, website, graphic designer, hire web designer">
<meta name="author" content="Milos Lacko">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Miloš Lacko - Freelance Web & Graphic Designer</title>

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

  <section class="hero">
    <div class="container">
      <div class="hero-text">
          <h1>I create value<br />
              & build brand confidence</h1>
          <p>New website, online store, graphic design</p>
          <div class="readmore-btn">
            <a href="services.php">READ MORE &nbsp; ></a>
          </div>
      </div>
      <div class="hero-img">
        <img src="img/djcrush-heroimg.jpg" alt="Miloš Lacko - DJ CRUSH - Web design">
      </div>
    </div>
  </section>

  <section class="portfolio-project">
    <div class="container">
      <div class="portfolio-project-description">
        <h1>Danexplus online store</h1>
        <p>
          Danexplus online store sells high-quality and certified
          mattresses. The project resulted in a Business & Marketing
          strategy, Online Store redesign and Visual Identity.
        </p>
        <p>
          The purpose of the project was to investigate and analyze
          the market to develop effective business strategy and
          redesign current client’s website.
        </p>
        <p>
          At first user research and market research was conducted to
          identify the client’s strengths, a value proposition that will
          make client’s business stand out in a crowd of competitors.
        </p>

        <div class="readmore-btn">
          <a href="danexplus-casestudy.php">READ MORE &nbsp; ></a>
        </div>
      </div>

      <div class="portfolio-project-images">
        <img src="img/danexplus-portfolio.jpg" alt="Miloš Lacko - Danexplus online store">
      </div>
    </div>
  </section>

   <?php include 'portfolio-gallery.php';?>

   <section class="aboutme">
      <div class="container">
         <h1>Graphic designer & Web designer</h1>
         <img src="img/milos.jpg" alt="Miloš Lacko">
         <p>I’m a graphic designer and web designer, who makes creative designs and websites that are user friendly, meet client’s goals
            and business objectives. I strive for constant improvement, education and holistic UX design approach.
            Every project gives me new experience and strengthens my skills.<br>
            Let's make ideas happen!</p>
      </div>
   </section>

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
