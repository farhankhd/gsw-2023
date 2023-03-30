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
                <a class="btn btn-default register-btn" href="https://github.com/farhankhd/gsw-2023/releases/download/program/mit-gsw-program-2023.pdf" role="button">Download Program</a>
                <a class="btn btn-default register-btn" href="doc/gsw-agenda-2023-final.pdf" role="button">Download Agenda</a>
                <br />
                <br />
          </p>
      </div>
  </article>
</section>
<section>
    <embed src="https://acrobat.adobe.com/link/track?uri=urn:aaid:scds:US:b7b116c2-2910-3960-83f9-b74841bb8ffd" type="application/pdf" width="90%" height="auto" />
</section>
  
<?php
include("footer.php");
?>

<script type="text/javascript">
    $(".btn.btn-schedule").on("click", function(e) {
        var contentElementId = $(this).data("event-day");

        // Hide content from other days
        $(".event-day").addClass("hide");

        // Display content from this day
        $("#"+contentElementId).removeClass("hide");

        // Mark day as current
        $(".btn.btn-schedule").removeClass("active");
        $(this).addClass("active");
        return false;
    });
</script>';

