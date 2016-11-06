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
                        setTimeout(function() {
                            $('#slideBox3').hide();
                            $('#aurora').slideUp('slow');
                        }, 3000);
                    }, 500);
                }, 3000);
            }, 500);
        }, 3000);
    }, 500);
    
});
