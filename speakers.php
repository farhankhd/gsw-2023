<?php
$pageTitle = 'MIT Global Startup Workshop 2023 | Athens, Greece';
$metaDescription = 'MIT Global Startup Workshop is coming to Greece in March 2023! GSW is an annual conference that aims to accelerate entrepreneurial ecosystems around the world, through workshops, mentorship and skills training. Grab your tickets now for an experience you will never forget!';
$specificKeywords = 'speakers, keynotes, Bill Aullet, Miles Barr, Ubiquitous Energy, Andrey Zarur, Kosta Ligris, Marina Hatsopolous, Willliam Sonneborn, MIT';

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

        <!--SPEAKERS-->
        <section class="startup-pitch">
         <div class="row" style="
            background-image: url(img/banner/banner-01.png);
            background-repeat: no-repeat;
            background-size: cover; height: 344px;
                                 margin-bottom: 20px;
            ">
            <div class="col">
               <h1 class="section-header competition-text">OUR SPEAKERS</h1>
            </div>
         </div>
      </section>

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

        <div class="keynote-section" id="keynote-section-expanded">
            <p class="section-header section-header-page">Keynotes</p>

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
        
        <img class="speaker-picture" src="img/speakers/<?php echo $data[4]; ?>">
        </div>
        
        <div class="col-sm-6 col-md-8 col-lg-9 speaker-expanded-text speaker-expanded-text">
        
        <div class="speaker-expanded-name"><?php echo $data[1]." ".$data[2]; ?></div>
        <div class="speaker-expanded-position"><?php echo $data[6]; ?></div>
        <p class="para light-text light-bg-dark-text"><?php echo $data[7]; ?></p>
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

        <div class="section" id="speaker-section-expanded">
            <p class="section-header section-header-page">Speakers</p>
            
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
        
        <img class="speaker-picture" src="img/speakers/<?php echo $data[4]; ?>">
        </div>
        
        <div class="col-sm-6 col-md-8 col-lg-9 speaker-expanded-text speaker-expanded-text">
        
        <div class="speaker-expanded-name"><?php echo $data[1]." ".$data[2]; ?></div>
        <div class="speaker-expanded-position"><?php echo $data[6]; ?></div>
        <p class="para light-text light-bg-dark-text"><?php echo $data[7]; ?></p>
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
