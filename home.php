<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Stack-Design</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
        <!--default for white or inverse for black-->
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="home.html"><h4>Stack-<br />Design</h4></a>
                <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                    <!--bootstrap has some built-in functionality with data-target referring to the id of the containing div and data-toggle defining the function of the button as in JQuery-->
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
            </div>
            <div id="navbarCollapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Blog<span class="caret"></span></a></li>
                    <li><a id="navbarContactBtn">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="containerForHiding">
        <div id="contactPopUpContainer" class="container-fluid">
            <div id="contactPopUpFormContainer">
                <div id="closeContainer">
                    <span id="formClose" class="glyphicon glyphicon-remove"></span>
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
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </section>

    
</body>

</html>