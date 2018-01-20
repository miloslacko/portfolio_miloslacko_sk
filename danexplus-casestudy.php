<!DOCTYPE html>
<html lang="en">
<head>

  <?php include 'analytics.php';?>

<meta charset="utf-8" />
<meta name="description" content="I’m a graphic designer and web designer. I make creative designs and websites that are user friendly, meet client’s goals and business objectives.">
<meta name="keywords" content="Milos Lacko,portfolio,web development,web design,HTML,CSS,JavaScript, WordPress development, website creation, web design freelancer, freelancer, freelance, website, graphic designer, hire web designer">
<meta name="author" content="Milos Lacko">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Danexplus Case study | Miloš Lacko - Freelance Web & Graphic Designer</title>

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/lightslider.css" />

<link rel="icon" href="/favicon.ico" type="image/x-icon">

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--[if lt IE 9]>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
<![endif]-->

<script src="js/lightslider.js"></script>
<script>
   $(document).ready(function() {
  $("#content-slider").lightSlider({
            loop:true,
            keyPress:true
        });
        $('#image-gallery').lightSlider({

            item:1,
            thumbItem:9,
            slideMargin: 0,
            speed:2500,
            auto:true,
            loop:true,
            pauseOnHover: true,
            pause:4000,

            onSliderLoad: function() {
                $('#image-gallery').removeClass('cS-hidden');
            }
        });
});
</script>

</head>

<body>

  <header>

     <?php include 'navigation.php';?>

  </header>

  <div class="demo">
      <div class="item">
          <div class="clearfix" style="max-width:1920px;">
              <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                  <li>
                    <img src="img/danexplus-title-img.jpg" alt="">
                  </li>
                  <li>
                    <img src="img/danexplus-title-img-product-page.jpg" alt="">
                  </li>
              </ul>
          </div>
      </div>
  </div>

  <div class="casestudy-name">
     Danexplus
  </div>

  <section class="casestudy">
    <div class="container">
      <div class="casestudy-description">
        <h2>ABOUT PROJECT</h2>
        <p>Danexplus is an online store that sells high-quality and certified mattresses. The purpose of the project
           was to investigate and analyze the market to develop effective business strategy and redesign current client’s
           website. At first user research and market research was conducted to identify the client’s strengths,
           a value proposition that will make client’s business stand out in a crowd of competitors. The project resulted
           in a Business & Marketing strategy, Online Store redesign and Visual Identity.</p>

         <ul>
            <li><span class="bold">Realization:</span>July/August 2017</li>
            <li><span class="bold">Client:</span> Danexplus </li>
            <li><span class="bold">Category:</span> Business strategy, Web design, Graphic design</li>
         </ul>
         <ul class="links">
           <li>
             <a class="view-website-btn" href="danexplusproject/index.html" target="_blank">View website</a>
           </li>
           <li>
              <a class="view-website-btn" href="Danexplus_Milos_Lacko.pdf" target="_blank">View documentation</a>
           </li>
         </ul>
      </div>
    </div>
  </section>


  <section class="casestudy-img">
    <div class="container">

      <img src="img/vizitky.jpg">

      <img src="img/danexplus_desktop_concept.png">

      <img src="img/product_page2.png">

      <img src="img/danexplus-product.png">

      <img src="img/nove-vizitky-mockup.png">


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
