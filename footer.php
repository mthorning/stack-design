<section id="footer">
        <div class="container-fluid">
            <p>
                <a href="mailto:matthewthorning@gmail.com">&copy; 2016 stack-design</a>
            </p>
        </div>
    </section>




    <!-- jQuery (necessary for Bootstrap 's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!--    jquery ui-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>

    <script>
        $(function () {

            $('#navbarContactBtn').click(function () {
                $('#containerForHiding').toggle();
            });
            $('#formClose').click(function () {
                $('#containerForHiding').css('display', 'none');
            });

            $('#closeContainer').hover(function () {
                $('#formClose').css('opacity', 0.8);
            }, function () {
                $('#formClose').css('opacity', 0);
            });
        });
    </script>