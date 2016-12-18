$(document).ready(function () {

    //open enquiry popup
    $('.enquireBtn').click(function () {
        openClosePopup('#contactContainer');
        setTimeout(function () {
            $('#name').val(null);
            $('#email').val(null);
            $('#subject').val(null);
            $('#topMessage').html("<h3>How can I help?</h3>");
        }, 500);
        clearTimeout();
    });
    
});

//FUNCTIONS

function openClosePopup(container) {
    $(container).fadeToggle(50);
}
    
