<!--define PHP variables and set to empty-->
<?php 

        $validated = true;
        $contactType = $name = $email = $phone = $comments =$ename = $ecomments = $result = $class = "";
        $nameErr = $emailErr = $phoneErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $contactType = $_POST["contactType"];
            
            //validation
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
                $validated = false;
            } else {
                $ename = $_POST["name"];
                $name = test_input($_POST["name"]);
                //check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                    $nameErr = "Only letters and white space allowed"; 
                    $validated = false;
                }
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
                $validated = false;
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format"; 
                    $validated = false;
                }
            }

            if (empty($_POST["phone"])) {
                $phoneErr = "Phone number is required";
                $validated = false;
            } else {
                $phone = test_input($_POST["phone"]);
                //check if name only contains letters and whitespace
                if (!preg_match("/^[0][0-9]{10}$/",$phone)) {
                    $phoneErr = "Phone number should be 11 digits long and only contain numbers"; 
                    $validated = false;
                }
            }
            
            if (empty($_POST["comments"])) {
                $comments = "";
            } else {
                $ecomments = $_POST["comments"];
                $comments = test_input($_POST["comments"]);
            }
            //end validation
            
            if ($validated == true) {
                //connect to db 
                $link = @mysqli_connect("localhost", "patterso_admin", "m,vP&B!dg}!p", "patterso_enquiries") or die ("ERROR: Unable to connect: ".mysqli_connect_error());

                //create enquiry
                $sql = "INSERT INTO cust_response (contact_type, name, email_address, phone_number, comments) VALUES ('$contactType', '$name', '$email', $phone, '$comments')";

                //insert into table
                if (mysqli_query($link, $sql)) {
                    
                    //email details
                    $email_to = "ian_pat@hotmail.com";                    
                    $email_subject = ucfirst($contactType). " from a customer.";
                    //email form details
                    $email_message = 
    "<html>
        <body>
            <img style='border: 1px solid black; width: 20%; height: auto;' src='http://premierplasteringtruro.co.uk/img/Premier%20Plastering%20Logo6.png'>
            <div style='padding: 5px;'>
                <h1 Style='color: #FFBD00; text-shadow: 1px 1px 1px #000'>You have been contacted by a customer:</h1>
                <h2>" .ucfirst($contactType). " received from " .ucwords($ename). ".</h2>
                <h3>Message:</h3>
                <p style='padding-left: 30px; font-style: italic; font-size: 1.2em'>" . clean_string($ecomments) . "</p>
            </div>
            <br />
            <hr />
            <p style='font-size: 1.1em'>Email: <span style='font-style: italic'><a href='mailto:" .clean_string($email). "'>" .clean_string($email). "</a></span></p>  
            <p style='font-size: 1.1em'>Phone Number: <span style='font-style: italic'><a href='tel:" .clean_string($phone). "'>" .clean_string($phone). "</a></span></p>  
        </body>
    </html>";
                    
                    
                    $headers = "From: " .$email. "\r\n" .
                                "Reply-To: " .$email. "\r\n".
                                "Content-type: text/html" . "\r\n".
                                "CC: monitor@stack-design.co.uk";
                    mail($email_to, $email_subject, $email_message, $headers);  
 
                    //thank you page
                    $contactType = $name = $email = $phone = $comments = "";
                    $nameErr = $emailErr = $phoneErr = "";
                    echo "<script> window.location.replace('thankyou.php'); </script>";
                } else {
                    print "ERROR: ".$sql;
                }
                } else {
                    $result = '
                        <div class="alert alert-danger">
                            <a id="warningClose" class="close" data-dismiss="alert">&times;</a>
                            <strong>Warning! </strong>There are errors in your form, please see below:
                        </div>';
                    echo "<script> window.location.hash = '#contactLine'; </script>";
            }
            
        }

        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
        }
        
        function test_input($data) {
            $data = trim($data); 
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            $data = str_replace("'", "", $data);
            return $data;
        }
    ?>

    <div id="formContainer" class="container">
        <h1 id="contactTop" class="highlight">Contact Us</h1>
        <br />
        <p id="contactBlurb">
            <b>Please contact us to arrange a free quote.</b> You can use our <a href="#footer">contact details</a> at the base of this page or complete the form below and we will get back to you.
            <br />
            <br /> If you have recently had some work completed by us and would like to tell others about our service then please leave a <em>testimonial.</em>
        </p>
    </div>
    <div class="container-fluid opaque">
        <div class="container">
            <form class="form" id="form" method="post" action="">
                <p id="formQuestion"> Are you making an enquiry or would you like to leave a testimonial?</p>
                <br />
                <div class="radio">
                    <label class="radio-inline" for="enquiry">
                        <input type="radio" value="enquiry" id="enquiry" name="contactType" checked="checked"> Enquiry</label>
                    <label id="contactLine" class="radio-inline" for="testimonial">
                        <input type="radio" value="testimonial" name="contactType"> Testimonial</label>
                </div>
                <br />
                <hr />

                <?php echo $result; ?>

                    <br />
                    <div id="inputBoxes" class="row">
                        <div class="col-md-4 form-group">
                            <label class="form-inline" for="name">Name:
                                <input class="form-control" type="text" name="name" placeholder="Name" value="<?php echo $name; ?>">
                            </label>
                            <p class="error">
                                <?php echo $nameErr;?>
                            </p>
                        </div>
                        <div class="col-md-4 form-group">
                            <label class="form-inline" for="email">Email:
                                <input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
                            </label>
                            <p class="error">
                                <?php echo $emailErr;?>
                            </p>
                        </div>
                        <div class="col-md-4 form-group">
                            <label class="form-inline" for="phone">Phone:
                                <input class="form-control" type="tel" name="phone" placeholder="Phone Number" value="<?php echo $phone; ?>">
                            </label>
                            <p class="error">
                                <?php echo $phoneErr;?>
                            </p>
                        </div>
                    </div>
                    <br />
                    <div class="form-group" id="commentsGroup">
                        <label for="comments">Enter Your Comments: </label>
                        <textarea id="commentBox" class="form-control" rows="5" name="comments"><?php echo $comments; ?></textarea>
                    </div>
                    <br />
                    <div class="form-group">
                        <input class="btn btn-lg btn-success" type="submit" name="formSubmit">
                    </div>
            </form>
        </div>
    </div>