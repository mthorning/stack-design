$(document).ready(function () {

    //open enquiry popup
    $('.enquireBtn').click(function () {
        openClosePopup('#contactContainer');
        setTimeout(function() {
            $('#name').val('');
            $('#email').val('');
            $('#subject').val('');
        }, 2000)
    });

});

//FUNCTIONS

function openClosePopup(container) {
    $(container).fadeToggle('slow');
}