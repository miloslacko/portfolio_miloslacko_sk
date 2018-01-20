<!DOCTYPE html>
<html lang="en">
<head>

  <?php include 'analytics.php';?>

<meta charset="utf-8" />
<meta name="description" content="I’m a graphic designer and web designer. I make creative designs and websites that are user friendly, meet client’s goals and business objectives.">
<meta name="keywords" content="Milos Lacko,portfolio,web development,web design,HTML,CSS,JavaScript, WordPress development, website creation, web design freelancer, freelancer, freelance, website, graphic designer, hire web designer">
<meta name="author" content="Milos Lacko">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Contact | Miloš Lacko - Freelance Web & Graphic Designer</title>

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

  <section class="page-title-contact">
    <div class="container">
      <h1>CONTACT</h1>
    </div>
  </section>

  <div class="container">
  <section class="contact-page">

      <div class="contact-page-info">
          <h1>Contacts</h1>
          <ul>
              <li><i class="fa fa-home"></i>Copenhagen/Rakoľuby</li>
              <li><a href="tel:+4550652390"><i class="fa fa-phone"></i>+45 50 65 23 90</a></li>
              <li><a href="mailto:hello@miloslacko.sk" title="Send me a message"><i class="fa fa-envelope-o"></i>hello@miloslacko.sk</a></li>
          </ul>
      </div>

      <div class="contact-form">
          <h1>Looking to build a professional website for your business?</h1>
          <p>Feel free to fill out the form and I will get back to you as soon as possible.</p>

          <form action="processform.php" method="post" name="sentMessage" id="contactForm" novalidate>

            <p>Your name</p>
            <input type="text" class="form-control" name="yourname" id="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block text-danger"></p>

            <p>Your email</p>
            <input type="text" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
            <p class="help-block text-danger"></p>

            <p>Subject</p>
            <input type="text" class="form-control" name="subject" id="subject" required data-validation-required-message="Please enter your subject.">
            <p class="help-block text-danger"></p>

            <p>Your message</p>
            <textarea name="comments" id="message" required data-validation-required-message="Please enter a message." style="height:300px"></textarea>
            <p class="help-block text-danger"></p>

            <div id="success"></div>
            <button type="submit" class="contact-page-btn">SEND &nbsp; ></button>

          </form>


      </div>



  </section>
    </div>




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
