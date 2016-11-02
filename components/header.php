<?php include 'modules/inc.title.php'; ?>
<nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
    <!--default for white or inverse for black-->
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="home.php"><h4>Stack-<br />Design</h4></a>
            <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                <!--bootstrap has some built-in functionality with data-target referring to the id of the containing div and data-toggle defining the function of the button as in JQuery-->
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
        </div>
        <div id="navbarCollapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li id="home"><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li id="about"><a href="about.php">About</a></li>
                <li><a id="navbarContactBtn" class="enquireBtn">Contact</a></li>
                <li><a id="clientArea" href="clientLogin.php">Client Area</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="containerForHiding">
    <div id="contactPopUpContainer" class="container-fluid">
        <div id="contactPopUpFormContainer">
            <div id="closeContainer">
                <span id="formClose" class="enquireBtn glyphicon glyphicon-remove"></span>
            </div>
            <h3>How can I help?</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Enter your name.">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email address">
                    <label for="comment">Enquiry:</label>
                    <textarea class="form-control" name="comment" id="comment" rows="5" placeholder="Enter your enquiry."></textarea>
                    <input type="submit" class="btn btn-custom">
                </div>
            </form>
        </div>
    </div>
</section>