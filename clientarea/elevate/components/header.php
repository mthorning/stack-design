<?php include "modules/inc.title.php"; ?>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div id="navWrapper">

    <!--        temporary indicator-->
        <div id="screenIndicator"></div>
        
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><a href="index.php"><img src="img/png/navbarLogo.png" id="navbarLogo"></a></a>
            <button id="navToggleButton" type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
        </div>
        <div id="navbarCollapse" class="navbar-collapse collapse">
            <ul id="dropdownNavMenu" class="nav navbar-nav pull-right">
                <li id="home"><a href="index.php"><span style="font-size: 0.85em;" class="glyphicon glyphicon-home"></span> Home</a></li>
                <li id="about" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">About<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="about.aboutMe.php">About Me</a></li>
                        <li><a href="about.aboutElevate.php">About Elevate</a></li>
                        <li><a href="#">CHEK philosophy</a></li>
                        <li><a href="about.etlSmart.php">Eat Train Live Smart</a></li>
                    </ul>
                </li>
                <li id="blog" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog<span class="caret"></span></a>
                    <ul class="dropdown-menu" id="navBlog">
                        
                    </ul>
                </li>
                <li id="services"><a href="services.php">Services</a></li>
<!--
                <li id="testimonials"><a href="testimonials.php">Testimonials</a></li>
                <li id="FAQ"><a href="#">FAQ</a></li>
-->
                <li id="contactUs"><a href="contactUs.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<script type="text/javascript" src="js/header.js"></script>