<section id="contactContainer" class="containerForHiding">
    <div class="container-fluid popUpContainer">
        <div class="popUpFormContainer">
            <div class="closeContainer">
                <span class="enquireBtn glyphicon glyphicon-remove formClose"></span>
            </div>
            <div id="successMessage">
                <div class="closeContainer">
                    <span class="enquireBtn glyphicon glyphicon-remove formClose"></span>
                </div>
                <div id="alertContainer">
                    <img src="img/greenTick.png" alt="Green tick mark">
                    <div>
                        <h3>Thank you for your message.</h3>
                    </div>
                </div>
            </div>
            <br />
            <div id="topMessage"><?php echo $topMessage ?></div>
            <form action="modules/enquiry.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Name" value="<?php echo $formName; ?>">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Email address" value="<?php echo $formEmail; ?>">
                    <label for="subject">Subject:</label>
                    <input class="form-control" type="text" id="subject" name="subject" placeholder="What is the subject of your message?" value="<?php echo $formSubject; ?>">
                    <label for="comment">Message:</label>
                    <textarea class="form-control" name="comment" id="comment" rows="5" placeholder="What is your message?"><?php echo $formMessage; ?></textarea>
                    <input type="submit" class="btn btn-custom">
                </div>
            </form>
        </div>
    </div>
</section>