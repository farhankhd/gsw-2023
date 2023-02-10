<?php
    // Require https
    if ($_SERVER['HTTPS'] != "on") {
        $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        header("Location: $url");
        exit;
        
    }
    $pageTitle = 'MIT Global Startup Workshop 2023 | Athens, Greece';
    $metaDescription = 'MIT Global Startup Workshop is coming to Greece in March 2023! GSW is an annual conference that aims to accelerate entrepreneurial ecosystems around the world, through workshops, mentorship and skills training. Grab your tickets now for an experience you will never forget!';
    $specificKeywords = 'entrepreneurial ecosystems';
    $headerMainPageImageSrc = 'img/banner/main.png';
    $headerTitle = 'MIT Global Startup Workshop 2023';
    $headerSubTitle = 'Athens, Greece';
    $classIndexMenu = 'active';
    
    //set headers to NOT cache a page
    header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
    header("Pragma: no-cache"); //HTTP 1.0
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

    $scripts = "<script src=\"2023/assets/js/scripts.js\"></script>";


    include('navbar.php');
    include('header.php'); ?>



  
   <style>
        .accordion-span {
            float: right;
        }
        .accordion-title h5 {
            text-align: start;
        }
        .accordion-main .accordion-title {
            padding: 10px 20px;
            background-color: #131d25;
            cursor: pointer;
        }
        .accordion-main .accordion-title h5 {
            margin: 0
        }
        .accordion-main .accordion-body {
            overflow: hidden;
            border: 1px solid #ccc;
            padding: 0 20px;
            height: 0;
            opacity: 0;
            transition: all .2s ease-in-out;
            visibility: hidden;
        }
        .accordion-main .accordion-item.accordion-open .accordion-body {
            visibility: visible;
            height: auto;
            opacity: 1;
            padding: 20px 20px;
        }
        h5.accordian-text {
            font-size: 14px;
        }
        .competition-text {
            font-weight: 700;
            margin-top: 147px;
            margin-bottom: 20px;
            font-size: 40px;
        }
        section.startup-pitch {
            padding: unset;
        }
        div.white-bg.pitch-page {
            text-align: center;
            width: 100%;
            padding: 40px 60px 0px 60px;
            margin: 0px;
        }
        .section-div {
            background-color: #131d25;
            height: 100%;
            max-height: 300px;
            padding: 1px;
        }
        .white-bg {
            padding: 50px 150px 50px;
        }
        ul.dark-bullet {
            padding: 0px 60px 0px;
        }
        @media only screen and (max-width: 667px) {
            .white-bg {
                padding: unset!important;
            }
            ul.dark-bullet {
                padding: 0px ;
            }
        }
   </style>
   <body>
      <!--PAGE HEADER-->
      <section class="startup-pitch">
         <div class="row" style="
            background-image: url(img/sponsors.png);
            background-repeat: no-repeat;
            background-size: cover;height: 344px;
            ">
            <div class="col">
               <h1 class="section-header competition-text">COMPETITIONS </h1>
            </div>
         </div>
      </section>
      <section class="startup-pitch">
         <div class="white-bg">
            <p class="para light-text light-bg-dark-text" style="text-align: center"> 
               Are you an entrepreneur trying to take your startup to the next level? <br>The <strong class="light-bg-dark-text" style="color: #00c0f2">MIT GSW Startup Pitch Competition</strong> is an opportunity for you to pitch your company and compete for a chance to win seed money to scale your startup.
            </p>
            <button class="comp-btn" onclick="window.location.href='https://docs.google.com/forms/d/e/1FAIpQLScGcvXe5ioa0kCA6X9UsN-wxMntEF_qolskXs7sgE_3z3AYnA/viewform?usp=sf_link';">Apply Now</button>
            <br><br><br>
            <p class="para light-text light-bg-dark-text" style="text-align: center">
               <strong class="light-bg-dark-text" >Submissions will be considered on a rolling basis until February 20th, 2023.</strong> Apply early before spots fill!
               <br>
               Semifinalists will be invited after their application has been reviewed. The final competition will be held on March 31st, 2023.
               Full details on Eligibility Criteria can be found <a style="color: blue" href="doc/startup-pitch-flyer.pdf">here</a> and below. 
               <br><br>
               If you have any questions, please email <a class="light-bg-dark-text" href="gsw_competitions@mit.edu">gsw_competitions@mit.edu</a>
            </p>
         </div>
      </section>
      <!--PRIZES-->
      <div class="section-div">
         <h1>Prizes</h1>
      </div>
      <section class="startup-pitch">
         <div class="row white-bg" style="padding-bottom: 0;">
            <div class="col-lg" style="padding-bottom: 0">
               <h4 style="background-color: #131d25">1st Place</h4>
               <div class="p-5" style="background-color: #F5F5F5">
                  <ul class="dark-bullet" style="">
                     <li class="dark-bullet">$5,000 cash prize</li>
                     <li class="dark-bullet">Paid trip to Boston (airfare and hotel up to $5,000) with pre-planned itinerary connecting the team with Boston and MIT entrepreneurship resources (i.e. Martin Trust Center, MIT Media Lab)</li>
                     <li class="dark-bullet">Dedicated Venture Mentoring Services support</li>
                  </ul>
               </div>
            </div>
            <div class="col-lg" style="padding-bottom: 0">
               <h4 style="background-color: #131d25">2nd Place</h4>
               <div class="p-5" style="background-color: #F5F5F5">
                  <ul class="dark-bullet" style="padding: 0px 20px 0px">
                     <li class="dark-bullet">$3,000 cash prize</li>
                     <li class="dark-bullet">Dedicated Venture Mentoring Services support specialized to team needs</li>
                  </ul>
               </div>
            </div>
            <div class="col-lg" style="padding-bottom: 0">
               <h4 style="background-color: #131d25">3rd Place</h4>
               <div class="p-5" style="background-color: #F5F5F5">
                  <ul class="dark-bullet" style="padding: 0px 20px 0px">
                     <li class="dark-bullet">$1,500 cash prize</li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="row white-bg pitch-page" style="padding-top: 0">
            <div class="col-lg">
               <h4 style="background-color: #131d25">General Qualifications</h4>
               <div class="" style="background-color: #F5F5F5">
                  <ul class="dark-bullet" style="padding: 0px 60px 0px">
                     <li class="dark-bullet light-text">All teams selected to present at GSW will be pre-qualified to enter the next MITEF Greece Acceleration program running from Sept 2023 to Nov 2023.</li>
                     <li class="dark-bullet light-text">All teams selected to present at GSW will receive a booth during the conference's Tech Showcase to demo their product/service.</li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <!--ELIGIBILITY-->
      <div class="section-div">
         <h1>Eligibility</h1>
      </div>
      <section class="startup-pitch">
         <div class="white-bg" style="padding: 34px 150px 14px">
            <p class="light-text light-bg-dark-text"> 
               Teams must meet all the following requirements to be eligible to compete in the <strong class="light-bg-dark-text" style="color: #00c0f2">Startup Pitch Competition</strong>.
            </p>
         </div>
         <div class="row white-bg" style="padding: 0px 150px 50px">
         <div class="accordion-main">
            <div class="accordion-item">
               <div class="accordion-title">
                  <h5 class="accordian-text">Application Eligibility<span class="accordion-span">+</span></h5>
               </div>
               <div class="accordion-body">
                  Anyone from any discipline and from any organization, including colleges and universities, government laboratories, research institutions, non-profit organizations, and for-profit companies.
               </div>
            </div>
            <div class="accordion-item">
               <div class="accordion-title">
                  <h5 class="accordian-text">Stage Eligibility <span class="accordion-span">+</span></h5>
               </div>
               <div class="accordion-body">
                  Anyone from any discipline and from any organization, including colleges and universities, government laboratories, research institutions, non-profit organizations, and for-profit companies.
               </div>
            </div>
            <div class="accordion-item">
               <div class="accordion-title">
                  <h5 class="accordian-text">Prior Funding Limitations<span class="accordion-span">+</span></h5>
               </div>
               <div class="accordion-body">
                  Startups that have raised more than EUR 1,000,000 in equity capital are not eligible to compete. Teams can engage in discussions to raise equity before the conference, but shouldn’t have officially raised more than the maximum amount before the conference. The EUR 1,000,000 limit applies to all dilutive funding sources such as but not limited to direct equity investments, SAFE, angel investments, professional investment, or from FF.
                  <br><br>
                  In addition, the following funding sources do contribute towards the EUR 1,000,000 limit:
                  <br>
                  <ul class="bullet-elig" style="padding: 0px 50px 0px">
                     <li class="bullet-elig light-text">
                        Contributions from friends, family, and mentors
                     </li>
                     <li class="bullet-elig light-text">Research and funding grants
                     </li>
                     <li class="bullet-elig light-text">Winnings from prior competitions
                     </li>
                     <li class="bullet-elig light-text">Winnings from prior competitions
                     </li>
                     <li class="bullet-elig light-text">Traditional debt instruments (does not include convertible notes towards equity)</li>
                  </ul>
               </div>
            </div>
            <div class="accordion-item">
               <div class="accordion-title">
                  <h5 class="accordian-text">Market Requirements<span class="accordion-span">+</span></h5>
               </div>
               <div class="accordion-body">
                  The startup must be based in or have operations in Greece or Europe to be eligible to compete.
               </div>
            </div>
            <div class="accordion-item">
               <div class="accordion-title">
                  <h5 class="accordian-text">Venture Limitations <span class="accordion-span">+</span></h5>
               </div>
               <div class="accordion-body">
                  The Startup Pitch Competition is meant to provide an avenue for early-stage startups to receive funding and accelerate their venture. Generally, the following types of ventures will not be eligible to apply: ventures within existing corporations, spinouts from existing corporations, franchises, and licensing agreements for distribution in a different geographical area.
               </div>
            </div>
            <div class="accordion-item">
               <div class="accordion-title">
                  <h5 class="accordian-text">Team Presentation <span class="accordion-span">+</span></h5>
               </div>
               <div class="accordion-body">
                  At least two and up to three team members must attend the final pitch and be involved in the Q+A. All attending team members will need to complete the online conference registration process.
               </div>
            </div>
          
             <div class="accordion-item">
                  <div class="accordion-title">
                     <h5 class="accordian-text">Additional Fineprint<span class="accordion-span">+</span></h5>
                  </div>
                  <div class="accordion-body">
                     <ul class="bullet-elig" style="padding: 0px 50px 0px">
                        <li class="bullet-elig light-text">Disclaimer: The Global Startup Workshop competition committee reserves the right to include or exclude any teams for any reason.
                        </li>
                        <li class="bullet-elig light-text">Disclosure: Teams agree that GSW can use materials shared with GSW in applications and for conference presentations in future years without limitation. This includes but is not limited to sharing publicly in photographs, example files for future years, and social media</li>
                     </ul>
                  </div>
               </div>
            <div class="accordion-item">
                  <div class="accordion-title">
                     <h5 class="accordian-text">At Conference Mentorship<span class="accordion-span">+</span></h5>
                  </div>
                  <div class="accordion-body">
                     All finalist teams will meet in person for 30 minutes with their mentor during the first day of the conference to practice and finalize their decks and pitches.
                  </div>
               </div>
         <div class="accordion-item">
               <div class="accordion-title">
                  <h5 class="accordian-text">Pre-Conference Workshop and Mentorship <span class="accordion-span">+</span></h5>
               </div>
               <div class="accordion-body">
                  <ul class="bullet-elig">
                     <li class="bullet-elig light-text">All finalist teams will be required to attend an online pitch workshop organized by MIT in Feb 2023/early Mar 2023.
                     </li>
                     <li class="bullet-elig light-text">All finalist teams are required to meet virtually with their assigned mentor once before the conference.</li>
                  </ul>
               </div> 
            </div>
            <div class="accordion-item">
                  <div class="accordion-title">
                     <h5 class="accordian-text">Full Availability<span class="accordion-span">+</span></h5>
                  </div>
                  <div class="accordion-body">
                     All teams must be at the conference for registration on the morning of Thursday, March 30th, 2023.
                  </div>
               </div>
            <script type="text/javascript">
               function toggleAccordian() {
               
               // Get the Siblings
               var getSiblings = function(elem) {
                // Setup siblings array and get the first sibling
                var siblings = [];
                var sibling = elem.parentNode.firstChild;
                // Loop through each sibling and push to the array
                while (sibling) {
                  if (sibling.nodeType === 1 && sibling !== elem) {
                    siblings.push(sibling);
                  }
                  sibling = sibling.nextSibling
                }
                return siblings;
               };
               
               // store elements by class and pass parameter's for accordion settings
               var accordionItem = document.getElementsByClassName('accordion-item');
               var accordionTitle = document.getElementsByClassName('accordion-title');
               var OpenFirst = false; // (true / false)
               var OpenAlternate = true; // (true / false)
               
               for (i = 0; i < accordionTitle.length; i++) {
                if (OpenFirst) {
                  accordionItem[0].classList.add("accordion-open");
                }
                accordionTitle[i].addEventListener('click', toggleItem, false);
               }
               
               // Call toggle function on Click
               function toggleItem() {
                var parentItem = this.parentNode;
                parentItem.classList.toggle("accordion-open");
                if (OpenAlternate) {
                  var siblings = getSiblings(parentItem);
                  for (i = 0; i < siblings.length; i++) {
                    siblings[i].classList.remove("accordion-open");
                  }
                }
               }
               }
               toggleAccordian();
             </script>
               
         </div>
      </section>
      <?php include_once 'footer.php'; ?>
      <!--JS-->
  
