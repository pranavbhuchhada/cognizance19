<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .hide { display: none; }
        .show { display: block; }
    </style>
</head>

<body>
    <!-- header part will come here -->
    <header style="background-color: #22252A; height: 10vh; width: 100%;"></header>

    <section style="min-height: 80vh;">
        <!-- left sided navbar -->
        <ul class="side-navbar" role="tablist">
            <li><p onclick="event_f1()">Tech-Event 1</p></li>
            <li><p onclick="event_f2()">Tech-Event 2</p></li>
            <li><p onclick="event_f3()">Tech-Event 3</p></li>
            <li><p onclick="event_f4()">Tech-Event 4</p></li>
            <li><p onclick="event_f5()">Tech-Event 5</p></li>
            <li><p onclick="event_f6()">Tech-Event 6</p></li>
            <li><p onclick="event_f7()">Tech-Event 7</p></li>
        </ul>
        <!-- right sided event links -->
        <div class="event-panel">
            <div id="section-main" class="hide show">
                <p class="event-panel-heading hide show">EVENTS</p>
            </div>
            <div id="section_event_1" class="hide">
                <p class="event-panel-heading">EVENT #1</p>
            </div>
            <div id="section_event_2" class="hide">
                <p class="event-panel-heading">EVENT #2</p>
            </div>
            <div id="section_event_3" class="hide">
                <p class="event-panel-heading">EVENT #3</p>
            </div>
            <div id="section_event_4" class="hide">
                <p class="event-panel-heading">EVENT #4</p>
            </div>
            <div id="section_event_5" class="hide">
                <p class="event-panel-heading">EVENT #5</p>
            </div>
            <div id="section_event_6" class="hide">
                <p class="event-panel-heading">EVENT #6</p>
            </div>
            <div id="section_event_7" class="hide">
                <p class="event-panel-heading">EVENT #7</p>
            </div>
        </div>
    </section>

    <!-- footer part will come here -->
    <footer style="background-color: #1F1A24; height: 10vh; width: 100%;"></footer>

    <script src="./script.js"></script>
</body>

</html>