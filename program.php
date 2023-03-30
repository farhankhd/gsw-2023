<?php
    $pageTitle = 'MIT Global Startup Workshop 2023 | Athens, Greece';
    $metaDescription = 'MIT Global Startup Workshop is coming to Greece in March 2023! GSW is an annual conference that aims to accelerate entrepreneurial ecosystems around the world, through workshops, mentorship and skills training. Grab your tickets now for an experience you will never forget!';
    $specificKeywords = 'speakers, keynotes, Bill Aullet, Miles Barr, Ubiquitous Energy, Andrey Zarur, Kosta Ligris, Marina Hatsopolous, Willliam Sonneborn, MIT';


    include('navbar.php');
    include('markup.php');
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
            <h1 class="section-header competition-text">PROGRAM OVERVIEW</h1>
        </div>
    </div>
</section>

<br><br><br>

<section class="content-schedule container">
    <article class="content ">
        <div class="col-xs-12 col-md-12">
            <span class="anchor" id="schedule-navigation"></span>
            
            <p class="text-center">
                <a class="btn btn-default register-btn" href="https://acrobat.adobe.com/link/track?uri=urn:aaid:scds:US:ba1af42b-a93d-385b-a5a6-b4f85c6ded70" role="button">View Agenda</a>
                <br />
                <br />
          </p>
      </div>
  </article>
</section>
<section>
    <embed src="/2023/doc/gsw-program-2023.pdf" type="application/pdf" width="90%" max-height="800px" />
</section>
  
<?php
include("footer.php");
?>
