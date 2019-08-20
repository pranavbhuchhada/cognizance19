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
                        <h5 class="text-center">Contact</h5>
                        <h5 class="text-center">Nirmit<br>9913555958</h5>
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
                        <h5 class="text-center">Contact</h5>
                        <h5 class="text-center">Darsh<br>9099520770</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>
                        	One on one matches will be held, winners will move to the next stage and the losers will be eliminated.<br><br>
                        	Round 2:<br>
                        	Time and point counting will be declared at the time of the match(it varies with each and every phase).
                        	<br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Machine Specifications</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">1.	The robot can have maximum dimensions of Length: 75 cm, Breadth: 75 cm, Height: 100 cm.<br>
                        	2.	The machine should not exceed 60 kg and should be more than 
							30 kg of weight including the weight of pneumatic source/tank. All pneumatic tanks/source and batteries should be on board. Weight or remove controller will not be counted.<br>
							3.	The robot can be controlled by wired/wireless.  If the robot is controlled wirelessly the robot must have a frequency remote control circuit which can avoid frequency interference with other teams.(Recommended to have 2 frequencies to avoid interference) .<br>
							4.	If the robot is wired then the wire should remain slack under all circumstances during the competition. All the wires coming out of the robot should be stacked as a single unit. The wires should be properly insulated.  Loose connections or improper wiring may lead to direct disqualification even before the event. The length of wire must be able to cover the full arena.<br>
							5.	Voltage: Working Voltage must not exceed  24V.<br>

                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Team Specification</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">
                        	1.	A team may consist of a maximum of 6 participants, all from the same institute or may be from different institute.<br>
							2.	The name of the team representative must be given at the time of registration and He/she has to report to the co-ordinators before the competition starts.<br>
							3.	Every team must have a name which must be unique. Cognizance 2019 reserves the right to reject any Team whose name it deems inappropriate, offensive of conflicting. Organizers must be notified during if a Team’s name has been changed.<br>
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
                        	1.	Any team that is not ready at the time specified will be disqualified from the competition immediately.<br>
						2.	The machine would be checked for its safety before the competition and would be discarded if found unsafe for other participants and spectators.<br>
						3.	The organizers reserve the rights to change any or all of the above rules as they deem fit. Change in rules, if any will be highlighted on the website and notified to the registered teams.<br>
						4.	Any team accidently or try to damage the wiring system of opponent’s robot,will be disqualified.<br>
						5.	Intentional damage to the arena will lead to disqualification.<br>
						6.	Violation of any the below rules will lead to disqualification. <br>
						7.	Jury decision would be final and unvary<br>

                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Field Specifications</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">
                        	1.	The field will be a flat,square and rigid platform without any obstacle. <br>
                        	2.	The dimensions of which will be revealed on the spot.
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Criteria for Triumph</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">
                        	1.	A robot is declared victorious if its opponent is immobilized or out of the arena.<br>
							2.	A robot will be declared immobile if it cannot display linear motion in a timed period of 10 seconds. A bot with one side of its drivetrain disabled will not be counted out if it can demonstrate some degree of controlled movement. <br>
							3.	If both robots survive the Two minutes at that point, the robot with the higher  
							points wins.<br>
							4.	The winner moves on, the loser is eliminated from the tournament.

                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">SAFETY RULES</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">
                        	1.	Compliance with all event rules is mandatory. It is expected that competitors stay within the rules and procedures of their own accord and do not require constant policing.<br>
							2.	If you have a robot or weapon design that does not fit within the categories set forth in these rules or is in some way ambiguous or borderline, please contact the event.

                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Registration Fees</h5>
                        <h5 class="text-center">Rs. 700</h5>
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
				<div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>
                        	The participating robots are allowed to pass through a series of all - terrain tracks. 
                        	The robot which completes the track within minimum time is taken into consideration for next round.<br><br>
                        	Round 2:<br>
                        	The Round 2 will be a knockout round with challenging track which will be disclosed on-spot.
                        	<br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Robot Specifications</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">1. The robot should be manually controlled, using a remote device and can only be operated by a team member.<br>
                        	2. The robot should be manually controlled, using a remote device and can only be operated by a team member<br>
                        	3. External controlling device and external power supplies will not be included in the size constraint.<br>
                        	4. The robot can be powered with maximum 24 V battery.<br>
                        	5. For wireless communication, it is recommended to keep DUAL FREQUENCY for communication, so that there is no case of electromagnetic interference with another team’s wireless communication. The coordinators shouldn’t be held responsible for any kind of electromagnetic interference in wireless communication.<br>
                        	6. The robots have to be self-made by the team. Ready-made kits and LEGO kits should not be used to construct the robot.<br>
                        	7. The robot should not weigh more the 5kg.<br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Team Specification</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">
                        	<br>1. Any team can participate in Astromech-Aisle, Cognizance 2019. A team may consist of maximum of 4 participants. These participants can be from same or different institutes.
							<br>2. Team Name: Every team must have a name which must be unique. Event co-ordinators reserves the right to change names of any Team whose name it seems inappropriate, offensive or conflicting. Organizers must be notified during if a Team's name has been changed.
							<br>3. Team Representative: Each team must specify their Team Representative (Leader) at the time of registration. All important communications between co-ordinator and the registered teams will be done through their Team Representative. The Team representatives must submit valid contact details (phone no., email ID etc.) at the time of registration.
							<br>(NOTE: During any kind of conversation, registration, communication, mails or submissions the team must identify themselves by their Team ID only provided at the time of registration and not by your team name. Please do not use your team name as your identification in any kind of communication with us. Follow this rule very strictly.)
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
                        <p class = "text-center">1. Teams have to be ready with their robots at the time of event.
							<br>2. The robot will start from a specified point on the arena and will have to traverse through the entire track consisting of various obstacles with varying surface.
							<br>3. The race will start at the moment the event coordinator gives a green signal.The time keeper will turn on the timer at the same moment.
							<br>4. A team can take a maximum of 1 TIMEOUT for not more than 2 min.
							<br>4. The teams cannot make any major mechanical, technical changes and battery changes to the robot within timeout.
							<br>6. A team can take 3 HAND TOUCHES. After the HAND TOUCH, the robot will be placed at the last checkpoint.
							<br>7. One team member is allowed to control the robot while the other team member is allowed inside the arena to assist the movement of the robot by handling the wires and power supply units.
							<br>8. Skipping a hurdle will incure a penalty in timing.
							<br>9. Unethical behavior could lead to disqualification. Faculty & coordinators have all the rights to take final decision for any matter during the event.

                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Certificate Policy</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">
                        	1. Certificate of Excellence will be given to the top 2 teams.
							<br>2. Certificates of Participation will be given to all the teams who runs the robot successfully in working condition in first round of the competition.
							<br>3. The teams which get disqualified due to disobeying any of the competition rules will not be considered for the certificate.
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Registration Fees</h5>
                        <h5 class="text-center">Rs. 300</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>
                        	In this round, the robot will race against time for their chance to go ahead in the game by passing the hurdles placed along the track till the arena. The faster the better. The team with lesser time will be promoted to next level.
                        	<br><br>
                        	Round 2:<br> 
                        	After the warm up session, let's get to the GAME. This round will definitely test your speed but also your power. It's pretty simple, beat your opponent by scoring 3 goals before they can and get to the final round.
                        	<br><br>
                        	Round 3:<br>
                        	This is the showdown. The best of the best will compete to get the reward. Same rules but difficulty level on the top. Beat your opponent to be the Ultimate Champion.
                        	<br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Robot Specifications</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">1.	The robot should be manually controlled using a remote controller, operated by a team member.
						<br>2.	The Robot dimensions should not exceed 300*200*200mm (l*b*h) at all times.( External controlling devices and power supplies will not be considered in the size constraint).
						<br>3.	The robot can be prepared with maximum 24 Volts of battery (Not more than that).
						<br>4.	The robot should only have V-Shaped (steady) plates for playing soccer (Grippers are not allowed).
						<br>5.	Weight of robot must be less than 5kgs. (Including V-Shaped plates)
						<br>6.	For Wireless communication, it is recommended to keep more than one frequencies for communication so that there is no case of electromagnetic interference with another team's wireless communication.
						<br>7.	Every team has to build their own robot by themselves, i.e. No robot constructed by ready made kits or even LEGO kits is allowed.
						<br>8.	The coordinators would not be held responsible for any kind of electromagnetic interference in wireless communication. (For wireless robot)
						<br>9.	CZ'19 will not be held responsible for any type of damage to the robot.<br>
						Note: No extra weapons or rotors are allowed. The design of the robot should be made to play soccer only.
						</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Team Specifications</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">
                        	1.	A team can contain a maximum of 4 members. (Participants of same or different institutions can also collaborate).
							<br>2.	Every team must have a unique name to it.
							<br>3.	All the important communications between the teams and Congnizance'19 will be done through their team representative.
							<br>4.	Thus, the team representative must submit their valid contact details (Phone number, email ID, etc.) at the time of registration.
							<br>5.	CZ'19 reserves all the rights to change names of any team whose name seems to be inappropriate, offensive or conflicting.
                        </p>
                    </div>
                </div>                
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Registration Fees</h5>
                        <h5 class="text-center">Rs. 300</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1: QUALIFIER BATTLE<br>  
                        	In this round general knowledge questions would be asked and points would be awarded if answered correctly. If not answered correctly the question would be passed to the next team. Later, teams having minimum points would be eliminated.
                        	<br><br>
                        	Round 2: Take your Pick<br>
                        	In this round teams would be provided with some topics to choose FROM (RELATED TO EC) and questions would be asked from that topic itself. Teams answering max questions would be eligible for the next round.
                        	<br><br>
                        	Round 3: Connect It<br>
                        	Here, we would give you pictorial clues which you have to search in the department and we would ask for connect. If you connect all the pictures correctly you would end up with a meaningful word or sentence (related to EC)
                        	<br><br>
                        	Round 4: Buzzer Round<br>
                        	Technical questions would be asked by the quizmaster and the teams will get a chance to answer according to their buzzer sounds. Team answering maximum questions would win this round.
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
                        	1.	Maximum 2 people in one team.<br>
							2.	Team members cannot be changed once registered.<br>
							3.	No extension time limit will be provided.<br>
							4.	Decisions taken by the judges would be the final ones.
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Registration Fees</h5>
                        <h5 class="text-center">Rs. 150</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>
                        	The participating robots are allowed to pass through a series of all - terrain tracks. 
                        	The robot which completes the track within minimum time is taken into consideration for next round.<br><br>
                        	Round 2:<br>
                        	The Round 2 will be a knockout round with challenging track which will be disclosed on-spot.
                        	<br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Robot Specifications</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">1. The robot should be manually controlled, using a remote device and can only be operated by a team member.<br>
                        	2. The robot should be manually controlled, using a remote device and can only be operated by a team member<br>
                        	3. External controlling device and external power supplies will not be included in the size constraint.<br>
                        	4. The robot can be powered with maximum 24 V battery.<br>
                        	5. For wireless communication, it is recommended to keep DUAL FREQUENCY for communication, so that there is no case of electromagnetic interference with another team’s wireless communication. The coordinators shouldn’t be held responsible for any kind of electromagnetic interference in wireless communication.<br>
                        	6. The robots have to be self-made by the team. Ready-made kits and LEGO kits should not be used to construct the robot.<br>
                        	7. The robot should not weigh more the 5kg.<br>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Team Specification</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">
                        	<br>1. Any team can participate in Astromech-Aisle, Cognizance 2019. A team may consist of maximum of 4 participants. These participants can be from same or different institutes.
							<br>2. Team Name: Every team must have a name which must be unique. Event co-ordinators reserves the right to change names of any Team whose name it seems inappropriate, offensive or conflicting. Organizers must be notified during if a Team's name has been changed.
							<br>3. Team Representative: Each team must specify their Team Representative (Leader) at the time of registration. All important communications between co-ordinator and the registered teams will be done through their Team Representative. The Team representatives must submit valid contact details (phone no., email ID etc.) at the time of registration.
							<br>(NOTE: During any kind of conversation, registration, communication, mails or submissions the team must identify themselves by their Team ID only provided at the time of registration and not by your team name. Please do not use your team name as your identification in any kind of communication with us. Follow this rule very strictly.)
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
                        <p class = "text-center">1. Teams have to be ready with their robots at the time of event.
							<br>2. The robot will start from a specified point on the arena and will have to traverse through the entire track consisting of various obstacles with varying surface.
							<br>3. The race will start at the moment the event coordinator gives a green signal.The time keeper will turn on the timer at the same moment.
							<br>4. A team can take a maximum of 1 TIMEOUT for not more than 2 min.
							<br>4. The teams cannot make any major mechanical, technical changes and battery changes to the robot within timeout.
							<br>6. A team can take 3 HAND TOUCHES. After the HAND TOUCH, the robot will be placed at the last checkpoint.
							<br>7. One team member is allowed to control the robot while the other team member is allowed inside the arena to assist the movement of the robot by handling the wires and power supply units.
							<br>8. Skipping a hurdle will incure a penalty in timing.
							<br>9. Unethical behavior could lead to disqualification. Faculty & coordinators have all the rights to take final decision for any matter during the event.

                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="text-center">Certificate Policy</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-12">
                        <p class = "text-center">
                        	1. Certificate of Excellence will be given to the top 2 teams.
							<br>2. Certificates of Participation will be given to all the teams who runs the robot successfully in working condition in first round of the competition.
							<br>3. The teams which get disqualified due to disobeying any of the competition rules will not be considered for the certificate.
                        </p>
                    </div>
                </div>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>
                        	There will be stock of material which are related to civil engineering like cement, aggregate, sand, etc. one participate have to identify the material by feeling of touch and another participate will have to collect material of given values.<br><br>
                        	Round 2:<br>
                        	Second round will be general crossword game of material & equipment that related to civil engineering.
                        	<br><br>
                        	Round 3:<br>
                        	The third round will be on the spot problem solving related to civil engineering field.
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
                        	1.	Only pair of two students are allowed as one team.<br>
							2.	For each round the points are decided accordingly.<br>
							3.	If there is a situation of TIE, total scores will decide the winner.<br>
							4.	Use of internet is not allowed for round 1 & 2.<br>
							5.	Participants are allowed to use the internet only when said by coordinates in the final round.<br>
							6.	In case of any misbehave or cheating found by any supportive person the team will be disqualified.<br>
							7.	students are not allowed to use any of the material other than given by event coordinator.<br>
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
                        <h5 class="text-center">Devang Rathod<br>9712825512</h5>
                        <h5 class="text-center">Nirali Ranipa<br>8160303901</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>
							In the first round one video will be play and based on the video students have to answer the question of the quiz.
                        	<br><br>
                        	Round 2:<br>
                        	The students will be provided with a drawing sheet and they will have to plan a city on their own an ideal city with road connections and public buildings included on the bases of the plan elimination will be done.
                        	<br><br>
                        	Round 3:<br>
                        	Virtual money will be provided to buy different types of building structure The teams have to design and make the model of a town and the winner will be decided based on the accuracy of town planning. Some requirements of the town will be given by cheats.
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
                        	1.	Minimum three students can participate and maximum four.<br>
							2.	15 teams will be promoted to round 2<br>
							3.	10 teams will be promoted to Round 3<br>
							4.	Judge decision will be final<br>
							5.	If TIE situation is there then both the teams are allow to proceed for the further round.<br>
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
                        <h5 class="text-center">Het patel<br>8238366678</h5>
                        <h5 class="text-center">Suryadeep Chauhan<br>9909440812</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>
							The quiz conducted based on an online application call KAHOOT quiz which would be either technical or general. There will be an elimination based on the quiz results and the teams will be selected for the next round by results of quiz.
                        	<br><br>
                        	Round 2:<br>
                        	In the second round they will be playing a game with time limit where a random technical topic will be assigned to them by the spinning wheel or dart game.
                        	<br><br>
                        	Round 3:<br>
                        	This round consists of technical treasure hunt with the help of cards.surprise event elements will be disclosed at the time of event.<br>(all the participants have to play a game which is based on cards in which you have to collect your cards whose topic is given to you and set them in a proper order.)
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
                        	1.	minimum two students can participate and maximum three.<br>
							2.	If TIE situation is there then both the teams are allow to proceed for the further round.<br>
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
                        <h5 class="text-center">Jaydeep Makwana<br>9426500725</h5>
                        <h5 class="text-center">Rani Thakkar<br>7698248994</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>Dimension analysis.<br><br>
                        	Round 2:<br>Load will be applied on the structure and the corresponding failure on the structure will be tested.<br>
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
                        	1.	Min. 1, Max.3 students in one team.<br>
							2.	Dimensions: Reference drawing will be provided to all the participants after registration.<br>
							3.	Rules for elimination: wrong dimensions, failure of structure on application of load.<br>
							4.	Judge's decision will be considered final.<br>
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
                        <h5 class="text-center">Riddhi Vyas<br>7016071767</h5>
                        <h5 class="text-center">Rutvik Chopda<br>9712102401</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">
                            Round 1: QUALIFIER BATTLE<br>First round will be a written one which contains 50 questions about general terms and
							there will be a options. In this round time provided to 55 minutes.
							<br>And bottom last 2 or 3 team will be eliminated from this event in the end of 1st round<br><br>
                            Round 2: RAPID FIRE<br>Second round will be a 25 questions about up to date technologies in automation. The
							best perform team will be promoted for next round.<br><br>
                            Round 3: SURPRISE ROUND<br>Third round will be a surprised round and based on costing of automobile. In this round
							you have to bring one laptop per team and internet is allowed for last round but we will
							not provide internet.<br><br>
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
                        	1) Team event, 2 member per team.<br>
							2) Team mate can not be changed for further rounds.<br>
							3) Judge decision will be final.<br>
							4) 1 st and 2 nd round no use the mobile phones. Only 3 rd round use mobile phone or laptop.<br>
							5) No extension time will be provided.<br>
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Registration Fees</h5>
                        <h5 class="text-center">Rs. 200 per team</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Contact</h5>
                        <h5 class="text-center">Omkar<br>8160340816/9558761345</h5>
                        <h5 class="text-center">Yash<br>7226864586</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>  
							Basic Aptitude test round for 20 min from which shortlisted participants will qualify for the next round.<br><br>
							Round 2:<br>
							On the basis of aptitude test, participants are sequenced to round 2 which is a solidworks
							software round. In which, participant will get a design to draft. In this round, faster participants will be
							qualify for next round.
							<br><br>
							Round 3:<br>
							This round will be the final round. Only 6 participants will be qualified for this round. This war
							will include assembly. Different 2D drawings will be provided and from that participants will make a 3D
							assembly. Top 3 participants will be declared as winner.
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
                        	1) No team participation is allowed.<br>
							2) Students are allowed to use their laptops to design the model.
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Registration Fees</h5>
                        <h5 class="text-center">Rs. 250</h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>  
                        	The first round will be the eliminator round where you have to explain
							your rocket design and innovative ideas you have used in it.<br><br>
							Round 2:<br>
							In this round you will be given a height limit above which you rocket
							should travel, and the teams who will pass this test will move forward to
							the next round.<br><br>
							Round 3:<br>There will be best of three, so every team will get a chance to launch
							their rocket thrice and the flight time will be noted and the best among
							the three will be taken into consideration. The teams conceding the
							highest flight time will be declared the winner.<br><br>
							<i>How flight time will be calculated?<br>
							As the rocket is launched the stopwatch will start and as soon as the
							rocket will touch the ground, time will be stopped and the duration
							obtained will be the flight time.</i><br>
							Round 4:<br>In the final round the participants will be given a round target through
							which they have to pass their rocket.
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
                        	1) The rocket can be pneumatic or hydraulic<br>
							2) Dimensions: (Max height 2 feet, Max width 16 cm)<br>
							3) The decision given by the respective event coordinator will be
							the final decision.
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <h5 class="text-center">Registration Fees</h5>
                        <h5 class="text-center">Rs. 150 </h5>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>Assembly Round ( 50 points /-)<br><br>
                        	Round 2:<br>Cost estimation(on paper) and oral presentation (50 points /-)<br><br>
                        	Round 3:<br>Endurance round and breaking test.<br><br>
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
                        <p class = "text-center">1. Tricycle frame material should be MS (Mild steel ) /GI (Galvanized iron).<br>
							2. Tricycle dimensions should be in 3*5 feet.<br>
							3. Tire dimension : 20 inch <br>
							4. Pipe thickness should be in 1.5 to 3 mm(for fame purpose)<br>
							5. Pipe c/s shape should be square / circular .<br>
							6. Glass material is strictly prohibited.<br>
							7. Tricycle made from scrap material is preferable .<br>
							8. Break should be there (any kind of break).<br>
							9. Max 10 members in one group.<br>
						</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class ="text-center">Rounds wise rules</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Round 1:<br>team has to assemble whole tricycle in 30 mins. Team whos
							assemble time is less will win the round. WHOLE TEAM SHOULD BE THERE AT
							THE TIME OF ASSEMBLY<br><br>
                        	Round 2:<br>Team has to prepare the whole oral presentation upon the brief
							explanation of tricycle making, cost estimation should be in hard copy.
							<br>Maximum cost of tricycle should not exceed than 5000/- RS. (Preferable)<br><br>
                        	Round 3:<br>
                        	1. Drive ur tricycle in gang way(track).<br>
							  2. Track will have obstacles, ur tricycle should pass all the obstacles successfully.<br>
							  3. Stopping the tricycle with you’re legs(or any kind of body part) is strictly
							prohibited.<br>
							  4. In break test you’re tricycle should stop in between to mention points.<br>
							  5. Additional push to the tricycle is not allowed (if this will happen team will be
							disqualified).<br>
                        	<br><br>
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                         <h5 class="text-center">Registration Fees</h5>
                         <h5 class="text-center">Rs. 3000 per team</h5>
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