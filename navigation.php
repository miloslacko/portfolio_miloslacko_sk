<?php

    $page_name = basename($_SERVER['SCRIPT_NAME'], '.php');
    if ( $page_name == 'index' ) $page_name = 'home';

 ?>
<div class="nav-bar group">
  <div class="container">
    <div class="logo">
      <a href="index.php" title="Miloš Lacko - Web Design">
        <h1>Miloš Lacko</h1>
      </a>
    </div>

    <nav class="group nav-items">
        <ul class="menu navigation">
            <?php

                if ( $page_name == 'home' ) echo '<li><strong>Home</strong></li>';
                else echo '<li><a href="index.php">Home</a></li>';

                if ( $page_name == 'work' ) echo '<li><strong>Work</strong></li>';
                else echo '<li><a href="work.php">Work</a></li>';

                if ( $page_name == 'services' ) echo '<li><strong>Services</strong></li>';
                else echo '<li><a href="services.php">Services</a></li>';

                if ( $page_name == 'contact' ) echo '<li><strong>Contact</strong></li>';
                else echo '<li><a href="contact.php">Contact</a></li>';

            ?>
        </ul>

        <span class="small-screen-nav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

        <div class="tel-number">
          <a href="tel:+4550652390"><i class="fa fa-phone" aria-hidden="true"></i>+45 50 65 23 90</a>
        </div>
    </nav>

    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
         <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="work.php">Work</a></li>
           <li><a href="services.php">Services</a></li>
           <li><a href="contact.php">Contact</a></li>
         </ul>
      </div>
    </div>

  </div>
</div>
