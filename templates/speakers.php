<?php
$pageTitle = 'MIT Global Startup Workshop 2023 | Athens, Greece';
$metaDescription = 'MIT Global Startup Workshop is coming to Greece in March 2023! GSW is an annual conference that aims to accelerate entrepreneurial ecosystems around the world, through workshops, mentorship and skills training. Grab your tickets now for an experience you will never forget!';
$specificKeywords = 'speakers, keynotes, Bill Aullet, Miles Barr, Ubiquitous Energy, Andrey Zarur, Kosta Ligris, Marina Hatsopolous, Willliam Sonneborn, MIT';

include('navbar.php');
include('markup.php');
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>MIT GSW 2023</title>

        <!--CSS: Adobe Font, Boostrap, style.css-->
        <link rel="stylesheet" href="https://use.typekit.net/fww3ner.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel='stylesheet' href='assets/css/style.css'>
    </head>
    <body>

        <div class="banner" data-parallax="scroll" data-image-src="">
            <h1 class="banner-text">
                Our Speakers
            </h1>
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

        <div class="section" id="keynote-section-expanded">
            <p class="section-header section-header-page">Keynotes</p>

            <?= $keynotesHtml ?>
        </div>

        <div class="section" id="speaker-section-expanded">
            <p class="section-header section-header-page">Speakers</p>

            <?= $speakersHtml ?>
        </div>

    </body>
</html>

<?php
    include("footer.php");
?>
