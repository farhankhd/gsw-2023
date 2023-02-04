<?php
    $pageTitle = 'Team | MIT Global Startup Workshop 2018';
    include('templates/nav-bar.php');
?>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130174054-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130174054-2');
    gtag('send', 'pageview');
    </script>

</head>

<div class="parallax-window header" data-parallax="scroll" style="background-image: url('headers/img/mit-dome.jpg');">
    <div class="header-overlay">
    <h1 class="parallax-text">
        Collaborators
    </h1>
    </div>
</div>

<div class="line"></div>
	    <br><br><br><br>
            <div class="section-subheader text-center">
                <p><h1 style='color: rgba(243, 239, 239, 0.9);'>Academic Collaborators</h1></p>
                <div class="row">
                    <br>
                    <img src="images/logo/mslao-logo.png" class="partner-logo">
                    <img src="images/logo/legatum_2.png" class="partner-logo">
                    <img src="images/logo/martin_trust_2.png" class="partner-logo">
                    <img src="images/logo/reap_2.png" class="partner-logo">
                </div>
            </div>
        <br><br>
     </div>

<body>

<!--<div class="section">
    <br>

    <div class="section-header section-header-page" style="color: white">Collaborators</div>
<div>
</div>-->


<div class="row team-row text-center" id="collab-section-en">

</div>

</body>

<script src="assets/js/papaparse.min.js"></script>
<script src="assets/js/main.js?v=1.1"></script>
<script src="assets/js/jquery.min.js"></script>

<?php
    include('templates/footer.php');
?>
