<?php
$_SESSION['currentPage'] = $_SERVER['PHP_SELF'];

    $enquiryMade = false;
    $success = false;

//if enquiry has been made
if (isset($_SESSION['enquiryMade'])) {
    $enquiryMade = 1;
    $success = $_SESSION['success'];

    //if enquiry was not a success
    if (!$success) {
        //set errors to variables
        $topMessage = $_SESSION['errors'];

        //save current user inputs
        $formName = $_SESSION['formName'];
        $formEmail = $_SESSION['formEmail'];
        $formSubject = $_SESSION['formSubject'];
        $formMessage = $_SESSION['formMessage'];
    }
    //remove errors from session variable
    unset($_SESSION['errors'], $_SESSION['formName'], $_SESSION['formEmail']);
    unset($_SESSION['formSubject'], $_SESSION['formMessage'], $_SESSION['success'], $_SESSION['enquiryMade']);
} else {
    //if no enquiry has been made
    $topMessage = '<h3>How can I help?</h3>';

    //reset variables
    $formName = $formEmail = $formSubject = $formMessage = '';
}

?>

<script>
    $(function() {
        var enquiryMade = "<?php echo $enquiryMade; ?>";
        var success = "<?php echo $success; ?>";
        if (enquiryMade) {
            $("#contactContainer").show();
            if (success) {
                $('#successMessage').show();
                <?php $success = 0; ?>
            }
        }
    });
   
</script>

<nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
    <!--default for white or inverse for black-->
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><h4>Stack-<br />Design</h4></a>
            <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                <!--bootstrap has some built-in functionality with data-target referring to the id of the 
                containing div and data-toggle defining the function of the button as in JQuery-->
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
        </div>
        <div id="navbarCollapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li id="home"><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li id="about"><a href="about.php">About</a></li>
                <li id="userPage"><a href="userPage.php">Client Area</a></li>
                <li id="navbarContactBtn"><a href="#contactContainer">Contact</a></li>
            </ul>
            <div id="logOutBtnDiv" class="pull-right">
                <?php
                if (isset($_SESSION['username'])) {
                        echo '
                            <p>Hello ' . $_SESSION['firstname'] . '. <a href="#" id="logOut">Log Out</a></p>';
                }
                ?>
            </div>
        </div>
    </div>
</nav>

<?php include 'contactPopup.php'; ?>