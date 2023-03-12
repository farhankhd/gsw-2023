<?php
    $pageTitle = 'MIT Global Startup Workshop 2023 | Athens, Greece';
    $metaDescription = 'MIT Global Startup Workshop is coming to Greece in March 2023! GSW is an annual conference that aims to accelerate entrepreneurial ecosystems around the world, through workshops, mentorship and skills training. Grab your tickets now for an experience you will never forget!';
    $specificKeywords = 'speakers, keynotes, Bill Aullet, Miles Barr, Ubiquitous Energy, Andrey Zarur, Kosta Ligris, Marina Hatsopolous, Willliam Sonneborn, MIT';

    include('navbar.php');
?>

<style>
    /*
    .banner {
        background-image: url(img/banner/banner-01.png);
    }*/
        
    .bold-text {
        font-family: myriad-pro, sans-serif;
        font-weight: 700;
        font-style: normal;
    }
    .light-text{
        font-family: myriad-pro, sans-serif;
        font-style: normal;
        font-weight: 300px;
    }
</style>

<!--PAGE BANNER-->
<section class="startup-pitch">
    <div class="row" style="
        background-image: url(img/banner/banner-01.png);
        background-repeat: no-repeat;
        background-size: cover;height: 344px;">
        <div class="col">
            <h1 class="section-header competition-text">EVENT OVERVIEW</h1>
        </div>
    </div>
</section>

<br><br><br>

<section class="content-schedule container">
    <article class="content ">
        <div class="col-xs-12 col-md-12">
            <span class="anchor" id="schedule-navigation"></span>
            <p class="text-center">
                Subject to change.</p>
        </div>
  </article>
</section>

<!--
<div class="row">
  <div class="col">
          <h1 class="para text-center gradient-text" id="team-section">Keynotes</h1>
          <hr class="team-hr">
  </div>

  <div class="row" id='keynote-kane'>
        <div class="col-sm-12 panel-top text-center">
            <div class="col-sm-12 panel-header">
                <h5 style="font-weight: 900" class="agenda-black"> Learning to Change the World-The story of One Laptop per Child</h5>
            </div>
        </div>
        <br>
        <div class="col-md-12 panel-content">
            <div class="col-md-8">
                <h2> May 27, 08:45-09:30 in Great Hall Full</h2>
                <h4> The One Laptop per Child (OLPC) initiative was born in MIT’s Media Lab and 
                was the first major technology initiative in the education space. Its mission was 
                to target the bottom-of-the-pyramid countries, providing laptops that brought the 
                world “library” to the poorest and most remote parts of the Earth. As President, 
                Chuck provided the business direction to a project that delivered over 3 million 
                computers worldwide as well as the educational software and services to make the
                 deployments successful. In this keynote, he will highlight the challenges of the 
                 nonprofit world.</h4>
            </div>
            <div class="team col-md-4 text-center"><a href="speakers.php#charles">
                <img class="keynote-picture" src="images/speaker-img/charles.png"></a>
                <div class="team-name">Charles Kane</div>
                <div class="team-role">Senior Lecturer</div>
                <div class="team-area">MIT</div>
            </div>
        </div>
  </div> 
</div>
-->

<div class="row">
  <div class="col">
          <h1 class="para text-center gradient-text" id="team-section">Panels</h1>
          <hr class="team-hr">
  </div>
  <div class="row" id='panel-askme'>
        <div class="col-sm-12 panel-top text-center">
            <div class="col-sm-12 panel-header">
                <h5 style="font-weight: 900" class="agenda-black">Building Tech Ventures</h5>
            </div>
        </div>
        <br>
        <div class="col-md-12 panel-content">
            <h2> March 30, 11:35-12:25 in Trianti Hall, Athens Concert Hall</h2>
            <h4> How do you know if your idea will make a successful business? 
                 This panel will explain how to identify promising opportunities for new tech ventures. 
                 Experienced investors, founders, and startup coaches will share how to understand markets, 
                 de-risk ideas, and then build successful startups. 
            </h4>
        </div>

        <div class="col-md-12 text-center">
            <!--Moderator: Macaulay Kenney, MIT-->
            <div class="team container col-md-2"><a href="speakers.php">
                <img class="panel-picture" src="img/speakers/MarinaHatsopoulos.jpg"></a>
                <div class="name">Marina Hatsopoulos</div>
                <div class="title">Entrepreneur & Writer</div>
                <div class="title">Board Chair, Levitronix Technologies</div>
            </div>
            <div class="team container col-md-2"><a href="speakers.php">
                <img class="panel-picture" src="img/speakers/LarsRasmussen.jpg"></a>
                <div class="name">Lars Rasmussen</div>
                <div class="title">Angel Investor</div>
                <div class="title">Co-founder of Google Maps</div>
            </div>
            <div class="team container col-md-2"><a href="speakers.php">
                <img class="panel-picture" src="img/speakers/MariaZubeldia.jpg"></a>
                <div class="name">Maria Zubeldia Diaz</div>
                <div class="title">Director of Entrepreneurship Centre, Said Business School, University of Oxford</div>
            </div>
        </div>
  </div>


<script src="../assets/js/scripts.js"></script>

<?php
include("templates/footer.php");
?>

