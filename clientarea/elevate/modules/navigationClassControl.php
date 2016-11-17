<script type="text/javascript">
        $(function () {

        $('li').removeClass('active');
        $('#<?php echo $title; ?>').addClass('active');

        $('#navToggleButton').click(function () {
            $('#dropdownNavMenu').toggleClass('pull-right');

        });
    });
</script>