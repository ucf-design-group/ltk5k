<?php include( 'functions.php'); get_header(); ?>

<body>

    <?php // Includes navigation and header banner
    include_once( "partials/header.php" ); ?>

    <?php // Include video under navagation
    include_once( 'partials/video.php' ); ?>

   <!--  <?php // Include registration form
    //include_once( 'partials/register.php' ); ?> -->

    <section id="about"class="header-caption" style="background-color: rgb(122, 218, 250)">
        <h4>Get your run on! Join us for the first ever Light The Knight 5k!</h4>
    </section>

    <section class="content">
        <article class='info'>
            <h3>General Information</h3>
            <h4>About</h4>
            <p>Light the Knight 5K is a run/walk with a fun and exciting glow experience. The run is not timed and is meant to be enjoyed by runners as they go through different zones of color and music. Get ready to run/walk through the UCF campus glowing.</p>
            <br>
            <h4>What to wear</h4>
            <p>We don't only want you to just enjoy the 5K but run it in style. Let your creativity flow and dress the part to match the event! We encourage you to give it your all but please do so comfortably as you are doing a 5K after all. If you are participating in the 5K, please wear closed-toe shoes.</p>
            <br>
            <h4>Spectators</h4>
            <p>Spectators are welcome to watch at the start line on Memory Mall and as runners finish the run/walk. All spectators are also welcome to attend the after party and enjoy the festivities put on by Knights of the Turntables and Late Knights.</p>
       
        </article>

        <article id= "location" class="col-wrapper">
            <div class="col-md-6">
                <h3>When and Where?</h3>
                <h4>Memory Mall</h4>
                <p>The race will begin outside of the Career Services/Exponential Learning building on Memory Mall. Here is where you will be able to sign in. Pick up your free t-shirt after the race!</p>
                <br/>
                <h4>Time & Details</h4>
                <p>Date: <span>4/3/15</span></p>
                <p>Check-in: <span>7PM</span></p>
                <p>Race Time: <span>8PM</span></p>
            </div>
            <div class="col-md-6">
                <h3>Map</h3>
                <div class="map"><img src="img/map.png"></div>
            </div>
        </article>

        <article  id='djparty' class='info'>
            <h3>After Party!</h3>
            <p>The party doesn't stop once you finish the 5K! After the run there will be a DJ battle competition hosted by Knights of the Turntables. Plan to stick around to choose the best DJ of the Knight as well enjoy some snacks and activities to keep the party going. Don't forget to take a picture to remember the occasion!
                <div class="btn-fill">
                    <a class="register button btn-fill" onclick="$('#djparty').animatescroll({scrollSpeed:1250,easing:'easeInOutSine'});">Learn More</a>
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
                <a href="http://osi.ucf.edu/ltk5k/register" class="button no-fill runner">Register Here<i class="fa fa-arrow-right"></i></a>
            </div>
        </article>
    </section>


    <section id="about" class="header-caption" style="background-color: rgba(122, 218, 250, 1)">
        <h4>Become part of the race! Register as a runner or volunteer today!</h4>
    </section>

  
<?php get_footer(); ?>