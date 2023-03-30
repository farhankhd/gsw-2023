<?php
    $pageTitle = 'MIT Global Startup Workshop 2023 | Athens, Greece';
    $metaDescription = 'MIT Global Startup Workshop is coming to Greece in March 2023! GSW is an annual conference that aims to accelerate entrepreneurial ecosystems around the world, through workshops, mentorship and skills training. Grab your tickets now for an experience you will never forget!';
    $specificKeywords = 'speakers, keynotes, Bill Aullet, Miles Barr, Ubiquitous Energy, Andrey Zarur, Kosta Ligris, Marina Hatsopolous, Willliam Sonneborn, MIT';


    include('navbar.php');
    include('markup.php');
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
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
        @media only screen and (max-width: 600px) {
            .btn {
                padding: 10px;
                z-index: 2;
            }
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
                <h1 class="section-header competition-text">CONFERENCE SCHEDULE</h1>
            </div>
        </div>
    </section>

    <br><br><br>

    <!--INTERACTIVE AGENDA-->
    <section class="content-schedule container">
        <article class="content ">
            <div class="col-xs-12 col-md-12">
                <span class="anchor" id="schedule-navigation"></span>

                <p class="text-center">
                    <a class="btn btn-default register-btn" href="https://acrobat.adobe.com/link/track?uri=urn:aaid:scds:US:bf52c98f-f9bc-3f3b-8fa8-5d987a19ef70" role="button">View Program</a>
                    <a class="btn btn-default register-btn" href="doc/gsw-agenda-2023-final.pdf" role="button">View Agenda</a>
                    <br />
                    <br />

                    Use the buttons below to view the conference schedule day by day.
                    <br /></p>
            </div>
            <br>

            <div class="col-xs-12 col-md-12 schedule-wrapper">
                <div class="row toggle-group" id="toggle-group">
                    <div class="col-xs-12 col-sm-6 sqs-block button-block sqs-block-button">
                        <a href="/#" data-event-day="Day1" class="btn btn-schedule active">THURSDAY (March 30)</a>
                    </div>
                    <div class="col-xs-12 col-sm-6 sqs-block button-block sqs-block-button">
                        <a href="/#" data-event-day="Day2" class="btn btn-schedule">FRIDAY (March 31)</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 event-wrapper">
            </div>
            <div class="col-xs-12 event-tags">
                <div class="event-tag event-type-general">General</div>
                <div class="event-tag event-type-keynote">Keynote</div>
                <div class="event-tag event-type-panel">Panel</div>
                <div class="event-tag event-type-workshop">Workshop</div>
                <div class="event-tag event-type-competition">Competition</div>
            </div>

            <br />

            <div class="col-xs-12 speaker-expanded-bio">
                <div class="row">
                    <?php
                    // PARSE CSV CONTENT
                    $fileHandle = fopen("data/schedule.csv", "r");

                    if ($fileHandle !== FALSE) {
                        fgetcsv($fileHandle, 1000, ","); // Skip first line (headers)

                        $eventId = 0;

                        // Keep event time between rows for comparison
                        $eventDay = "";
                        $eventTime = "";
                        $lastEventDay = "";
                        $lastEventTime = "";

                         while (($data = fgetcsv($fileHandle, 1000, ",")) !== FALSE) {

                             $data = array_map("utf8_encode", $data);

                            $lastEventDay = $eventDay;  

                            $lastEventTime = "";

                            while (($data = fgetcsv($fileHandle, 1000, ",")) !== FALSE) {
                                $data = array_map("utf8_encode", $data);

                                $lastEventDay = $eventDay;
                                $lastEventTime = $eventTime;
                                $eventDay = $data[0];
                                $eventTime = $data[1];
                                $eventTitle = $data[2];
                                $eventType = $data[4];
                                $eventMod = $data[5];
                                $eventSpeakers = array($data[7], $data[8], $data[9], $data[10],  $data[11], $data[12]);

                                // // there is another event at the same time
                                $isParallel = $lastEventTime == $eventTime;

                                // speaker is a keynote
                                $isKeynote = $eventType == "keynote";
                                $keynoteSpeakerTag = $data[7];

                                // // event ID also used in the panels_workshops page
                                $isPanelOrWorkshop = ($eventType == "workshop") || ($eventType == "panel");
                                if ($isPanelOrWorkshop) {
                                    $eventId++;
                                }

                                if ($lastEventDay != $eventDay) {
                                    if ($lastEventDay != "") {
                                        echo "</div> <!-- end of #Day$lastEventDay -->";
                                    }
                    ?><div id="Day<?= $eventDay ?>" class="event-day col-xs-12 <?= ($lastEventDay != "") ? "hide" : "" ?>">

                    <!--LOCATION

                    <div>
                        <?php if ($eventDay == 1){echo "<p class='locationSchedule' style='text-align: left;'>Location: TBD</p>";}
                                    else if ($eventDay == 2){echo "<p class='locationSchedule' style='text-align: left;'>Location: TBD</p>";}
                        ?>
                    </div>

                    -->
                    <?php
                                }
                    ?>
                    <div class="event-category">
                        <div class="event-group <?= ($isParallel ? "event-parallel" : "") ?>">
                            <div class="event-list">
                                <div class="event-detail">
                                    <div class="event-left">
                                        <div class="event-time">

                                            <?= $eventTime ?>
                                        </div>
                                    </div>
                                    <div class="event-right event-type-<?= $eventType ?>">

                                        <h3 class="event_heading" style="font-family: myriad-pro, sans-serif; font-style: normal; font-weight: 300px; color:  #000">

                                            <?php echo "$eventTitle";?>

                                        </h3>

                                        <h3 class="event_heading" style="font-family: myriad-pro, sans-serif; font-style: normal; font-weight: 150px; color:  #7d4270">
                                            <?php 
                                                if ($eventMod != "TBD") {
                                                    echo "Moderator:<br>";
                                                    echo "$eventMod<br>";
                                                }
                                            ?>
                                        </h3>

                                        <h3 class="event_heading" style="font-family: myriad-pro, sans-serif; font-style: normal; font-weight: 150px; color:  #00c0f2">
                                            <?php 
                                                if ($eventSpeakers[0] != "TBD") {
                                                    echo "Speaker(s):<br>";
                                                }
                                            ?>
                                        </h3>
                                        <h3 class="event_heading" style="font-family: myriad-pro, sans-serif; font-style: normal; font-weight: 150px; color: #00c0f2">
                                            <?php
                                                foreach ($eventSpeakers as $speaker) {
                                                    if ($speaker != "TBD") { 
                                                        echo "$speaker <br>";
                                                    }
                                                }
                                            ?>
                                        </h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                             }
                           // fclose($fileHandle);
                        }
                    }
                    ?>
                    </div> <!-- end of #Day2 -->

                    <div class="col-xs-12 visible-xs-block">
                        <br /><br />
                        <!--<p class="text-center"><a href="#schedule-navigation" style='color: #000;'>See schedule for another day</a></p>-->
                    </div>
                </div> <!-- end of .row -->
            </div> <!-- end of .speaker-expanded-bio -->
        </article>
    </section>

    <br><br>

    <?php
        // DAY BUTTON CLICK
        $scripts .= '
        <script type="text/javascript">
            $(".btn.btn-schedule").on("click", function(e) {
                var contentElementId = $(this).data("event-day");

                // Hide content from other days
                $(".event-day").addClass("hide");

                // Display content from this day
                $("#"+contentElementId).removeClass("hide");

                // Mark day as current
                $(".btn.btn-schedule").removeClass("active");
                $(this).addClass("active");
                return false;
            });
        </script>';
    ?>
</body>


<?php
include("footer.php");
?>

<script type="text/javascript">
    $(".btn.btn-schedule").on("click", function(e) {
        var contentElementId = $(this).data("event-day");

        // Hide content from other days
        $(".event-day").addClass("hide");

        // Display content from this day
        $("#"+contentElementId).removeClass("hide");

        // Mark day as current
        $(".btn.btn-schedule").removeClass("active");
        $(this).addClass("active");
        return false;
    });
</script>';
