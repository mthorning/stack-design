$(document).ready(function () {
    
    setTimeout(function () {
        $('#slideBox1').slideDown();
        setTimeout(function () {
            $('#slideBox1').slideUp();
            setTimeout(function () {
                $('#slideBox2').slideDown();
                setTimeout(function () {
                    $('#slideBox2').slideUp();
                    setTimeout(function () {
                        $('#slideBox3').slideDown();
                    }, 1000);
                }, 6000);
            }, 1000);
        }, 3000);
    }, 1000);
    
});
