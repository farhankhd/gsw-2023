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
            padding: 3px;
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

        #idLinkedInIcon{background-color:rgb(0, 102, 170);border-radius:6px;color:white;cursor:pointer;display:inline-block;font:bold 25px Arial, Helvetica, sans-serif;height:30px;margin-top:1px;text-align:center;width:30px;}
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
                    Miles Barr is co-founder and Chief Technology Officer of Ubiquitous Energy, a Silicon Valley company commercializing transparent solar technology to turn windows into a source of renewable electricity. Barr co-founded Ubiquitous Energy at MIT, served as its founding CEO through pilot manufacturing, and has helped raise nearly $100M in equity and non-dilutive funding and forge commercialization partnerships with numerous industry leading companies. For his innovations in the solar industry, Barr has been named an MIT Technology Review Innovator Under 35, Forbes 30 under 30 in Energy, and winner of the prestigious Lemelson-MIT Student Prize, awarded to the most innovative students at MIT. Barr holds a PhD in chemical engineering from MIT and a bachelor’s degree from Vanderbilt University.
                    <br>
                    <br>
                    <div id="idLinkedInIcon" onclick="https://www.linkedin.com/in/miles-barr-10401765/');" title="">in</div>
                </div>

            </div>
            <div class="team-name">Miles Barr</div>
            <div class="team-role">Co-Founder and Chief Technology Officer, Ubiquitous Energy</div>
            <div class="team-area">Sustainability</div>
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
                            Kosta Ligris is an experienced entrepreneur, lawyer and investor and was the founder of the Ligris family of companies. Ligris and its affiliates are one of the largest title agents in New England, with operations in New York and Florida.  He is currently the CEO and Founder of Stavvy, one of Boston’s fastest growing fintech startups providing tools and solutions to digitize transactions in mortgage lending and servicing, including leveraging distributed ledger technology to streamline capital market liquidity in the secondary mortgage-backed markets.  Kosta is an Entrepreneur in Residence at MIT’s Martin Trust Center for Entrepreneurship and a Lecturer in Technological Innovation, Entrepreneurship and Strategic Management at MIT’s Sloan School of Management. 
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/ligris/');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Kosta Ligris</div>
                    <div class="team-role">Entrepreneur, EIR & Lecturer</div>
                    <div class="team-area"></div>
                </div>
                <div class="team container col-sm-6 col-md-4"><a href="https://www.linkedin.com/in/marinahatsopoulos/">
                    <img class="team-picture" src="images/speaker/marina-hatsopoulos.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                        Marina Hatsopoulos was Founding CEO of Z Corp, an early 3D printing leader out of MIT.She is Board Chair of Levitronix, the world leader in magnetically-levitated pumps, and President of Hellenic Innovation Network. She is on MIT's Visiting Committee for Mechanical Engineering. She is on Advisory Boards of MIT EF Greece, Eurobank’s EGG, Mindspace & MIT ReACT. She was on the National Board of Research & Innovation for Cyprus. She was a Director of Cynosure, a $400 million leader in aesthetics; GSI, a $300 million equipment supplier; and Contex, a $100 million scanner manufacturer. Her writing has been published in Venturebeat, The Observer, CEOWORLD Magazine, Antioch Review & other journals. She holds BAs from Brown University in Math and Music, and an MS from MIT in Mechanical Engineering.
                        <br>
                        <br>
                        <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/marinahatsopoulos/');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Marina Hatsopoulos</div>
                    <div class="team-role">Entrepreneur & Writer; Levitronix Technologies, Board Chair</div>
                    <div class="team-area">Identifying Opportunities</div>
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
            
            <div class="team-row text-center">
            <div class="row">
                <div class="team container col-sm-6 col-md-4"><a href="https://www.linkedin.com/in/george-nounesis-89054b73/?originalSubdomain=gr">
                    <img class="team-picture" src="images/speaker/george-nounesis.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                            Director and Chairman of the Board, National Centre for Scientific Research "Demokritos"
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/george-nounesis-89054b73/?originalSubdomain=gr');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">George Nounesis</div>
                    <div class="team-role">Academia</div>
                    <div class="team-area"></div>
                </div>
                <div class="team container col-sm-6 col-md-4"><a href="">
                    <img class="team-picture" src="images/speaker/bill-aulet.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                        Bio coming soon! 
                        <br>
                        <br>
                        <div id="idLinkedInIcon" onclick="window.open('');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Bill Aulet</div>
                    <div class="team-role"></div>
                    <div class="team-area"></div>
                </div>
                <div class="team container col-sm-6 col-md-4"><a href="">
                    <img class="team-picture" src="images/speaker"></a>
                    <div class="overlay">
                        <div class="team-bio">
                            
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Travis Hunter</div>
                    <div class="team-role"></div>
                    <div class="team-area"></div>
                </div>
            </div>
                
            <br>
                
            <div class="team-row text-center">
            <div class="row">
                <div class="team container col-sm-6 col-md-4"><a href="https://www.linkedin.com/in/larserasmussen/">
                    <img class="team-picture" src="images/speaker/lars-rasmussen.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                            Lars Rasmussen is a technology angel investor and early-stage startup advisor based in
                            Athens, Greece. Lars holds a Ph.D. in theoretical computer science from UC Berkeley in
                            California. In 2004, Lars and his brother Jens sold their mapping startup Where 2 Tech to
                            Google. Lars became the lead engineer on the team that created Google Maps from Where 2’s
                            technology. Lars was next a director of engineering at Facebook in Menlo Park and London. His
                            favorite investments are Canva, Astranis, Chiaro, Neara, and Weav Music which he also
                            co-founded. In his copious spare time, he enjoys boating the Greek Islands, and coffee.
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/larserasmussen/');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Lars Rasmussen</div>
                    <div class="team-role">Angel Investor</div>
                    <div class="team-area"></div>
                </div>
                <div class="team container col-sm-6 col-md-4"><a href="https://www.linkedin.com/in/marco-veremis-03356/">
                    <img class="team-picture" src="images/speaker/marco-veremis.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                        Bio coming soon! 
                        <br>
                        <br>
                        <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/marco-veremis-03356/');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Marco Veremis</div>
                    <div class="team-role">Investor and Entrepreneur</div>
                    <div class="team-area">Deep Tech</div>
                </div>
                <div class="team container col-sm-6 col-md-4"><a href="https://www.linkedin.com/in/alisee-de-tonnac/">
                    <img class="team-picture" src="images/speaker/alisee-de-tonnac.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                            Alisee de Tonnac is the co-founder and co-CEO of Seedstars, a Swiss-based group with the mission to impact people’s lives in emerging markets through technology and entrepreneurship.Present in over 90 countries, Seedstars works in partnership with governments, development agencies, corporations, and private donors to develop entrepreneurship ecosystems. Seedstars also supports and invests in high-growth technology companies as well as fund managers across emerging markets.
                            Alisee sits on several boards of companies and foundations. She is a member of the Swiss Innovation Council and was nominated Social Entrepreneur Forbes 30 under 30, Innovation Fellow of Wired UK, Europe’s most influential women in the startup and venture capital space, and one of the 29 Powerful Women by Refinery29.
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/alisee-de-tonnac/');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Alisee de Tonnac</div>
                    <div class="team-role">CEO & Co-Founder, Seedstars</div>
                    <div class="team-area">Identifying Opportunities</div>
                </div>
            </div>
                
            <br>
                
            <div class="team-row text-center">
            <div class="row">
                <div class="team container col-sm-6 col-md-4"><a href="https://www.linkedin.com/in/michaeltzannes/">
                    <img class="team-picture" src="images/speaker/michael-tzannes.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                            Michael Tzannes has spent his career building companies that improve the way digital information is processed and communicated.
                            From 1990 to 2012, he was Chairman, CEO, and CTO at DSL pioneer Aware, which went public on Nasdaq in 1996.
                            Since 2012, Michael has been an informal investor in Greek start-ups. He was Chairman and co-Founder of audio software developer Accusonus, acquired by Meta in 2022. Michael is on Boards at Irida Labs, Yodiwo, Athroa and 5G Ventures. 
                            In 2012, Michael and Marcos Tzannes formed TzPM, providing business and intellectual property (IP) strategy and expert advice in IP licensing and patent litigation. 
                            Michael was valedictorian at the University of Patras, and has a University of Michigan Master’s and a Tufts University Ph.D., all in Electrical Engineering.
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/michaeltzannes/');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Michael Tzannes</div>
                    <div class="team-role">Technology Entrepreneur</div>
                    <div class="team-area">Identifying Opportunities</div>
                </div>
                <div class="team container col-sm-6 col-md-4"><a href="https://mitsloan.mit.edu/faculty/directory/charles-kane">
                    <img class="team-picture" src="images/speaker/chuck-kane.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                        Bio coming soon! 
                        <br>
                        <br>
                        <div id="idLinkedInIcon" onclick="window.open('https://mitsloan.mit.edu/faculty/directory/charles-kane');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Chuck Kane</div>
                    <div class="team-role">MIT Sloan Professor</div>
                    <div class="team-area">Academia</div>
                </div>
                <div class="team container col-sm-6 col-md-4"><a href="https://www.linkedin.com/in/deephchana/">
                    <img class="team-picture" src="images/speaker/deeph-chana.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                            Bio coming soon!
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/deephchana/');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Deeph Chana</div>
                    <div class="team-role">Imperial Entreprenur Professor</div>
                    <div class="team-area"></div>
                </div>
            </div>
                
            <br>
                
            <div class="team-row text-center">
            <div class="row">
                <div class="team container col-sm-6 col-md-4"><a href="https://www.insead.edu/faculty-research/faculty/theodoros-evgeniou">
                    <img class="team-picture" src="images/speaker/theodoros-evgeniou.png"></a>
                    <div class="overlay">
                        <div class="team-bio">
                            Professor at INSEAD since 2001 and director of the INSEAD Executive Education program on Transforming your Business with AI. Received four degrees from MIT, two BSc degrees simultaneously, one in Computer Science and one in Mathematics, as well as a Master and a PhD degree in Computer Science.
                            Has been a member of the OECD Network of Experts on AI, an advisor for the BCG Henderson Institute, a World Economic Forum Academic Partner for AI, and co-founder of Tremau, a B2B SaaS company providing tech trust & safety solutions. More information: https://www.insead.edu/faculty-research/faculty/theodoros-evgeniou 
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://www.insead.edu/faculty-research/faculty/theodoros-evgeniou');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Theodoros Evgeniou</div>
                    <div class="team-role">INSEAD Professor, Co-Founder Tremau</div>
                    <div class="team-area"></div>
                </div>
                <div class="team container col-sm-6 col-md-4"><a href="https://meche.mit.edu/people/faculty/aanna%40mit.edu">
                    <img class="team-picture" src="images/speaker/anuradha-annaswamy.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                        Bio coming soon! 
                        <br>
                        <br>
                        <div id="idLinkedInIcon" onclick="window.open('https://meche.mit.edu/people/faculty/aanna%40mit.edu');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Anuradha Annaswamy</div>
                    <div class="team-role">Senior Research Scientist</div>
                    <div class="team-area">AI, Sustainability</div>
                </div>
                <div class="team container col-sm-6 col-md-4"><a href="https://www.linkedin.com/in/timos-sellis-6b985657/">
                    <img class="team-picture" src="images/speaker/timos-selis.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                            Timos Sellis is the Director of the "Archimedes" Research Unit of the "Athena" Research Center. He holds an MSc from Harvard University (1983) and a PhD from the University of California at Berkeley (1986). Most recently he was a Facebook Researcher (USA, 2020-22), and Professor and Director of the Data Science Institute at Swinburne University of Technology (Australia, 2016-20). He has served as a professor at the University of Maryland (1986-92), the National Technical University of Athens (1992-2013). He is IEEE Fellow (2009) and an ACM Fellow (2013), for his contributions to database systems and data management. In March 2018 he received the IEEE TCDE Impact Award, for contributions to database systems research and broadening the reach of data engineering research.
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/timos-sellis-6b985657/');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Timos Selis</div>
                    <div class="team-role">Scientific Director, Archimedes Research Unit, Research Center "Athena"</div>
                    <div class="team-area"></div>
                </div>
            </div>
                
            <br>
                
            <div class="team-row text-center">
            <div class="row">
                <div class="team container col-sm-6 col-md-4"><a href="https://www.biogen.com/company/leadership/bio-papadopoulos-stelios.html">
                    <img class="team-picture" src="images/speaker/stelios-papadopoulos.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                            Bio coming soon!
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://www.biogen.com/company/leadership/bio-papadopoulos-stelios.html');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Stelios Papadopoulos</div>
                    <div class="team-role">Chairman, Biogen Inc.</div>
                    <div class="team-area">Biotech</div>
                </div>
                <div class="team container col-sm-6 col-md-4"><a href="https://www.linkedin.com/in/tylerspalding/">
                    <img class="team-picture" src="images/speaker/tyler-spalding.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                        Bio coming soon! 
                        <br>
                        <br>
                        <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/tylerspalding/');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Tyler Spalding</div>
                    <div class="team-role">Co-Founder of Flexa</div>
                    <div class="team-area">AI</div>
                </div>
                <div class="team container col-sm-6 col-md-4"><a href="https://meche.mit.edu/people/faculty/banthony@mit.edu">
                    <img class="team-picture" src="images/speaker/brian-anthony.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                            Bio coming soon!
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://meche.mit.edu/people/faculty/banthony@mit.edu');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Brian Anthony</div>
                    <div class="team-role"></div>
                    <div class="team-area">Biotech</div>
                </div>
            </div>
                
            <br>
            
            <div class="team-row text-center">
            <div class="row">
                <div class="team container col-sm-6 col-md-4"><a href="">
                    <img class="team-picture" src="images/speaker/nektarios-tavernarakis.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                            Bio coming soon!
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Nektarios Tavernarakis</div>
                    <div class="team-role"></div>
                    <div class="team-area">Biotech</div>
                </div>
                <div class="team container col-sm-6 col-md-4"><a href="https://www.linkedin.com/in/luisa-alemany-46902419b/?originalSubdomain=uk">
                    <img class="team-picture" src="images/speaker/luisa-alemany.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                        Associate Professor of Management Practice at London Business School and Academic Director, Institute of Entrepreneurship & Private Capital. She was formerly at ESADE and visiting at Saïd Business School (Oxford). Her areas of interest are Entrepreneurial Finance and Venture Philanthropy. She is in the board of Newton Ventures, in the IC of Oxfam’s EDP and DeepTech VC fund Fond-ICO Next Tech (Spain). She is also in the Advisory Committee of FMO Ventures, the Dutch development fund. Her book, with J. Andreoli, “Entrepreneurial Finance: The Art and Science of Growing Ventures” (Cambridge U.P. 2018), was the first European textbook in the topic and awarded “Most Promising New Textbook” by TTA in 2021. She holds a PhD in Economics & Business from UCM (Spain) and an MBA from Stanford (USA).
                        <br>
                        <br>
                        <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/luisa-alemany-46902419b/?originalSubdomain=uk');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Luisa Alemany</div>
                    <div class="team-role">Academic Director Inst. Entrepreneurship and Private Capital, London Business School</div>
                    <div class="team-area">Academia</div>
                </div>
                <div class="team container col-sm-6 col-md-4"><a href="">
                    <img class="team-picture" src="images/speaker/ariel-furst.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                            Bio coming soon!
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Ariel Furst</div>
                    <div class="team-role">MIT Professor, Found of Pharmor</div>
                    <div class="team-area">Academia, Sustainability</div>
                </div>
            </div>
                
            <br>
          
            <div class="team-row text-center">
            <div class="row">
                <div class="team container col-sm-6 col-md-4"><a href="https://www.linkedin.com/in/snejinazacharia/">
                    <img class="team-picture" src="images/speaker/snejina-zacharia.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio">
                            Bio coming soon!
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/snejinazacharia/');" title="">in</div>
                        </div>
                    </div>
                    <div class="team-name">Snejina Zacharia</div>
                    <div class="team-role"></div>
                    <div class="team-area"></div>
                </div>
        </div>
    </div>
</div>

<div class="section">
    <hr />
</div>
<?php
    include('templates/footer.php');
?>



