$(document).ready(function () {

    //open enquiry popup
    $('.enquireBtn').click(function () {
        openClosePopup('#contactContainer');
    });

});

//FUNCTIONS

function openClosePopup(container) {
    $(container).fadeToggle('slow');
}