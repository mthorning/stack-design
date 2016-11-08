$(document).ready(function () {
    
    $('.black').hide();
    
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
                        }, 6000);
                    }, 700);
                }, 4000);
            }, 700);
        }, 3000);
    }, 700);
   
    clearTimeout();
});
