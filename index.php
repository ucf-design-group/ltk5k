<?php include( 'functions.php'); get_header(); ?>

<body>

    <?php // Includes navigation and header banner
    include_once( "partials/header.php" ); ?>

    <?php // Include video under navagation
    include_once( 'partials/video.php' ); ?>

   <!--  <?php // Include registration form
    //include_once( 'partials/register.php' ); ?> -->

    <section id="about" class="header-caption" style="background-color: rgb(122, 218, 250)">
        <h4>Get your run on! Join us for the first ever Light The Knight 5k!</h4>
    </section>

    <section class="content">
        <article class='info'>
            <h3>General Information</h3>
            <p>Light the Knight 5K is a run/walk with a fun and exciting glow experience. The run is not timed and is meant to be enjoyed by runners as they go through different zones of color and music. Get ready to run/walk through the UCF campus glowing.</p>
        </article>

        <article class="col-wrapper">
            <div class="col-md-6">
                <h3>When and Where?</h3>
                <p>Date: <span>3/17/15</span></p>
                <p>Show up: <span>5PM - 6:45PM</span></p>
                <p>Race Duration: <span>7PM - 11PM</span></p>
                <p>Your peers, intuition and agility are all that can help you now. Make it to the safe zone with at least one flag intact and you have survived - if not, you'll be missed.</p>
            </div>
            <div class="col-md-6">
                <h3>Map</h3>
                <div class="map"></div>
            </div>
        </article>
    </section>

    
    <section id="register" class="header-caption" style="background-color: rgb(240, 78, 236)">
        <h4>RUNNING. GLOWSTICKS. FUN. WHAT MORE COULD YOU WANT?</h4>
    </section>


    <section class="no-padding" data-stellar-background-ratio=".25" style="background-image: url(img/background.jpg); ">
        <article style="background-color:none;" class="no-padding"><!-- rgb(237, 237, 237) -->
            <h3 style="padding-top:2em; color:white">Register Today!</h2>
            <div class="registration-button-wrapper">
<!--                 <a href="http://osi.ucf.edu/ltk5k/runners" class="button no-fill runner">Runner Registration<i class="fa fa-arrow-right"></i></a>
                <a href="http://osi.ucf.edu/ltk5k/volunteers" class="button no-fill volunteer">Volunteer Registration<i class="fa fa-arrow-right"></i></a> -->
                <a href="https://docs.google.com/forms/d/1wdscNuwYqamVPCqdsGCCqxWtXGljgK1T-5Ops9U3LYY/viewform" class="button no-fill runner">Runner Registration<i class="fa fa-arrow-right"></i></a>
                <a href="https://docs.google.com/forms/d/1wdscNuwYqamVPCqdsGCCqxWtXGljgK1T-5Ops9U3LYY/viewform" class="button no-fill volunteer">Volunteer Registration<i class="fa fa-arrow-right"></i></a>
            </div>
        </article>
    </section>


<!--     <section class="no-padding">
        <article style="background-color:rgb(237, 237, 237);" class="no-padding">
            <div class="half-wrap">
                <h5 style="padding-top:2em;">Register!</h4>
                <ul>
                    <li>Start Line: Memory Mall</li>
                    <li>Finish Line: Memory Mall</li>
                </ul>
                <p>What to bring: The clothes on your body and a UCF ID. The UCF Campus Activities Board is not responsible for the loss of any items. Please leave precious items at home, or in your car, and assume all responsibility.</p>
            </div>
            <div class="half-wrap">
            </div>
        </article>
    </section> -->
<!-- 
    <section class="content">
        <article class='location'>
            <h3>Location</h3>
            <ul>
                <li>Start Line: Memory Mall</li>
                <li>Finish Line: Memory Mall</li>
            </ul>
            <p>What to bring: The clothes on your body and a UCF ID. The UCF Campus Activities Board is not responsible for the loss of any items. Please leave precious items at home, or in your car, and assume all responsibility.</p>

        </article> 
        <article class='packet'>
            <h3>Packet Pickup</h3>
            <p>Packet Distribution, including your bib number and information for the race, will be available on Monday (11/10) and Tuesday (11/11) from 5:00pm - 8:00pm in the Arena Lobby.</p>
        </article>
        <article class='party'>
            <h3>Survivor Party!</h3>
            <p>What better way to celebrate your survival - or demise - than with a giant party? DJs, snacks, and activities will be available! Take pictures to remember the occasion and make sure to strategize with the other survivors for the next time zombies overrun UCF.</p>
        </article>
        <article class='info'>
            <h3>Spectators</h3>
            <p>Spectators are welcome to watch at the start line or on Memory Mall (as the runners make their final attempt to safety). All spectators are welcome to attend the survivor party with their brave friends (or mourn the ones that they lost) at the Arena after the race!</p>
        </article>
        <article class='other'>
            <p>Please email <a href="mailto:cabevent@ucf.edu">cabevent@ucf.edu</a> or call <a href="tel:4078233294">(407) 823-3294</a> for any questions!</p>
        </article>
    </section> -->

    <section id="about" class="header-caption" style="background-color: rgba(122, 218, 250, 1)">
        <h4>Become part of the race! Register as a runner or volunteer today!</h4>
    </section>

  
<?php get_footer(); ?>