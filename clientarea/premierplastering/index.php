<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="keywords" content="Plasterer, Rendering, Experienced, Cornwall, Truro, Cornish">
    <meta name="description" content=" With over 30 years of experience, Ian Patterson is the best choice for plastering and building services in Cornwall. Services include rendering, skimming, flooring, concreting and re-pointing.">
    <title>Premier Plastering</title>
    <?php include 'headlinks.php'; ?>




    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/custom-style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!--lightbox -->
    <div id="lightbox">
        <p id="clickToClose">
            Click anywhere to close.
        </p>
        <div id="photoFrame">
            <img id="displayedImg" src="img/mainImage1.jpg">
        </div>
    </div>

    <!--fixed background image-->
    <img id="fixed" src="img/mainImage2.jpg">

        <?php include "header.php"; ?>
            <section id="homeSection">
                <div class="container">
                    <h1 class="highlight">Premier Plastering</h1>
                    <p>
                        With
                        <?php echo date("Y")-1980 ?> years of experience in the trade, Premier Plastering is the best choice for plastering services in Cornwall. Whether you’re looking for a small home improvement job or you’re a contractor seeking commercial plastering services, Premier Plastering specialises in jobs of all sizes.
                    </p>

                </div>
                <div class="container jumboContainer">
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-xs-12">
                                <h1>Get in touch today!</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p>
                                    Give us a call or leave your details to arrange a free, no obligation quote.
                                </p>
                            </div>
                            <div class="col-md-4">
                                <a id="enquireButton" href="#contactSection" class=" btn-primary btn-lg">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div id="whereWeWorkDiv" class="container-fluid opaque">
                    <h1 class="highlight-shadow">Where We Work</h1>
                    <div class="container row">
                        <div class="col-md-6">
                            <h3>We work in the following areas:</h3>
                            <br />
                            <div id="listContainer">
                                <div>
                                    <ul>
                                        <li>Truro</li>
                                        <li>Newquay</li>
                                        <li>Falmouth</li>
                                        <li>Helston</li>
                                        <li>Camborne</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul>
                                        <li>Redruth</li>
                                        <li>Penzance</li>
                                        <li>St Ives</li>
                                        <li>Hayle</li>
                                    </ul>
                                </div>
                            </div>
                            <br />
                            <br />
                        </div>
                        <div class="col-md-6">
                            <h3 id="makeEnquiry">Make an enquiry if you are unsure whether we work in your area.</h3>
                            <br />
                            <br />
                            <a href="#contactSection" class="btn btn-lg btn-primary">Enquire</a>
                        </div>
                    </div>
                    
                </div>  
            </section>
            <section id="contactSection">
                <?php include "contact.php"; ?>
            </section>
            <?php include "footer.php"; ?>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script src="js/customJQuery.js"></script>
    
    
</body>

</html>