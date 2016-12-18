<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client Login</title>

    <?php include 'components/headLinks.php'; ?>

</head>

<body class="basicPageTemplate" id="clientLoginPage">
 
    <?php
    $class = $errors = null;
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //            sterilize and set variables
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        
//            set session variables
        if (!$username) {
            $errors .= '<p>Please enter a username</p>';
        }
        
        if (!$password) {
            $errors .= '<p>Please enter a password</p>';
        }
        
//            connect to DB if no errors
        if ($errors) {
            $class = 'class="alert alert-danger"';
        } else {
//                connect to DB
            include 'modules/config.php';
            
            //get data
            $retVal = mysql_query('SELECT * FROM users WHERE username = "'.$username.'"');
            
            //get associative array from data
            $row = mysql_fetch_array($retVal, MYSQL_ASSOC);
            
            //get row id from array
            $id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            
            if (!$id) {
                $errors .= '<p>Incorrect Username or Password combination</p>';
            } else {
                //get data
                $retVal = mysql_query('SELECT password FROM users WHERE id = "'.$id.'"');
                
                //get array from data
                $row = mysql_fetch_array($retVal, MYSQL_ASSOC);
                
                //get password from array
                $result = $row['password'];
                
                //check for password match
                if ($result == $password) {
                    //save site access into array
                    
                    //get data
                    $retVal = mysql_query('SELECT * FROM useraccess WHERE username = "'.$username.'"');
                    
                    //get arrays from data
                    $sites = array();
                    $siteFolders = array();
                    
                    while ($row = mysql_fetch_array($retVal, MYSQL_ASSOC)) {
                        array_push($sites, $row['site']);
                        
                        //create array of site folders
                        $retVal2 = mysql_query('SELECT folder FROM sitedetails WHERE site = "'.$row['site'].'"');
                        $row2 = mysql_fetch_array($retVal2, MYSQL_ASSOC);
                        array_push($siteFolders, $row2['folder']);
                    }
                    
                    
                    //pass arrays to SESSION
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    $_SESSION['email'] = $email;
                    $_SESSION['lastname'] = $lastname;
                    $_SESSION['firstname'] = $firstname;
                    $_SESSION['sites'] = $sites;
                    $_SESSION['siteFolders'] = $siteFolders;
                    //close connection and open user page
                    mysql_close($con);
                    header('Location: userPage.php');
                } else {
                    $errors .= '<p>Incorrect Username or Password combination</p>';
                }
            }
        }
        
        if ($errors) {
             $class = 'class="alert alert-danger"';
        }
    }
    
?>

<div class="container standardContainer">
    <a href="<?php
    if (isset($_SESSION['currentPage'])) {
        echo $_SESSION['currentPage'];
    } else {
        echo 'home.php.';
    }
    ?>" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
    <h1>Please enter your login details:</h1>
    <div <?php echo $class; ?> >
        <?php echo $errors; ?>
    </div>

    <form action="" method="post" class="form-inline">
        <div class="form-group">
            <label for="username">Username:
                <input autofocus class="form-control" type="text" id="username" name="username" placeholder="Username">
            </label>
        </div>
        <div class="form-group">
            <label for="password">Password:
                <input class="form-control" type="password" name="password" placeholder="Password">
            </label>
        </div>
        <br />
        <input type="submit" class="btn btn-lg btn-custom pull-right">
    </form>
</div>

<script type="text/javascript" src="js/baseJQ.js"></script>

</body>


</html>