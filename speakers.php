<?php
$pageTitle = 'MIT Global Startup Workshop 2023 | Athens, Greece';
$metaDescription = 'MIT Global Startup Workshop is coming to Greece in March 2023! GSW is an annual conference that aims to accelerate entrepreneurial ecosystems around the world, through workshops, mentorship and skills training. Grab your tickets now for an experience you will never forget!';
$specificKeywords = 'speakers, keynotes, plenary, Kyriakos Pierrakakis, Minister of Digital Governance, Bill Aullet, Miles Barr, Ubiquitous Energy, Andrey Zarur, Kosta Ligris, Marina Hatsopolous, Willliam Sonneborn, MIT';
include('navbar.php');
include('markup.php');
?>
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--    <head>-->
<!--        <meta charset="utf-8">-->
<!--        <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--        <meta name='viewport' content='width=device-width, initial-scale=1.0'>-->
<!--        <title>MIT GSW 2023</title>-->
        <!--CSS: Adobe Font, Boostrap, style.css-->
<!--        <link rel="stylesheet" href="https://use.typekit.net/fww3ner.css">-->
<!--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
<!--        <link rel='stylesheet' href='/2023/assets/css/style.css'>-->
<!--    </head>-->
<!--    <body>-->
        <style>
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
        </style>        
        <!--PAGE HEADER-->
        <section class="startup-pitch" style="padding-bottom: 50px">
         <div class="row" style="
            background-image: url(img/banner/banner-02.png);
            background-repeat: no-repeat;
            background-size: cover;height: 344px;
            ">
            <div class="col">
               <h1 class="section-header competition-text">SPEAKERS</h1>
            </div>
         </div>
        </section>
        
        <br><br><br>

        <div class="row">
                <div class="col">
                        <h1 class="para text-center gradient-text" id="team-section">Government Officials</h1>
                        <hr class="team-hr">
                </div>
        </div>
        <div class="row speaker-expanded-bio">
                <span class="anchor" id="N/A"></span>
                <div class="speaker col-sm-6 col-md-4 col-lg-3">
                        <img class="speaker-picture" src="img/speakers/KyriakosPierrakakis.jpeg">
                </div>
                <div class="col-sm-6 col-md-8 col-lg-9">
                        <div class="name">Kyriakos Pierrakakis</div>
                        <div class="title">Minister of Digital Governance</div>
                        <p class="bio">Kyriakos Pierrakakis is the Minister of Digital Governance in the Cabinet of Kyriakos Mitsotakis. 
                                       He is a Greek computer and political scientist and politician. 
                                       In 2007 he earned a Master in Public Policy from John F. Kennedy School of Government, Harvard University and in 2009 he earned a Master of Science in Technology and Policy from MIT. 
                                       He also holds a Bachelor’s degree in computer science from Athens University of Economics and Business. 
                                       He served as Director of Research at Dianeosis, an independent non-profit think tank. He produced an array of research papers with a strong focus on economic growth and 
                                       understanding the prevailing perceptions and beliefs among Greeks. He has also worked on technology policy for various research institutes in Greece and abroad and headed Youth Foundation as president.</p>
                </div>
        </div>
        <div class="row speaker-expanded-bio">
                <span class="anchor" id="N/A"></span>
                <div class="speaker col-sm-6 col-md-4 col-lg-3">
                        <img class="speaker-picture" src="img/speakers/ChristosDimis.jpg">
                </div>
                <div class="col-sm-6 col-md-8 col-lg-9">
                        <div class="name">Christos Dimas</div>
                        <div class="title">Deputy Minister for Research and Technology</div>
                        <p class="bio">Kyriakos Pierrakakis is the Minister of Digital Governance in the Cabinet of Kyriakos Mitsotakis. 
                                       Dr Christos Dimas is a lawyer and a Member of the Hellenic Parliament, representing Nea Demokratia in the 
                                district of Korinthia.He was born on the 29th of May 1980 and graduated from Athens College.Christos obtained his 
                                LLB degrees from the Law School of the National and Kapodistrian University of Athens and from Queen Mary University of London. 
                                He completed his Masters Degree in Comparative Politics at the London School of Economics and Political Science (LSE). 
                                At the LSE, he finished his PhD in European Political Economy, as a scholar of the Alexander Onassis Public Benefit Foundation. 
                                His thesis title was «National institutional contexts and domestic discourse during proposed transformative policy change. 
                                The case of the telecoms privatization in Greece and the Republic of Ireland. During his studies, he worked as the London 
                                correspondent of Apogevmatini newspaper and practiced journalism at the BBC. At the age of 25, Christos taught the course 
                                «Introduction to Comparative Politics» at the LSE Government Department. He has also taught the course 
                                «Mass Media and Social Regulation at ICON College, University of Leicester and worked as a research associate at the 
                                European Centre of Excellence «Jean Monnet». He has published many articles in Greek and international journals. 
                                Before entering politics, he worked in the private sector as a business consultant for the Boston Consulting Group (BCG). 
                                Since 2012, Mr Dimas serves as Member of Hellenic Parliament for Corinthia and from July 2019 he is Deputy Minister for 
                                Research and Technology.</p>
                </div>
        </div>
        

        <?php
        // Valid speakers are the ones that have bio and photo
        function allValidSpeakersFunction($speakerData) {
            return (strcasecmp($speakerData['Speaker'], 'Y') == 0)
                && (strlen($speakerData['Bio']) > 0)
                && (strlen($speakerData['Filename']) > 0);
        }


        // Only keynotes
        $keynotesFilterFunction = function($speakerData) {
            return allValidSpeakersFunction($speakerData)
                && (strcasecmp($speakerData['Keynote'], 'Y') == 0);
        };
        
        
        $keynotesHtml = markup($keynotesFilterFunction);
        // Only non-keynotes 
        $speakersFilterFunction = function($speakerData) {
            return allValidSpeakersFunction($speakerData)
                && (strcasecmp($speakerData['Keynote'], 'Y') != 0);
        };
        $speakersHtml = markup($speakersFilterFunction);
        ?>
        <!--<div class="keynote-section" id="keynote-section-expanded">
            <p class="section-header section-header-page">Keynotes</p>
        -->
        <div class="row">
                <div class="col">
                        <h1 class="para text-center gradient-text" id="team-section">Keynotes</h1>
                        <hr class="team-hr">
                </div>
        </div>
           <?php
           
           $row = 0;
        
            $skip_row_number = array("1");
            
            $file = fopen("data/speakers.csv", "r");
  
       
        while (($data = fgetcsv($file)) !== false) {
            $row++;	
            
            if (in_array($row, $skip_row_number))	
            {
        		continue; 
        	}
        	
            if($data[0]=="Y"){
            
            
     ?>       
      
     <div class="row speaker-expanded-bio">
        <span class="anchor" id="N/A"></span>
        
        <div class="speaker col-sm-6 col-md-4 col-lg-3">
        <!--<img class="speaker-picture-association" src="img/mit.png">-->
        <img class="speaker-picture" src="img/speakers/<?php echo $data[4]; ?>">
        </div>
        
        <div class="col-sm-6 col-md-8 col-lg-9">
                <div class="name"><?php echo $data[1]." ".$data[2]; ?></div>
                <div class="title"><?php echo $data[6]; ?></div>
                <p class="bio"><?php echo $data[7]; ?></p>
        </div>
     </div>
      
      <?php 
            //  echo "<pre>";print_r();
            // HTML tag for placing in row format
            // echo "<tr>";
            // foreach ($data as $i) {
            //     echo htmlspecialchars($i);
                
            // }
            // echo "</tr> \n";
            
                }
            // }
        }
  
           ?>
           
        </div>
        <!--<div class="section" id="speaker-section-expanded">
            <p class="section-header section-header-page">Speakers</p>
        -->
        <div class="row">
                <div class="col">
                        <h1 class="para text-center gradient-text" id="team-section">Speakers</h1>
                        <hr class="team-hr">
                </div>
        </div>
            <?php
           
           $row = 0;
        
            $skip_row_number = array("1");
            
            $file = fopen("data/speakers.csv", "r");
  
       
        while (($data = fgetcsv($file)) !== false) {
            $row++;	
            
            if (in_array($row, $skip_row_number))	
            {
        		continue; 
        	}
        	
            if($data[0]=="N"){
            
            
     ?>       
      
        <div class="row speaker-expanded-bio">
                <span class="anchor" id="N/A"></span>
                <div class="speaker col-sm-6 col-md-4 col-lg-3">
                        <!--<img class="speaker-picture-association" src="img/mit.png">-->
                        <img class="speaker-picture" src="img/speakers/<?php echo $data[4]; ?>">
                </div>
                <div class="col-sm-6 col-md-8 col-lg-9">
                        <div class="name"><?php echo $data[1]." ".$data[2]; ?></div>
                        <div class="title"><?php echo $data[6]; ?></div>
                        <p class="bio"><?php echo $data[7]; ?></p>
                </div>
        </div>
      
      <?php 
            //  echo "<pre>";print_r();
            // HTML tag for placing in row format
            // echo "<tr>";
            // foreach ($data as $i) {
            //     echo htmlspecialchars($i);
                
            // }
            // echo "</tr> \n";
            
                }
            // }
        }
  
           ?>   
        </div>
<!--    </body>-->
<!--</html>-->
<?php
    include("footer.php");
?>
