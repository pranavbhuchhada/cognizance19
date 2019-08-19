<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Events</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/navsidebar.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/cz_logo.ico" />
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>All the participating teams would be in a
                        classroom. Each team would be given a code that they need to
                        solve without any technical assistance. The code would
                        generate an output that would be the clue to your first location.
                        Once the team manages to crack the clue of the location, they’ll
                        head out to that particular place. From there, our volunteers
                        would give you clues or things that would lead you to the next
                        location.
                        The assumed time duration for this round is 2 hours.<br><br>

                        Round 2: <br>The second round would be a technical quiz. The
                        selected teams from round 1 would be given a quiz that would
                        contain basic questions related to C/C++ programming
                        languages or even a simple technical quiz. It could be both!
                        The time duration for this round is 1 hour.<br><br>

                        Round 3: <br>Here comes the final round. This round will help
                        to declare who is the winner. Here, each selected team would
                        be given a code to solve. The output of that code would contain
                        the lab number, PC number within that particular lab and a
                        secret code. Once on that PC, the team members would have to
                        open a password protected folder using the secret code given
                        from the output of the code. The folder opened would contain
                        a riddle or a puzzle that has to be solved. The solution of the
                        riddle or puzzle would be the secret code to the next folder. In
                        this manner, whichever team manages to open all the folders
                        first, will be declared the Winner of Hunt the Code event
                        CZ’19!</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">1. There must be two participants in each team<br>
                            2. 4-5 clues will be given at different locations. Only the first<br>
                            20-25 teams will qualify for round <br>
                            3. Use of technical gadgets to solve the code or quiz is strictly
                            not allowed. Team will be disqualified if found doing so.<br>
                            4. Round 2 quiz would be pen-paper based.<br>
                            5. Only first 5 teams who scores highest will qualify for last
                            round.<br>
                            6. In case if two teams scores the same then the time factor
                            would be considered which will be noted while submitting the
                            quiz.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Contact</h5>
                        <h5 class="text-center">Palak Bhalodi<br>9825240790</h5>
                        <h5 class="text-center">Akash Saparia<br>9904464334</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>Both the partner will be given some question and one
                            partner will answer all the question (tech, non tech and
                            aptitude) while the other partner will have to guess what their
                            partner cannot guess correctly. They will be awarded marks
                            based on same. 50% teams will be eliminated here.<br><br>
                            Round 2:<br>“THE HEADS UP ROUND” ... One of the partner
                            will be given logo which they have to keep on their heads
                            without seeing. Then other partner will explain the logo
                            without using keywords related to it.<br><br>
                            Round 3:<br> “FINDING FENNY”... Each participant will have
                            codes equal to number of participants in last round and a clue
                            specific where there partner is ... they have to crack the hint ..
                            And get the output of code for the place they think their partner
                            is... the one to reach their partner first will be winner.
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">1. Students have to participate in the team of 2.<br>
                            2. In case of tie, they have to answer the question based on<br>
                            partners and the team with maximum match will be
                            winner.<br>
                            3. The place for finding would be according to marks scored
                            in first and second round.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Contact</h5> -->
                        <!-- <h5 class="text-center">Name Number</h5> -->
                        <!-- <h5 class="text-center">name Number</h5> -->
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>This would be buzzer round. Participants will be shown photo
                        of 5 hardware. Teams will be divided in batches as per entries.
                        Photos will be as per difficulty level and so will be marks.
                        Top 30% team from each batch would make to next round.<br><br>
                        Round 2:<br>All the team members will be allowed in room full of
                        hardware then after certain time (2-3 minutes), they will be
                        outside and then they will have to note down everything they
                        remember. Top 7-10 teams will make it to final round.(The
                        teams will be awarded by number of things they
                        remembered*10 marks.)<br><br>
                        Round 3:<br>
                        Participants will be given “QWERTY” keyboard without
                        keys. They will have to assemble the keyboard. Based on
                        marks of above round they will have access to hints. Time
                        will be judging criteria. In case of tie marks will also get
                        considered.
                        <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">
                            1.There will be 2 students per team in every round.<br>
                            2. In case of tie in round 2, the marks of first round will be considered.
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Contact</h5> -->
                        <!-- <h5 class="text-center">Name Number</h5> -->
                        <!-- <h5 class="text-center">name Number</h5> -->
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>In first round the participants will be given 3 sets, each of 4 cheats which would
                        consist of puzzles, the participants need to decode the puzzle to get the string
                        of words( words may be either in Hindi or English).After which the
                        participants have to think about the problem statement using the 4 words
                        decoded from the given cheats. Similarly, for the remaining two sets they have
                        to decode the words from the cheats and derive the problem statement. Top
                        50% participants from here move to next round!<br><br>
                        Round 2:<br>
                        In second round the participants need to quiz on kahoot which will be
                        based on famous company logos, complete the statement and various
                        questions on general knowledge. This will help to improve the overall
                        knowledge of the participants as well. This quiz will consist of 25
                        questions. Top 40% from this round will advance to the final round.
                        <br><br>
                        Round 3:<br>
                        In final round the participants will pick the cheats and will compete
                        one on one with the other team in technical quiz. There will be 5 sets
                        of question paper for the quiz. The team having higher points than the
                        other will proceed further. After which all the participants will be
                        given 3 set of problem statements which have to be executed by them.
                        They can solve maximum 3 problem statement in final round. The
                        team with maximum points wins! Bravo.
                        <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">1. There can be maximum 2 participants in each team.<br>
                            2. The participants must do the code only in C/C++.<br>
                            3. For first round -10 points will be deducted for every
                            unsuccessful attempt of decoding the problem statement.
                            The team will be given maximum 3 attempts to decode
                            the problem statement and after which they will be given
                            the problem statement. Likewise, for remaining cheats
                            also. The team can solve maximum 3 codes during this
                            round.<br>
                            4. The team will be awarded +50 points on successful
                            completion of every code during round 1.<br>
                            5. In Round 2 the points scored by every team in quiz will
                            be divided by 1000 so as to increase the simplicity.<br>

                            Ex if one team gathers 20000 points, they will be
                            reduced to 20.<br>
                            6. In Round 3 technical quiz there will be negative marking
                            too. Correct answer gets +2, while wrong answer will
                            lead to deduction of -1 point.<br>
                            7. For Round 3 coding competition, +50 points will be
                            awarded for correct execution of code. While no points
                            will be awarded in rest of the case.<br>
                            8. The team can solve maximum 3 codes during the final
                            round.<br>
                            9.In case of tie, the team who has competed the codes in
                            minimum duration will be taken into consideration. Again,
                            if there is a tie there will be bonus coding question among
                            the teams, and the one who completes first will be selected
                            as winner.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Contact</h5>
                        <h5 class="text-center">Jay Desai<br>9428061160</h5>
                        <h5 class="text-center">Vishvesh Khandpur<br>9662050859</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>
                        There will be only one round of 3 hours in which team members
                        (team of exact 2 members) have to solve the coding problems.  <br><br>
                        Round 2:<br>Also, they need to solve a given puzzle after every 30 minutes to
                        get the new password which will be required to unlock the
                        screen.<br><br>Round 3:<br>
                        If team will not able to solve puzzle in 15 minutes then 15
                        points will be deducted from their total points and then screen
                        will be unlocked for them to resume the coding.
                        <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">
                            1. It’s team event. Each team must have 2 members.<br>
                            2. Participants are allowed to use offline IDE’s such as
                            CodeBlocks and Dev C++ etc.<br>
                            3. If any team get detected in a plagiarism report then team
                            will be disqualified.<br>
                            4. Internet Access is allowed for this competition. But
                            directly copy pasting any code from the internet is
                            prohibited.<br>
                            5. If any team found tempering other application in the
                            college PC without prior permission then team will be
                            disqualified.<br>
                            6. In case of any disputes, Final decision will be of central
                            council and event coordinators.<br>
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Contact</h5>
                        <h5 class="text-center">Shaktisinh Jhala<br>9428361468</h5>
                        <h5 class="text-center">Rahulkumar Ka Patel<br>9687550479</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>An Aptitude test on paper: This test will be having MCQ
                        type questions which tests the aptitude of the
                        participants.<br><br>
                        Round 2:<br>Versus Round: In this round There will be 1v1
                        competitions for every participant. The participant will
                        pick a chit based on that their opponent will decided.
                        <br><br>
                        Round 3:<br>There will be a Tournament which will test instant brain
                        storming. <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">1. It is an indivual event.<br>
                            2. There’s no situation of tie as rankings are based on time
                            system.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Contact</h5>
                        <h5 class="text-center">Jaymeet M Mehta<br>9737488899</h5>
                        <h5 class="text-center">Mann R Mehta<br>7621093509</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>
                            Quiz round<br>
                            Online Quiz is taken on the platform called kahoot.com.<br>
                            The firsts 80% of the participants will be qualified for the
                            second round.<br>
                            Quiz contains 15-20 MCQs based question.<br>
                            <br><br>
                            Round 2:<br>
                            Fetch and solve<br>
                            Pairs of participants will be formed based on the result of the
                            previous round.<br>
                            Some technical clues will be hanging from the celling and 1
                            of the members have to fetch the clue and the other member
                            have to solve the clue<br>
                            Approx. 3-4 clues must be solved for qualifying in next
                            round.<br>
                            Top 6 pairs will be qualified for the next round.<br>
                            <br><br>
                            Round 3:<br>
                            Debugging and coding round.<br>
                            The clue for this round is provided in form of a PDF
                            document via google classroom or via email.<br>
                            The clue consists of debugging and coding problems.<br>
                            The result of the clue is a password for the next clue which is
                            in form of password protected PDF.<br>
                            <br><br>
                            Round 4:<br>
                            Suprise Round.
                            <br><br>                            
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">1. Firsts round is performed individually.<br>
                            2. Pair of two members will be formed after first round.<br>
                            3. No elimination in round 3.<br>
                            4. No electrical gadgets are–– allowed unless informed.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Contact</h5>
                        <h5 class="text-center">Anushree Shah<br>7990272963</h5>
                        <h5 class="text-center">Pranav<br>9426893981</h5>
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
                        <p class="text-center">Connections Match will ignite the adrenaline rush in your body. It focuses on how a person can adapt to any situation. This event will see how a person can win with qualities like team work, presence of mind and sound senses. </p>                
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>Technical quiz.<br><br>
                            Round 2:<br> 
                            Both the contestants will be provided different
                            problem statements. They have to code the solution for it. The
                            twist is after some time (decided by the coordinators), the
                            team members will swap positions and complete each other’s
                            code. Again, after the decided time, they will swap. The teams
                            who completes their codes in this way proceeds further.
                            <br><br>
                            Round 3:<br> 
                            The final contestants will be given problem
                            statements which they have to code with their screens off!
                            <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">1. Number of Participants will be 1 or 2 max.<br>
                            2. If you are participating solo then your team will be made
                            up there.<br>
                            3. Rules for elimination, what happens if there is situation
                            of TIE etc. maybe decided by the coordinators.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Contact</h5> -->
                        <!-- <h5 class="text-center">Name Number</h5> -->
                        <!-- <h5 class="text-center">name Number</h5> -->
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>
                            It would be an online quiz held in kahoot where
                            participants will have to identify the name of a company or a
                            famous personality through a one sentence description
                            provided to them. The top 30 students will proceed towards
                            next round.<br><br>
                            Round 2:<br>
                            Round is based on basic syntax of c and cpp.
                            Participants will we given a bit of code from which they have
                            to find maximum number of errors in given time. And 20
                            students who succeed in doing so will go to next round.
                            <br><br>
                            Round 3:<br>
                            In this round all the participants will be provided
                            with a set of different inputs and outputs, and they will have
                            to build the logic for the same. At last for checking their logic
                            we will provide second set of input for that particular
                            algorithm and the fastest teams who get correct output will
                            win.
                            <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">1. It&#39;s solo task, there will be no teams.<br>
                            2. Participants cannot talk to each other or seek each other&#39;s
                            help during the event.<br>
                            3. Access to internet is denied.<br>
                            4. In the situation of TIE participants will have to solve a
                            sudoku puzzle on phone and the one to solve it first will
                            be considered the winner.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Contact</h5>
                        <h5 class="text-center">Palak Amin<br>9428876364</h5>
                        <h5 class="text-center">Pranav<br>9426893981</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>Quiz<br><br>
                            Round 2:<br>
                            Verbal Buzzer Round<br><br>
                            Round 3:<br>Final Relay Round<br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">
                            This is a team event and the team size has been
                            restricted to 2 members per team.<br>The qualification percentage in all three rounds is
                            50% i.e., if 40 teams in-total participate for the event,
                            20 teams get qualified for the buzzer round and only
                            10 teams get qualified as finalists.<br>The first round is of 90 minutes involving two sets of
                            45 minutes Quiz time. It is to be conducted on a
                            reputed online platform.<br>In the 2

                            nd round: the Buzzer round, if and when the
                            team which answers first, answers wrong,
                            opportunities will galore for the team which pressed
                            the buzzer a little-too late and came-in second.<br>As for the final round: the Relay round, each team
                            member will be allowed to code for only 15 minutes.
                            After the allotted time gets over, next teammate will
                            be replacing current one and he/she should continue
                            the chain.<br>Each solution gets tested on test cases defined by us.<br>Top 3 teams from the final leaderboard gets deemed
                            eligible for intimidating prizes.<br>A tiebreaker round will be conducted in case of tie.
                            (or the code with minimum errors will get selected)<br>There will be a provision of break in-between all
                            three rounds.
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Contact</h5>
                        <h5 class="text-center">Nachiketa Buddha<br>8154912440</h5>
                        <h5 class="text-center">Mahek Master<br>7405295489</h5>
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
                        <p class="text-center">This event is the ultimate test of engineering excellence, team work, strategy and gaming. It is an event wherein manually controlled robots battle each other in the arena. The robot that immobilizes the opponent or knocks the opponent out is declared as the winner.</p>                
                    </div>
                </div>
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>  <br><br>Round 2:<br> <br><br>Round 3:<br> <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center"></p>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Contact</h5>
                        <h5 class="text-center">Swapnil Trivedi<br>8140950770</h5>
                        <h5 class="text-center">Krish Parwani<br>7990277791</h5>
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
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>  <br><br>Round 2:<br> <br><br>Round 3:<br> <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center"></p>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Contact</h5>
                        <h5 class="text-center">Zarna Desai<br>7016758241</h5>
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
                        <p class="text-center">A robot soccer based event in which the team has to design a wired/wireless robot which will compete on an arena specially designed for robotic soccer match and the team which goals maximum will play further. </p>                
                    </div>
                </div>
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>  <br><br>Round 2:<br> <br><br>Round 3:<br> <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center"></p>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Contact</h5>
                        <h5 class="text-center">Bhavik Parikh<br>7567255086</h5>
                        <h5 class="text-center">Blessy Manjaly<br>8780644089</h5>
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
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>  <br><br>Round 2:<br> <br><br>Round 3:<br> <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center"></p>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Contact</h5>
                        <h5 class="text-center">Romi Bohmra<br>9898322179</h5>
                        <h5 class="text-center">Saloni Lohiya<br>9427447856</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1: Find the ball<br>All the s tudents will be given the clues with the help of which they will have to find the ball of the same color written in clue.<br><br>
                            Round 2: Bite the bun<br> 
                            The hands of each students will be tied up by a rope and they will have to bite the bun hanging on the ceiling with their mouth. Further after reaching the final line, the students will have to cross the barrel round where they have to cross various barrels, hurdles and complete the task.
                            <br><br>
                            Round 3: Blind Money<br>
                            The participants will be in pairs and have to collect points/money. One of the
                            participants will be blind - folded and the other one will instruct the partner to 
                            follow the path and collect the objects. The team with the maximum points/money will be moving forward.
                            <br><br>
                            Round 4: Treasurehun<br>
                            The participants will be given clues and have to solve each of them to move 
                            forward. The teams which reaches early at the final destination will be moving 
                            forward.
                            <br><br>
                            Round 3: Warzon<br>
                            This will be individual round. All play for themselves. The butter paper ring will 
                            held on their heads and a water gun will be given to them. Each participant will 
                            have to protect their ring and have to destroy other participants ring. The one 
                            player with the ring on their head will be the winner.
                            <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">1) After all round participants will be eliminated.<br>
                        2) The decision of the jury will be final, no argument will be tolerated.<br>
                        3) No violence with jury or with other participants will be tolerated.<br>
                        4) If any participants is found doing any misbehave/mischief then he/she will be
                        disqualified at the same time.<br>
                        5) The participants should play fair game.<br>
                        6) Organization will not be responsible for any injuries ( First Aid kit will be available ).<br>
                        7) Game wise rules will be explained to you on the spot.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Contact</h5> -->
                        <!-- <h5 class="text-center">Name Number</h5> -->
                        <!-- <h5 class="text-center">name Number</h5> -->
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
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>  <br><br>Round 2:<br> <br><br>Round 3:<br> <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center"></p>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Contact</h5> -->
                        <!-- <h5 class="text-center">Name Number</h5> -->
                        <!-- <h5 class="text-center">name Number</h5> -->
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
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>Group Discussion<br><br>
                            Round 2:<br>Treasure Hunt<br><br>
                            Round 3:<br>Circuitry<br><br>
                        </p>
                    </div>
                </div> -->
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center"></p>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Contact</h5> -->
                        <!-- <h5 class="text-center">Name Number</h5> -->
                        <!-- <h5 class="text-center">name Number</h5> -->
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
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>  <br><br>Round 2:<br> <br><br>Round 3:<br> <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center"></p>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-12">
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <!-- <h5 class="text-center">Contact</h5> -->
                    <!-- <h5 class="text-center">Name Number</h5> -->
                    <!-- <h5 class="text-center">name Number</h5> -->
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
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>  <br><br>Round 2:<br> <br><br>Round 3:<br> <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center"></p>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Contact</h5> -->
                        <!-- <h5 class="text-center">Name Number</h5> -->
                        <!-- <h5 class="text-center">name Number</h5> -->
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
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>  <br><br>Round 2:<br> <br><br>Round 3:<br> <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center"></p>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Contact</h5> -->
                        <!-- <h5 class="text-center">Name Number</h5> -->
                        <!-- <h5 class="text-center">name Number</h5> -->
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
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>  <br><br>Round 2:<br> <br><br>Round 3:<br> <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center"></p>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Contact</h5> -->
                        <!-- <h5 class="text-center">Name Number</h5> -->
                        <!-- <h5 class="text-center">name Number</h5> -->
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
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>  <br><br>Round 2:<br> <br><br>Round 3:<br> <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center"></p>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Contact</h5> -->
                        <!-- <h5 class="text-center">Name Number</h5> -->
                        <!-- <h5 class="text-center">name Number</h5> -->
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
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">
                            Round 1:<br>  <br><br>
                            Round 2:<br> <br><br>
                            Round 3:<br> <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center"></p>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Contact</h5> -->
                        <!-- <h5 class="text-center">Name Number</h5> -->
                        <!-- <h5 class="text-center">name Number</h5> -->
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
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>  <br><br>Round 2:<br> <br><br>Round 3:<br> <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center"></p>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Contact</h5> -->
                        <!-- <h5 class="text-center">Name Number</h5> -->
                        <!-- <h5 class="text-center">name Number</h5> -->
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
                        <p class="text-center">As you know the human race has evolved so much that they are travelling into space with the help of ROCKETS. So here’s “SPACE X” to test your skills and to challenge your brilliance.</p>               
                    </div>
                </div>
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>  <br><br>Round 2:<br> <br><br>Round 3:<br> <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center"></p>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Registration Fees</h5> -->
                        <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Contact</h5> -->
                        <!-- <h5 class="text-center">Name Number</h5> -->
                        <!-- <h5 class="text-center">name Number</h5> -->
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
                        <p class="text-center">An event of tricycle making which involves racing with rivals. The team with higher points (total) and lesser time will win.</p>                
                    </div>
                </div>
                <!-- <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>  <br><br>Round 2:<br> <br><br>Round 3:<br> <br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Rules</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center"></p>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                         <!-- <h5 class="text-center">Registration Fees</h5> -->
                         <!-- <h5 class="text-center">Rs. </h5> -->
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- <h5 class="text-center">Contact</h5> -->
                        <!-- <h5 class="text-center">Name Number</h5> -->
                        <!-- <h5 class="text-center">name Number</h5> -->
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