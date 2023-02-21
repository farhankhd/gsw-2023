<?php
    include('navbar.php');
    include('header.php'); 
?>
  


    <style>
        .banner-text{
            text-align: center !important;
            font-size: 40px !important;
        }
        .section-header{
            margin-top : 0px !important;
        }
        section {
            padding: 0px 0px;
        }
        .competition-text {
            font-weight: 700;
            margin-top: 147px;
            margin-bottom: 20px;
            font-size: 40px;
        }
        .team-hr{
            border-bottom: 2px solid rgba(100, 121, 162,0.3);
            border-top: unset;
            padding-bottom: 5px;
            color: #0e1e58;
            width: 90%;
            margin: 0 auto;
            margin-bottom: 20px;
        }
        .gradient-text{
            font-size: 35px !important;
        }
        .back-padding{
            padding: 50px 150px 30px;
        }
        @media only screen and (max-width: 600px) {
            .back-padding{
            padding: 0px !important;
            }
            .white-bg{
                padding: 30px 0px !important;
            }
            .gradient-text {
                font-size: 25px !important;
            }
            .team-row {
                padding: 15px 0px 15px;
            }
            .light-bg-dark-text{
                padding: 0px 30px;
            }
        }
    </style>

    <body>
        <!--PAGE HEADER-->
        <section class="startup-pitch">
            <div class="row" style="
                background-image: url(img/team/team_01-v2.jpeg);
                background-repeat: no-repeat;
                background-size: cover;height: 344px;">
                <div class="col">
                    <h1 class="section-header competition-text">OUR TEAM</h1>
                </div>
            </div>
        </section>
       
        <section>
            <div class="white-bg" class="back-padding">
                <p class="light-text light-bg-dark-text"> 
                    Our team consists of individuals across all parts of the MIT campus, and is supported by an accomplished advisory board.
                </p>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col">
                    <h1 class="para text-center gradient-text" id="team-section">Managing Directors</h1>
                    <hr class="team-hr">
                </div>
            </div>
            <!--<div class="section-header section-header-page">Managing Directors</div>-->
            <div class="row team-row text-center">
                <div class="team container col-md-4">
                    <a href="https://www.linkedin.com/in/farhan-khodaee-62212242/">
                        <img class="team-picture" src="./img/team/farhan.jpg"></a>
                    <div class="overlay">
                        <div class="team-bio light-text">
                            Farhan is a PhD candidate in the Mechanical Engineering/Bioengineering program at MIT. 
                            Prior to graduate school, he worked in the medical device industry for several years in different sectors ranging from transfusion technology to diabetes and dental. 
                            Farhan is passionate about medical technology entrepreneurship, especially around creating novel drugs and therapeutic platforms. 
                            He has been part of medical innovation teams across the world and is enthusiastic about making clinical technologies more accessible globally. 
                            In his spare time, he enjoys hiking, playing soccer, cooking and drawing.
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="https://www.linkedin.com/in/farhan-khodaee-62212242/');" title="Team | MIT Global Startup Workshop 2023">in</div>
                        </div>
                    </div>
                    <div class="team-name bold-text">Farhan Khodaee</div>
                    <div class="team-role light-text">Co-Director</div>
                    <div class="team-area light-text">MIT School of Engineering</div>
                </div>
                <div class="team container col-md-4">
                    <a href="">
                        <img class="team-picture" src="./img/team/anna.jpg"></a>
                    <div class="overlay">
                        <div class="team-bio light-text">
                            Anna is a dual degree student currently working towards both a Masters in Business Administration at MIT Sloan School of Management and a Masters in Public Administration at the Harvard Kennedy School of Government. 
                            Prior to graduate school, Anna worked at Bain &#38; Company and at The Nature Conservancy. 
                            Anna is passionate about social impact entrepreneurship, especially around sustainability and climate change resilience. 
                            One of her proudest achievements was working with The Republic of the Marshall Islands to launch the sustainable tuna company, Pacific Island Tuna. 
                            Anna has a BA in Economics and History from the University of Chicago.
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/annaeckhoff');" title="Team | MIT Global Startup Workshop 2023">in</div>
                        </div>
                    </div>
                    <div class="team-name bold-text">Anna Eckhoff</div>
                    <div class="team-role light-text">Co-Director</div>
                    <div class="team-area light-text">MIT Sloan School of Management</div>
                </div>
                <div class="team container col-md-4">
                    <a href="#teamDanielaGorza">
                        <img class="team-picture" src="./img/team/daniela.jpeg"></a>
                    <div class="overlay">
                        <div class="team-bio light-text">
                            Daniela Gorza is a Master of Business Administration (MBA) candidate at MIT Sloan School of Management, and is the President of the Italy Club at MIT Sloan. 
                            Prior to the MBA, she worked for several years at the World Bank Group and Inter-American Development Bank. 
                            She also has experience in Asia as a consultant to advise European and American businesses in their expansion into emerging Asian economies like Vietnam and China. 
                            Daniela holds a Double Degree in Public Administration and Government from the London School of Economics and Peking University. 
                            She spends her free time traveling, doing reformer pilates, and eating and cooking delicious Italian and French food.
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/danielagorza/');" title="Team | MIT Global Startup Workshop 2023">in</div>
                        </div>
                    </div>
                    <div class="team-name bold-text">Daniela Gorza</div>
                    <div class="team-role light-text">Co-Director</div>
                    <div class="team-area light-text">MIT Sloan School of Management</div>
                </div>
            </div>
        </section>
        <section>
            <div class="row white-bg">
                <div class="col">
                    <h1 class="para text-center gradient-text">Organizing Team</h1>
                    <hr class="team-hr">
                </div>
            </div>
            <div class="team-row text-center">
                <div class="row">
                    <div class="team container col-sm-6 col-md-4"><a href="">
                        <img class="team-picture" src="./img/team/maddie.jpg"></a>
                        <div class="overlay">
                            <div class="team-bio light-text">
                                Madison is a National Science Foundation Graduate Research Fellow in the Department of Mechanical Engineering at MIT. 
                                Her research is in product design and engineering for global development and global health applications, and she is currently incubating a medical device start-up in MIT’s Sandbox program. 
                                She has a BS in Mechanical Engineering and a Certificate in Engineering Design from Penn State, as well as a Certificate in Product Design from the National University of Singapore. 
                                Her research and industry experience spans medical engineering, assistive technology development, ergonomics, off-grid mechanization, and co-design with rural communities. 
                                In her spare time, she plays for the MIT Club Volleyball Team and bakes bread. 
                                <br>
                                <br>
                                <a href='https://mareddie.weebly.com/'><i class="fa-brands fa-weebly"></i></a>
                            </div>
                        </div>
                        <div class="team-name bold-text">Madison Reddie</div>
                        <div class="team-role light-text">Content Team - Agenda Design Lead</div>
                        <div class="team-area light-text">MIT MechE</div>
                    </div>
                    <div class="team container col-sm-6 col-md-4"><a href="">
                        <img class="team-picture" src="./img/team/jenny.jpg"></a>
                        <div class="overlay">
                            <div class="team-bio light-text">
                                Jenny is a Masters in Business Administration (MBA) candidate at MIT Sloan School of Management. 
                                She operates at the intersection of business and human-centered design, and focuses on reimagining business challenges through incorporating design principles. 
                                At MIT, she is a Vice President of the Entrepreneurship Club. 
                                Prior to graduate school, Jenny worked at Deloitte Consulting, where she helped Fortune 500 companies deliver optimal employee integration experiences during Mergers &#38; Acquisitions. 
                                She has a Bachelor of Arts in Economics from Claremont McKenna College. 
                                In her spare time, Jenny enjoys rock-climbing, being outdoors, and collecting good stories.
                                <br>
                                <br>
                                <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/jennycang/');" title="Team | MIT Global Startup Workshop 2023">in</div>
                            </div>
                        </div>
                        <div class="team-name bold-text">Jenny Cang</div>
                        <div class="team-role light-text">Content Team - Co-Speakers Lead</div>
                        <div class="team-area light-text">MIT MBA '24</div>
                    </div>
                    <div class="team container col-sm-6 col-md-4"><a href="">
                        <img class="team-picture" src="./img/team/pooja.jpeg"></a>
                        <div class="overlay">
                            <div class="team-bio light-text">
                                Pooja is a Masters of Business Administration (MBA) candidate at MIT Sloan School of Management. 
                                At MIT, she is a Senior Vice President of the Sloan Entrepreneurship Club and of the Sloan Healthcare Club. 
                                Prior to graduate school, Pooja worked in management consulting focused on biotechnology and healthcare. 
                                She has also worked with multiple early stage healthcare startups to help them to grow and scale their technologies. 
                                She is passionate about how artificial intelligence and analytics can democratize healthcare, and is particularly excited about mental health.  
                                Pooja has a Bachelor of Science in Neuroscience from Lehigh University. In her free time, she enjoys art, yoga, and exploring coffee shops.
                                <br>
                                <br>
                                <div id="idLinkedInIcon" onclick="window.open('http://www.linkedin.com/in/poojamalhotra320');" title="Team | MIT Global Startup Workshop 2023">in</div>
                            </div>	
                        </div>
                        <div class="team-name bold-text">Pooja Malhotra</div>
                        <div class="team-role light-text">Content Team - Co-Speakers Lead</div>
                        <div class="team-area light-text">MIT MBA '23</div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="team container col-sm-1 col-md-4">
                        <a href=""><img class="team-picture" src="./img/team/tiasa.jpg"></a>
                        <div class="overlay">
                            <div class="team-bio light-text">
                                Tiasa is a recent graduate from Wellesley College, earning her Bachelors of Arts (B.A.) in Computer Science. 
                                Beyond her time at Wellesley, she has been extensively involved in the MIT community working for MIT Energy Initiative 
                                and as a cross-registered student in the Departments of Electrical Engineering &#38; Computer Science, Urban Studies &#38; Planning, Integrated Design &#38; Management, and Gordon-Engineering Leadership program. 
                                Her professional interest lies in the urban mobility / sustainable transportation and entrepreneurship space. 
                                Aside from school, Tiasa enjoys solo traveling, dancing, fitness, and visiting local cafes. 
                            </div>
                            <br>
                            <br>
                            <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/tiasakim/');" title="Team | MIT Global Startup Workshop 2023">in</div>
                        </div>
                        <div class="team-name bold-text">Tiasa Kim</div>
                        <div class="team-role light-text">Marketing Team - Media Lead</div>
                        <div class="team-area light-text">Wellesley College, B.A. Computer Science '23</div>
                    </div>
                    <div class="team container col-sm-1 col-md-4">
                        <a href=""><img class="team-picture" src="./img/team/liv-j.jpg"></a>
                        <div class="overlay">
                            <div class="team-bio light-text">
                                Olivia is a Masters of Business Administration (MBA) candidate at MIT Sloan School of Management. 
                                She is a Co-lead of the Food &#38; Agriculture Club and is involved in the sustainability ecosystem at MIT. 
                                Prior to graduate school, Olivia worked as a Management Consultant at Accenture, focusing on regulatory change management and risk mitigation within financial services. 
                                She is passionate about climate change and is looking to transition her career to focus on clean energy following MIT. 
                                Olivia has a Bachelor of Business Administration from the University of Michigan. 
                                She spends her free time snowboarding, playing soccer, and listening to entomology podcasts.
                                <br>
                                <br>
                                <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/oliviajjones/');" title="Team | MIT Global Startup Workshop 2023">in</div>
                            </div>
                        </div>
                        <div class="team-name bold-text">Olivia Jones</div>
                        <div class="team-role light-text">Marketing Team - Content Lead</div>
                        <div class="team-area light-text">MIT MBA '24</div>
                    </div>  
                    <div class="team container col-sm-1 col-md-4"><a href="">
                        <img class="team-picture" src="./img/team/prem.jpg"></a>
                        <div class="overlay">
                            <div class="team-bio light-text">
                                Prem's Bio Coming Soon!
                            </div>
                        </div>
                        <div class="team-name bold-text">Prem</div>
                        <div class="team-role light-text">Community Impact Lead</div>
                        <div class="team-area light-text">MIT</div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="team container col-sm-6 col-md-4">
                        <a href=""><img class="team-picture" src="./img/team/rishabh.jpg"></a>
                        <div class="overlay">
                            <div class="team-bio light-text">
                                Rishabh is a Masters of Business Administration (MBA) candidate at MIT Sloan School of Management and SVP of the Product Management Club. 
                                Prior to school, Rishabh worked as a Program Manager scaling early-stage startups at a Google for Startups hub in Dubai. 
                                Previously he also helped set up the Family Business Consulting practice at PwC India. 
                                Rishabh holds an engineering degree in Electronics from the Delhi College of Engineering, India. 
                                He spends his free time reading books on asian political history, traveling and exploring local cuisines. 
                                <br>
                                <br>
                                <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/rishabhgoyal95');" title="Team | MIT Global Startup Workshop 2023">in</div>
                            </div>
                        </div>
                        <div class="team-name bold-text">Rishabh Goyal</div>
                        <div class="team-role light-text">Competitions Team - Design Lead</div>
                        <div class="team-area light-text">MIT MBA '23</div>
                    </div>
                    <div class="team container col-sm-6 col-md-4"><a href="">
                        <img class="team-picture" src="./img/team/olivia-g.jpg"></a>
                        <div class="overlay">
                            <div class="team-bio light-text">
                                Olivia's Bio Coming Soon!
                            </div>
                        </div>
                        <div class="team-name bold-text">Olivia Gebhardt</div>
                        <div class="team-role light-text">Competitions Team - Prizes Lead</div>
                        <div class="team-area light-text">MIT MBA '24</div>
                    </div>
                    <div class="team container col-sm-6 col-md-4"><a href="">
                        <img class="team-picture" src="./img/team/noah.jpg"></a>
                        <div class="overlay">
                            <div class="team-bio light-text">
                                Noah is a Masters in Business Administration (MBA) candidate at MIT Sloan School of Management. 
                                At MIT, he is on the organizing committee for the 100K Startup Competition and is also working on a fintech analytics startup. 
                                Prior to graduate school, Noah worked at Elliott Management, a multi-strategy hedge fund, where he covered the global oil market for the commodities group. 
                                He has a Bachelor of Arts in Mathematics and Economics from Washington University in St. Louis. 
                                In his spare time, Noah enjoys hiking, reading, and poker.
                            </div>
                        </div>
                        <div class="team-name bold-text">Noah Roberts</div>
                        <div class="team-role light-text">Finance Lead</div>
                        <div class="team-area light-text">MIT MBA '24</div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="team container col-sm-1 col-md-4"><a href="">
                        <img class="team-picture" src="./img/team/vineet.jpg"></a>
                        <div class="overlay">
                            <div class="team-bio light-text">
                                Vineet is a PhD candidate in the Computational Science &#38; Engineering program. 
                                He conducts research in the Active-Adaptive Control Lab in the Mechanical Engineering department - applying tools from optimization, control theory, and machine learning to model smart grids &#38; transportation networks. 
                                Prior to MIT, Vineet completed an MPhil in Energy Technologies at the University of Cambridge as a Gates Scholar and received his undergraduate degree in Mechanical Engineering &#38; Economics from UC Berkeley. 
                                Outside GSW, he is currently a Co-President of the MIT Energy &#38; Climate Club and previously served as Co-Managing Director for the 2022 MIT Energy Conference. 
                                In addition to research, he has industry experience through internships at Siemens, NREL, Avangrid and Applied Materials. 
                                In his spare time, he enjoys hiking, tennis, working out and singing.
                                <br>
                                <br>
                                <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/nairvineet9/');" title="Team | MIT Global Startup Workshop 2023">in</div>
                            </div>
                        </div>
                        <div class="team-name bold-text">Vineet Jagadesan Nair</div>
                        <div class="team-role light-text">Operations Team - Internal Operations Lead</div>
                        <div class="team-area light-text">MIT MechE</div>
                    </div>
                    <div class="team container col-sm-1 col-md-4"><a href="">
                        <img class="team-picture" src="./img/team/katie.jpg"></a>
                        <div class="overlay">
                            <div class="team-bio light-text">
                                Katie is a graduate student at the Integrated Design and Management program, working towards an Engineering Management degree. 
                                Her focus is on human-centered product design and development. Prior to MIT, Katie worked as a hardware product manager at Microsoft. 
                                Outside GSW, she is a Sloan Senator and is on the Graduate Student Council. 
                                In her spare time, she enjoys going on photo walks, hiking and yoga. 

                            </div>
                        </div>
                        <div class="team-name bold-text">Katie Chen</div>
                        <div class="team-role light-text">Operations Team - External Operations Lead</div>
                        <div class="team-area light-text">MIT IDM</div>
                    </div>
                    <div class="team container col-sm-1 col-md-4">
                        <a href=""><img class="team-picture" src="./img/team/layla.jpg"></a>
                        <div class="overlay">
                            <div class="team-bio light-text">
                                Layla is a Masters of Science (S.M.) in Technology and Policy candidate at MIT Schwarzman College of Computing. 
                                Aside from being a part of GSW, she is a Wellness Ambassador for the Office of Student Wellbeing at MIT, Associate Editor for the MIT Science Policy Review and Treasurer for the Persian Student Association at MIT. 
                                She is passionate about Worker Health and Safety, Ergonomics, and AI policy. 
                                Before MIT, she completed her degree in Industrial and Systems Engineering from Auburn University. 
                                Outside of school, she enjoys drawing portraits, watching documentaries and learning languages.
                                <br>
                                <br>
                                <div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/layla-arai');" title="Team | MIT Global Startup Workshop 2023">in</div>
                            </div>
                        </div>
                        <div class="team-name bold-text">Layla Araiinejad</div>
                        <div class="team-role light-text">Community Engagement Lead</div>
                        <div class="team-area light-text">MIT TPP</div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row white-bg">
                <div class="col">
                    <h1 class="para text-center gradient-text">Advisory Board</h1>
                    <hr class="team-hr">
                </div>
            </div>
            <div class="row text-center team-row">
                <div class="team container col-sm-6 col-md-4">
                    <a><img src="./img/board/BillAulet.jpg" class="team-picture" alt=""></a>
                    <div class="team-name bold-text">Bill Aulet</div>
                    <div class="team-role light-text">Faculty Advisor</div>
                    <div class="team-area light-text">MIT Sloan School of Management</div>
                </div>
                <div class="team container col-sm-6 col-md-4">
                    <a><img src="./img/board/GitaRao.jpg" class="team-picture" alt=""></a>
                    <div class="team-name bold-text">Gita Rao</div>
                    <div class="team-role light-text">Faculty Advisor</div>
                    <div class="team-area light-text">MIT Sloan School of Management</div>
                </div>
                <div class="team container col-sm-6 col-md-4">
                    <a><img src="./img/board/SimonJohnson.jpg" class="team-picture" alt=""></a>
                    <div class="team-name bold-text">Simon Johnson</div>
                    <div class="team-role light-text">Faculty Advisor</div>
                    <div class="team-area light-text">MIT Sloan School of Management</div>
                </div>
            </div>
            <div class="row text-center team-row">
                <div class="team container col-sm-6 col-md-4">
                    <a><img src="./img/board/MeganMitchell.jpg" class="team-picture" alt=""></a>
                    <div class="team-name bold-text">Megan Mitchell</div>
                    <div class="team-role light-text">Acting Director</div>
                    <div class="team-area light-text">MIT Legatum Center</div>
                </div>
                <div class="team container col-sm-6 col-md-4">
                    <a><img src="./img/board/LeeUllman.jpg" class="team-picture" alt=""></a>
                    <div class="team-name bold-text">Lee Ullmann</div>
                    <div class="team-role light-text">Executive Director</div>
                    <div class="team-area light-text">MIT Sloan Latin America Office</div>
                </div>
                <div class="team container col-sm-6 col-md-4">
                    <a><img src="./img/board/TravisHunter.jpg" class="team-picture" alt=""></a>
                    <div class="team-name bold-text">Travis Hunter</div>
                    <div class="team-role light-text">Director</div>
                    <div class="team-area light-text">MIT Regional Entrepreneurship &#38; Acceleration Program</div>
                </div>
            </div>
        </section>

        <!--JS-->
        <script src="../assets/js/scripts.js"></script>
    </body>
</html>
 <?php
  include('footer.php');
  ?>
