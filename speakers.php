<?php
    $pageTitle = 'Team | MIT Global Startup Workshop 2023';
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

    <style>

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: #008CBA;
        }
        .container:hover .overlay {
            opacity: 1;
        }
        .team-bio {
            color: white;
            font-size: 12px;
            position: relative;
            top: 50%;
            left: 50%;
            width: 90%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }

        #idLinkedInIcon{background-color:rgb(0, 102, 170);border-radius:6px;color:white;cursor:pointer;display:inline-block;font:bold 35px Arial, Helvetica, sans-serif;height:40px;margin-top:1px;text-align:center;width:40px;}
        #idLinkedInIcon:hover{background-color:#06d;}
    </style>

</head>

<div class="parallax-window header" data-parallax="scroll" style="background-image: url('images/speaker-background.jpg');">
    <div class="header-overlay">
        <h1 class="parallax-text">
            Our Speakers
        </h1>
    </div>
</div>

<div class="section">
    <div style="color:white;">
        MIT GSW is proud to host a diverse range of speakers from Cambridge, Latin America and around the world. 
        We're excited to have these world class individuals share their experiences with us!
    </div>

    <br>

    <div class="section-header section-header-page" style="color: white">Keynotes</div>
    <div class="row team-row text-center">
        <div class="team container col-md-6">
            <a href="https://www.linkedin.com/in/miles-barr-10401765/">
                <img class="team-picture" src="images/speaker/miles-barr.jpeg"></a>
            <div class="overlay">
                <div class="team-bio">
                    Founder of Ubiquitous Energy, the world leader in transparent photovoltaics. Ubiquitous Energy's award-winning technology is the world's only truly transparent solar product. 
                    <br>
                    <br>
                    <div id="idLinkedInIcon" onclick="https://www.linkedin.com/in/miles-barr-10401765/');" title="">in</div>
                </div>

            </div>
            <div class="team-name">Miles Barr</div>
            <div class="team-role">Sustainability</div>
            <div class="team-area"></div>
        </div>
        <div class="team container col-md-6">
            <a href="">
                <img class="team-picture" src="images/speaker/"></a>
            <div class="overlay">
                <div class="team-bio">
                    Bio coming soon!
                    <br>
                    <br>
                    <div id="idLinkedInIcon" onclick="window.open('');" title="">in</div>
                </div>
            </div>
            <div class="team-name">Andrey Zarur</div>
            <div class="team-role"></div>
            <div class="team-area"></div>
        </div>
        <!--
        <div class="team container col-md-4">
            <a href="#teamDanielaGorza">
                <img class="team-picture" src="images/team/daniela.jpeg"></a>
            <div class="overlay">
                <div class="team-bio">
                    
                    <br>
                    <br>
                    <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/danielagorza/');" title="Team | MIT Global Startup Workshop 2023">in</div>
                </div>
            </div>
            <div class="team-name">Daniela Gorza</div>
            <div class="team-role">Co-Director</div>
            <div class="team-area">MIT Sloan School of Management</div>
        </div>
        -->
    </div>
    
    <div>
        <div class="section-header section-header-page" style="color: white">Panelists</div>
        <div class="team-row text-center">
            <div class="row">
                <div class="team container col-sm-6 col-md-4"><a href="https://www.linkedin.com/in/ligris/">
                    <img class="team-picture" src="images/speaker/kosta-ligris.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                            
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/ligris/');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Kosta Ligris</div>
                    <div class="team-role"></div>
                    <div class="team-area"></div>
                </div>
                <div class="team container col-sm-6 col-md-4"><a href="https://www.linkedin.com/in/marinahatsopoulos/">
                    <img class="team-picture" src="images/speaker/marina-hatsopoulous.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                        CEO and an original investor in Z Corporation. 
                        <br>
                        <br>
                        <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/marinahatsopoulos/');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Marina Hatsopoulos</div>
                    <div class="team-role">Identifying Opportunities</div>
                    <div class="team-area"></div>
                </div>
                <div class="team container col-sm-6 col-md-4"><a href="https://www.linkedin.com/search/results/all/?keywords=WILLIAM%20SONNEBORN&origin=GLOBAL_SEARCH_HEADER&sid=NFR">
                    <img class="team-picture" src="images/speaker"></a>
                    <div class="overlay">
                        <div class="team-bio">
                            Global Director of Disruptive Technologies, PE and VC at IFC.
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/search/results/all/?keywords=WILLIAM%20SONNEBORN&origin=GLOBAL_SEARCH_HEADER&sid=NFR');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">William Sonneborn</div>
                    <div class="team-role">Finance</div>
                    <div class="team-area"></div>
                </div>
            </div>

            <br>

        </div>
    </div>
</div>

<div class="section">
    <hr />
</div>
<?php
    include('templates/footer.php');
?>



