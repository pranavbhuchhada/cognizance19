<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/navsidebar.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .hide { display: none; }
        .show { display: block; }
    </style>
</head>
<body class="container-fluid m-0 p-0">
    <section>
        <!-- left sided navbar -->
        <ul class="side-navbar row" role="tablist">
            <li class="col-md-12 col-sm-4 col-xs-4 col-4"><p onclick="event_f1()">Computer Engineering</p></li>
            <li class="col-md-12 col-sm-4 col-xs-4 col-4"><p onclick="event_f2()">Information Technology</p></li>
            <li class="col-md-12 col-sm-4 col-xs-4 col-4"><p onclick="event_f3()">Electronics And Communication</p></li>
            <li class="col-md-12 col-sm-4 col-xs-4 col-4"><p onclick="event_f4()">Electrical Enginneering</p></li>
            <li class="col-md-12 col-sm-4 col-xs-4 col-4"><p onclick="event_f5()">Civil Engineering</p></li>
            <li class="col-md-12 col-sm-4 col-xs-4 col-4"><p onclick="event_f6()">Mechanical Engineering</p></li>
        </ul>
        <!-- right sided event links -->
        <div class="event-panel">
            <div id="section-main" class="hide show">
                <img src="../assets/sacredgames_upper.png" class="img-fluid sacred">
                <p class="event-panel-heading pt-3 hide show">EVENTS</p>
                <img src="../assets/sacredgames_lower.png" class="img-fluid sacred">
            </div>
            <div id="section_event_1" class="hide">
                <img src="../assets/sacredgames_upper.png" class="img-fluid sacred">
                <p class="event-panel-heading pt-3">
                    <a id="ce_1" href="#">Go and Hunt</a><br>
                    <a id="ce_2" href="#">Bro - Code</a><br>
                    <a id="ce_3" href="#">Hard - War</a><br>
                    <a id="ce_4" href="#">Code Of Throens</a><br>
                    <a id="ce_5" href="#">Algorithm Unlock</a>
                </p>
                <img src="../assets/sacredgames_lower.png" class="img-fluid sacred">
            </div>
            <div id="section_event_2" class="hide">
                <img src="../assets/sacredgames_upper.png" class="img-fluid sacred">
                <p class="event-panel-heading pt-3">
                    <a id="it_1" href="#">Code Runner</a><br>
                    <a id="it_2" href="#">Tech Rodies</a><br>
                    <a id="it_3" href="#">Connection Match</a><br>
                    <a id="it_4" href="#">Clash Riddle</a><br>
                    <a id="it_5" href="#">Subterfuge</a>                    
                </p>
                <img src="../assets/sacredgames_lower.png" class="img-fluid sacred">
            </div>
            <div id="section_event_3" class="hide">
                <img src="../assets/sacredgames_upper.png" class="img-fluid sacred">
                <p class="event-panel-heading pt-3">
                    <a id="ec_1" href="#">Final Kombat </a><br>
                    <a id="ec_2" href="#">Astromech - Aisle</a><br>
                    <a id="ec_3" href="#">The Golden Snitch</a><br>
                    <a id="ec_4" href="#">Quizpicable Me</a><br>                    
                </p>
                <img src="../assets/sacredgames_lower.png" class="img-fluid sacred">
            </div>
            <div id="section_event_4" class="hide">
                <img src="../assets/sacredgames_upper.png" class="img-fluid sacred">
                <p class="event-panel-heading pt-3">                    
                    <a id="ee_1" href="#">Sacred Games</a><br>
                    <a id="ee_2" href="#">Electrobuzz</a><br>
                    <a id="ee_3" href="#">Relm of Circuits</a><br>
                    <a id="ee_4" href="#">Astrotech</a><br>
                </p>
                <img src="../assets/sacredgames_lower.png" class="img-fluid sacred">
            </div>
            <div id="section_event_5" class="hide">
                <img src="../assets/sacredgames_upper.png" class="img-fluid sacred">
                <p class="event-panel-heading pt-3">
                    <a id="cl_1" href="#">Bob The Builder</a><br>
                    <a id="cl_2" href="#">Age Of Town</a><br>
                    <a id="cl_3" href="#">House Of Cards</a><br>
                    <a id="cl_4" href="#">Civil War</a><br>
                </p>
                <img src="../assets/sacredgames_lower.png" class="img-fluid sacred">
            </div>
            <div id="section_event_6" class="hide">
                <img src="../assets/sacredgames_upper.png" class="img-fluid sacred">
                <p class="event-panel-heading pt-3">
                    <a id="me_1" href="#">Auto Master</a><br>
                    <a id="me_2" href="#">Solid War</a><br>
                    <a id="me_3" href="#">Space X</a><br>
                    <a id="me_4" href="#">Fast & Furious</a><br>
                </p>
                <img src="../assets/sacredgames_lower.png" class="img-fluid sacred">
            </div>
        </div>
    </section>
    <?php include '../navsidebar.php'; ?>
    <div id="event_ce_1" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Go And Hunt</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">The event is basically a Treasure Hunt which is mixture of both, tech & non-tech aspects. First round would be location hunt with the help of output generated from code. The second round would be a technical quiz and the last round would be series of password protected folder and the participants will have to hunt the password with the output of code. Finally they need to code the program in the last folder.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_ce_2" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Bro - Code</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">This event is a fun game of compatibility while brushing up your technical skills. First round would be the quiz where one partner will guess the answers that their partner cannot guess correctly. The next round would be heads up challenge while the last round would be hunting the partner with the help of clue and code.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_ce_3" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Hard War</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">Hard – War is a simple hardware based event. The first round would be pictorial representation of hardware with different difficulty levels. The next round would be memorizing the hardware components present in the room and last round would be assembling the hardware components. </p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_ce_4" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Code Of Thrones</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">The first round is about finding the problem definition from the riddle and then coding the same problem. The second round would be a quiz of basics while the last round would be a head-on coding.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_ce_5" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Algorithm Unlock</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">It is a coding event on HackerEarth platform. There will be only 1 round of 3 hours. But there is one twist, after every 30 minutes, participant’s screen will be locked with a different password and participants will have to solve a puzzle in order to unlock the screen.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_it_1" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Code Runner</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">Code Runner is an individual event. It consists of aptitude, basic level competitive coding and amp. The last round will be speed typing with no language barrier.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_it_2" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Tech Roadie</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">This is a technical treasure hunt with a tint of non-technical games which consists of quiz, team work, problem solving (mainly computer programming) and solving the famous tower of Hanoi. This is couple event where pairs will be decided in a unique way by the coordinators. This event consists of rounds which includes some physical activities, on-paper problem solving, coding, debugging, etc.
                        </p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_it_3" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Connection Match</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">Description  Connections Match will ignite the adrenaline rush in your body. It focuses on how a person can adapt to any situation. This event will see how a person can win with qualities like team work, presence of mind and sound senses. </p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_it_4" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Clash Riddle</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">It is a 3-round event, with idiom identification, debugging of a bit of code based on riddles, and reverse coding algorithm to crack an idiom or a riddle. It will require logic building and application of the same.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_it_5" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Subterfuge</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">This event is all about your “MUSCLE MEMORY”. With teamwork and coordination any hurdle can be tackled. Racing on a sports ground is way too mainstream. Instead, come flex your reflexes and coding muscles. Come indulge in the ‘Subterfuge’.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div id="event_ec_1" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Final Combact</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">Description  This event is the ultimate test of engineering excellence, team work, strategy and gaming. It is an event wherein manually controlled robots battle each other in the arena. The robot that immobilizes the opponent or knocks the opponent out is declared as the winner.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_ec_2" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Astromech - Aisle</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">The participants have to design a wired/wireless robot that is manually controlled machine and is durable in all the terrain arena like sand, pebbles, obstacles, bumpers, bridges, marbles, grease, inclines, dips, cliffs, ramps, banks, etc.
                        </p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_ec_3" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">The Golden Snitch</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">Description  A robot soccer based event in which the team has to design a wired/wireless robot which will compete on an arena specially designed for robotic soccer match and the team which goals maximum will play further. </p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_ec_4" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Quizpicable Me</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">This event will test your general and technical knowledge in the horizon of electronics and communication engineering and its history. It would also test your ability to work as a team.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_ee_1" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Sacred Games</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">Sacred games is a non-tech event consisting of 5 rounds. After each round there will be elimination. It has a bunch of interesting games. The last one to survive wins this event.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_ee_2" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Electrobuzz</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">
                            Description Analytical round: Screening test. Test your basics.<br>Practical round 1: Solve using logic gates and move forward in the competition.<br>Practical round 2: The participants will have to solve a circuit puzzle.
                        </p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_ee_3" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Relm Of Circuits</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">This event has 3 rounds. First round consists of group discussion (without language barrier). Next round would be a technical treasure hunt and the last round would be related to electric circuit.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_ee_4" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Astrotech</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">The participants have to design a wired/wireless robot that is manually controlled machine and is durable in all the terrain arena like sand, pebbles, obstacles, bumpers, bridges, marbles, grease, inclines, dips, cliffs, ramps, banks, etc.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_cl_1" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Bob the Builder</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">Bob the builder is an event solely based on Construction Material & Methods. There are different rounds to test the knowledge of participants regarding material and equipment with the key elements of analysis, quantity & on the spot problem solving skills .</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_cl_2" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Age Of Town</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">
                           This event is based on town planning. First round consists of a video clip and based that students have to take a quiz. Virtual bucks will be provided to buy different types of building structure. The teams have to design and build the model of a town. Some requirements of the town will be given by chits.
                        </p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_cl_3" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">House Of Cards</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">This is one of the most elementary events in the technical field of civil. Participant from 1st year to final year can be a part of this fun-filled technical event to test their knowledge in field of civil.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_cl_4" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Civil War</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">The participants will come with their candystick crane structure made according to given specifications and checking of the same will be done.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_me_1" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Auto Master</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">This event deals with the testing of general knowledge by arising questions related to technical prospects of this field. It is further related to history of automobiles, vehicle type and its specification, popular places and automobile companies. The participants taking part in this event can enhance their technical skills in this area.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_me_2" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Solid War</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">
                          World of designing is running more than the speed of light. Now it’s time to express your imagination power. Here “SOLID WAR” is challenging your designing brilliance. Now the battle has begun so challenge your mind. If you are mad for solidworks so get armed up with all your design weapons and tricks in this war of designing.
                        </p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_me_3" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Space X</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">Description  As you know the human race has evolved so much that they are travelling into space with the help of ROCKETS. So here’s “SPACE X” to test your skills and to challenge your brilliance.</p>               
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="event_me_4" class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12">
                        <span class="pull-right"><a href="#" class="close"></a></span>
                        <h1 class="text-center">Fast & Furious</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">Description   An event of tricycle making which involves racing with rivals. The team with higher points (total) and lesser time will win.</p>                
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Date And Time</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12"></div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Venue</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>                          
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/navsidebar.js"></script>
    <script src="./script.js"></script>
</body>

</html>