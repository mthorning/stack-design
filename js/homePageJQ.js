$(document).ready(function () {

    setTimeout(function () {
        setTimeout(function () {
            $('#slideBox1').slideDown(1000);
            setTimeout(function () {
                $('#slideBox1').slideUp(1000);
                setTimeout(function () {
                    $('#slideBox2').slideDown(1000);
                    setTimeout(function () {
                        $('#slideBox2').slideUp(1000);
                        setTimeout(function () {
                            $('#slideBox3').slideDown(1000);
                            setTimeout(function () {
                                $('#slideBox3').slideUp(1000);
                                setTimeout(function () {
                                    $('#slideBox4').slideDown(1000);
                                    setTimeout(function () {
                                        $('#slideBox4').slideUp(1000, function () {
                                            $('#welcomeSequence').slideUp(1400);
                                        });
                                    }, 3000);
                                }, 700);
                            }, 3000);
                        }, 700);
                    }, 3000);
                }, 700);
            }, 3000);
        }, 700);
    }, 700);

    clearTimeout();
});