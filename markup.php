<?php
/**
* Generate markup for people in the data/people.csv spreadsheet
* selected by a filter function.
*
* @param Callable $filterFunction A function to be performed over the array of speakers.
* @return string The HTML markup corresponding to the selected speakers.
*/
function markup(Callable $filterFunction) {
    $html = "";

    // Make speakers data available
    $speakers = array();
    $speakersFilePath = "data/speakers.csv";
    $speakersFileHandle = fopen($speakersFilePath, "r");
  
     if ($speakersFileHandle !== FALSE) {
         
        $header = fgetcsv($speakersFileHandle, 1000, ","); // Skip first line (headers)

        while (($data = fgetcsv($speakersFileHandle, 5000, ",")) !== FALSE) {
            
            // Only include rows when the row data matches the column headers
            if (count($header) == count($data)) {
              
                // Make array key be the ordering rule (last name, then first name, ignoring spaces)
                $firstName = $data[4];
                $lastName = $data[5];
                $orderingKey = str_replace(" ", "", $data[5].$data[4]);

                $speakers[$orderingKey] = array_combine($header, $data);
               
            }
            
        }// Filter array with custom filter function
        // $speakers = array_filter($speakers, $filterFunction);
       
        // Sort array by key case-insensitively
        ksort($speakers, SORT_NATURAL | SORT_FLAG_CASE);

        // Generate HTML markup
        foreach ($speakers as $orderingKey => $speaker) {
            $speakerTag = $speaker['ID'];
            $name = "{$speaker['First Name']} {$speaker['Last Name']}";
            $pictureFilename = $speaker['Filename'];
            $bio = str_replace(array("\r\n", "\n", "\r"), "<br /><br />", $speaker['Bio']);
            $title = $speaker['Title'];

            // Logo around picture
            $associationMarkup = (strcasecmp($speaker['MIT association'], 'Y') == 1) ?
                "<img class='speaker-picture-association' src='img/mit.png'/>" : "";

            // Different tag for speakers and keynotes determines style and page section
            $isKeynote = (strcasecmp($speaker['Keynote'], 'Y') == 0);
            $speakerOrKeynoteTag = $isKeynote ? 'keynote' : 'speaker'; 
            // Create markup
            $html .= "
<div class='row {$speakerOrKeynoteTag}-expanded-bio'>
<span class='anchor' id='{$speakerTag}'></span>

<div class='{$speakerOrKeynoteTag} col-sm-6 col-md-4 col-lg-3'>
{$associationMarkup}
<img class='{$speakerOrKeynoteTag}-picture' src='img/speakers/{$pictureFilename}' />
</div>

<div class='col-sm-6 col-md-8 col-lg-9 speaker-expanded-text {$speakerOrKeynoteTag}-expanded-text'>
" . ($isKeynote ? "<div class='keynote-title'>Keynote</div>" : "") ."
<div class='{$speakerOrKeynoteTag}-expanded-name'>{$name}</div>
<div class='{$speakerOrKeynoteTag}-expanded-position'>{$title}</div>
<p class='para light-text light-bg-dark-text'>" . $bio . "</p>
</div>
</div>";
         }

         fclose($speakersFileHandle);
     }

    return $html;
 }
?>
