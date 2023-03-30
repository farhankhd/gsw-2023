<?php
    $pageTitle = 'MIT Global Startup Workshop 2023 | Athens, Greece';
    $metaDescription = 'MIT Global Startup Workshop is coming to Greece in March 2023! GSW is an annual conference that aims to accelerate entrepreneurial ecosystems around the world, through workshops, mentorship and skills training. Grab your tickets now for an experience you will never forget!';
    $specificKeywords = 'speakers, keynotes, Bill Aullet, Miles Barr, Ubiquitous Energy, Andrey Zarur, Kosta Ligris, Marina Hatsopolous, Willliam Sonneborn, MIT';


    include('navbar.php');
    include('markup.php');
?>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1"/>
    
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
</head>
<body>

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
        <div id="adobe-dc-view"></div>
        <script src="https://documentservices.adobe.com/view-sdk/viewer.js"></script>
        <script type="text/javascript">
        document.addEventListener("adobe_dc_view_sdk.ready", function()
        {
            var adobeDCView = new AdobeDC.View({clientId: "85e8dca1c621441fb10c5b42863af4f7", divId: "adobe-dc-view"});
            adobeDCView.previewFile(
           {
              content:   {location: {url: "https://acrobat.adobe.com/link/track?uri=urn:aaid:scds:US:d0973e17-a427-3e28-af42-31a318d18d79"}},
              metaData: {fileName: "gsw-program-2023.pdf"}
           });
        });
        </script>
    </section>
    <!--<section>
        <embed src="/2023/doc/gsw-program-2023.pdf" type="application/pdf" width="90%" height="800" />
    </section>-->
</body>
  
<?php
include("footer.php");
?>
