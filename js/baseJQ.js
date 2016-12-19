$(document).ready(function () {

    //open enquiry popup
    $('.enquireBtn').click(function () {
        openClosePopup('#contactContainer');
        setTimeout(function () {
            $('#name').val(null);
            $('#name').focus();
            $('#email').val(null);
            $('#subject').val(null);
            $('#comment').val(null);
            $('#topMessage').html("<h3>How can I help?</h3>");
        }, 100);
            $('#successMessage').hide();
        clearTimeout();
    });
    
});

//FUNCTIONS

function openClosePopup(container) {
    $(container).fadeToggle(50);
}
   